<?php

//user_registration.php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include 'database_connection.php';

include 'function.php';

if (is_user_login()) {
	header('location:issue_book_details.php');
}

$message = '';

$success = '';

if (isset($_POST["register_button"])) {
	$formdata = array();

	if (empty($_POST["user_email_address"])) {
		$message .= '<li>Email Address is required</li>';
	} else {
		if (!filter_var($_POST["user_email_address"], FILTER_VALIDATE_EMAIL)) {
			$message .= '<li>Invalid Email Address</li>';
		} else {
			$formdata['user_email_address'] = trim($_POST['user_email_address']);
		}
	}

	if (empty($_POST["user_password"])) {
		$message .= '<li>Password is required</li>';
	} else {
		$formdata['user_password'] = trim($_POST['user_password']);
	}

	if (empty($_POST['user_name'])) {
		$message .= '<li>User Name is required</li>';
	} else {
		$formdata['user_name'] = trim($_POST['user_name']);
	}
	if (empty($_POST['user_prn_no'])) {
		$message .= '<li>User PRN Number is required</li>';
	} else {
		$formdata['user_prn_no'] = trim($_POST['user_prn_no']);
	}

	if (empty($_POST['user_course_name'])) {
		$message .= '<li>User Course Detail is required</li>';
	} else {
		$formdata['user_course_name'] = trim($_POST['user_course_name']);
	}

	if (empty($_POST['user_studying_year'])) {
		$message .= '<li>User Studying Year is required</li>';
	} else {
		$formdata['user_studying_year'] = trim($_POST['user_studying_year']);
	}

	if (empty($_POST['user_admission_year'])) {
		$message .= '<li>User Admission Year is required</li>';
	} else {
		$formdata['user_admission_year'] = trim($_POST['user_admission_year']);
	}

	if (empty($_POST['user_address'])) {
		$message .= '<li>User Address Detail is required</li>';
	} else {
		$formdata['user_address'] = trim($_POST['user_address']);
	}

	if (empty($_POST['user_contact_no'])) {
		$message .= '<li>User Contact Number Detail is required</li>';
	} else {
		$formdata['user_contact_no'] = trim($_POST['user_contact_no']);
	}

	if (!empty($_FILES['user_profile']['name'])) {
		$img_name = $_FILES['user_profile']['name'];
		$img_type = $_FILES['user_profile']['type'];
		$tmp_name = $_FILES['user_profile']['tmp_name'];
		$fileinfo = @getimagesize($tmp_name);
		$width = $fileinfo[0];
		$height = $fileinfo[1];

		$image_size = $_FILES['user_profile']['size'];

		$img_explode = explode(".", $img_name);

		$img_ext = strtolower(end($img_explode));

		$extensions = ["jpeg", "png", "jpg"];

		if (in_array($img_ext, $extensions)) {
			if ($image_size <= 2000000) {
				if ($width == '225' && $height == '225') {
					$new_img_name = time() . '-' . rand() . '.' . $img_ext;
					if (move_uploaded_file($tmp_name, "upload/" . $new_img_name)) {
						$formdata['user_profile'] = $new_img_name;
					}
				} else {
					$message .= '<li>Image dimension should be within 225 X 225</li>';
				}
			} else {
				$message .= '<li>Image size exceeds 2MB</li>';
			}
		} else {
			$message .= '<li>Invalid Image File</li>';
		}
	} else {
		$message .= '<li>Please Select Profile Image</li>';
	}

	if ($message == '') {
		$data = array(
			':user_email_address'		=>	$formdata['user_email_address']
		);

		$query = "
		SELECT * FROM lms_user 
        WHERE user_email_address = :user_email_address
		";

		$statement = $connect->prepare($query);

		$statement->execute($data);

		if ($statement->rowCount() > 0) {
			$message = '<li>Email Already Register</li>';
		} else {
			$user_verificaton_code = md5(uniqid());

			$user_unique_id = 'U' . rand(10000000, 99999999);

			$data = array(
				':user_name'			=>	$formdata['user_name'],
				':user_address'			=>	$formdata['user_address'],
				':user_prn_no'			=>	$formdata['user_prn_no'],
				':user_course_name'		=>	$formdata['user_course_name'],
				':user_admission_year'	=>	$formdata['user_admission_year'],
				':user_studying_year'	=>	$formdata['user_studying_year'],
				':user_contact_no'		=>	$formdata['user_contact_no'],
				':user_profile'			=>	$formdata['user_profile'],
				':user_email_address'	=>	$formdata['user_email_address'],
				':user_password'		=>	$formdata['user_password'],
				':user_verificaton_code' =>	$user_verificaton_code,
				':user_verification_status'	=>	'No',
				':user_unique_id'		=>	$user_unique_id,
				':user_status'			=>	'Enable',
				':user_created_on'		=>	get_date_time($connect)
			);

			$query = "
			INSERT INTO lms_user 
            (user_name, user_address, user_prn_no, user_course_name, user_admission_year, user_studying_year, user_contact_no, user_profile, user_email_address, user_password, user_verificaton_code, user_verification_status, user_unique_id, user_status, user_created_on) 
            VALUES (:user_name, :user_address, :user_prn_no, :user_course_name, :user_admission_year, :user_studying_year, :user_contact_no, :user_profile, :user_email_address, :user_password, :user_verificaton_code, :user_verification_status, :user_unique_id, :user_status, :user_created_on)
			";

			$statement = $connect->prepare($query);

			$statement->execute($data);

			require 'vendor/autoload.php';

			$mail = new PHPMailer(true);

			try {

				$mail->isSMTP();

				$mail->Host = 'smtp-mail.outlook.com';  //Here you have to define SMTP

				$mail->SMTPAuth = true;

				$mail->Username = 'Here Your Outlook Email Id';  //Here you can use your Email Address

				$mail->Password = 'Here Password';  //Here you can use your Address Password

				$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

				$mail->Port = 587;

				$mail->setFrom('Here Sender Email Id', 'Here Sender Name');

				$mail->addAddress($formdata['user_email_address'], $formdata['user_name']);

				$mail->isHTML(true);

				$mail->Subject = 'Registration Verification for BVPDUDET Library Management System';

				$mail->Body = '
				<p>Thank you for registering for Library Management System & your Unique ID is <b>' . $user_unique_id . '</b> which will be used for issue book.</p>

                <p>This is a verification email, please click the link to verify your email address.</p>
                <p><a href="' . base_url() . 'verify.php?code=' . $user_verificaton_code . '">Click to Verify</a></p>
                <p>Thank you...</p>
			';

				$mail->AltBody = 'Body in plain text for non-HTML mail clients';

				$mail->send();

				$success = 'Verification Email sent to ' . $formdata['user_email_address'] . ', so before login first verify your email';
			} catch (Exception $e) {
				$message = "<h6>Message could not be sent. Mailer Error:</h6>{$mail->ErrorInfo}";
			}
		}
	}
}

include 'header.php';

?>


<div class="d-flex align-items-center justify-content-center mt-5 mb-5" style="min-height:700px;">
	<div class="col-md-6">
		<?php

		if ($message != '') {
			echo '<div class="alert alert-danger"><ul>' . $message . '</ul></div>';
		}

		if ($success != '') {
			echo '<div class="alert alert-success">' . $success . '</div>';
		}

		?>
		<div class="card">
			<div class="card-header">New User Registration</div>
			<div class="card-body">
				<form method="POST" enctype="multipart/form-data">
					<div class="mb-3">
						<label class="form-label">Email address</label>
						<input type="text" name="user_email_address" id="user_email_address" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">Password</label>
						<input type="password" name="user_password" id="user_password" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">Student Name</label>
						<input type="text" name="user_name" class="form-control" id="user_name" value="" />
					</div>
					<div class="mb-3">
						<label class="form-label">User PRN No.</label>
						<input type="text" name="user_prn_no" id="user_prn_no" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">Course Name</label>
						<input type="text" name="user_course_name" id="user_course_name" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">Studying year</label>
						<input type="text" name="user_studying_year" id="user_studying_year" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">Admission year</label>
						<input type="text" name="user_admission_year" id="user_admission_year" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">Student Contact No.</label>
						<input type="text" name="user_contact_no" id="user_contact_no" class="form-control" />
					</div>
					<div class="mb-3">
						<label class="form-label">User Address</label>
						<textarea name="user_address" id="user_address" class="form-control"></textarea>
					</div>
					<div class="mb-3">
						<label class="form-label">User Photo</label><br />
						<input type="file" name="user_profile" id="user_profile" />
						<br />
						<span class="text-muted">Only .jpg & .png image allowed. Image size must be 225 x 225</span>
					</div>
					<div class="text-center mt-4 mb-2">
						<input type="submit" name="register_button" class="btn btn-primary" value="Register" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<?php


include 'footer.php';

?>
