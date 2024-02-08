<?php

//header.php

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="generator" content="">
        <title>BVPDUDET Library Management System</title>
        <link rel="canonical" href="">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url(); ?>asset/css/simple-datatables-style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>asset/css/styles.css" rel="stylesheet" />
        <script src="<?php echo base_url(); ?>asset/js/font-awesome-5-all.min.js" crossorigin="anonymous"></script>
        <!-- Favicons -->
        <link rel="icon" type="image/x-icon" href="asset/images/favicon.ico">
        <link rel="apple-touch-icon" href="" sizes="180x180">
        <link rel="icon" href="" sizes="32x32" type="image/png">
        <link rel="icon" href="" sizes="16x16" type="image/png">
        <link rel="manifest" href="">
        <link rel="mask-icon" href="" color="#7952b3">
        <link rel="icon" href="">
        <meta name="theme-color" content="#7952b3">
        <style>
            .list-inline-item{
                padding-bottom: 15px;
                margin: 0 7px;
            }
            .name{
                margin-left: 7px;
            }
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }
            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
    </head>

    <?php 

    if(is_admin_login())
    {

    ?>
    <body class="sb-nav-fixed">

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <img src="<?php echo base_url(); ?>asset/images/BVPDU.png" alt="BVPDU" style="height: 50px; width: 50px">
            <a class="navbar-brand ps-3" href="index.php">Library System</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="profile.php"><svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9ZM14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM3 12C3 14.0902 3.71255 16.014 4.90798 17.5417C6.55245 15.3889 9.14627 14 12.0645 14C14.9448 14 17.5092 15.3531 19.1565 17.4583C20.313 15.9443 21 14.0524 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 21C9.84977 21 7.87565 20.2459 6.32767 18.9878C7.59352 17.1812 9.69106 16 12.0645 16C14.4084 16 16.4833 17.1521 17.7538 18.9209C16.1939 20.2191 14.1881 21 12 21Z" fill="currentColor"></path></svg><span class="name">Profile</span></a></li>
                        <li><a class="dropdown-item" href="setting.php"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M512.5 390.6c-29.9 0-57.9 11.6-79.1 32.8-21.1 21.2-32.8 49.2-32.8 79.1 0 29.9 11.7 57.9 32.8 79.1 21.2 21.1 49.2 32.8 79.1 32.8 29.9 0 57.9-11.7 79.1-32.8 21.1-21.2 32.8-49.2 32.8-79.1 0-29.9-11.7-57.9-32.8-79.1a110.96 110.96 0 0 0-79.1-32.8zm412.3 235.5l-65.4-55.9c3.1-19 4.7-38.4 4.7-57.7s-1.6-38.8-4.7-57.7l65.4-55.9a32.03 32.03 0 0 0 9.3-35.2l-.9-2.6a442.5 442.5 0 0 0-79.6-137.7l-1.8-2.1a32.12 32.12 0 0 0-35.1-9.5l-81.2 28.9c-30-24.6-63.4-44-99.6-57.5l-15.7-84.9a32.05 32.05 0 0 0-25.8-25.7l-2.7-.5c-52-9.4-106.8-9.4-158.8 0l-2.7.5a32.05 32.05 0 0 0-25.8 25.7l-15.8 85.3a353.44 353.44 0 0 0-98.9 57.3l-81.8-29.1a32 32 0 0 0-35.1 9.5l-1.8 2.1a445.93 445.93 0 0 0-79.6 137.7l-.9 2.6c-4.5 12.5-.8 26.5 9.3 35.2l66.2 56.5c-3.1 18.8-4.6 38-4.6 57 0 19.2 1.5 38.4 4.6 57l-66 56.5a32.03 32.03 0 0 0-9.3 35.2l.9 2.6c18.1 50.3 44.8 96.8 79.6 137.7l1.8 2.1a32.12 32.12 0 0 0 35.1 9.5l81.8-29.1c29.8 24.5 63 43.9 98.9 57.3l15.8 85.3a32.05 32.05 0 0 0 25.8 25.7l2.7.5a448.27 448.27 0 0 0 158.8 0l2.7-.5a32.05 32.05 0 0 0 25.8-25.7l15.7-84.9c36.2-13.6 69.6-32.9 99.6-57.5l81.2 28.9a32 32 0 0 0 35.1-9.5l1.8-2.1c34.8-41.1 61.5-87.4 79.6-137.7l.9-2.6c4.3-12.4.6-26.3-9.5-35zm-412.3 52.2c-97.1 0-175.8-78.7-175.8-175.8s78.7-175.8 175.8-175.8 175.8 78.7 175.8 175.8-78.7 175.8-175.8 175.8z"></path></svg><span class="name">Setting</span></a></li>
                        <li><a class="dropdown-item" href="logout.php"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg><span class="name">Logout</a></span></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"></path><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"></path></g></svg><span class="name">Dashboard</span></a>
                            <a class="nav-link" href="category.php"><svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" viewBox="0 0 18 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M3.5 2h-3c-0.275 0-0.5 0.225-0.5 0.5v11c0 0.275 0.225 0.5 0.5 0.5h3c0.275 0 0.5-0.225 0.5-0.5v-11c0-0.275-0.225-0.5-0.5-0.5zM3 5h-2v-1h2v1z"></path><path d="M8.5 2h-3c-0.275 0-0.5 0.225-0.5 0.5v11c0 0.275 0.225 0.5 0.5 0.5h3c0.275 0 0.5-0.225 0.5-0.5v-11c0-0.275-0.225-0.5-0.5-0.5zM8 5h-2v-1h2v1z"></path><path d="M11.954 2.773l-2.679 1.35c-0.246 0.124-0.345 0.426-0.222 0.671l4.5 8.93c0.124 0.246 0.426 0.345 0.671 0.222l2.679-1.35c0.246-0.124 0.345-0.426 0.222-0.671l-4.5-8.93c-0.124-0.246-0.426-0.345-0.671-0.222z"></path><path d="M14.5 13.5c0 0.276-0.224 0.5-0.5 0.5s-0.5-0.224-0.5-0.5c0-0.276 0.224-0.5 0.5-0.5s0.5 0.224 0.5 0.5z"></path></svg><span class="name">Category</span></a>
                            <a class="nav-link" href="author.php"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14 1H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V2a1 1 0 00-1-1zM2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg><span class="name">Author</span></a>
                            <a class="nav-link" href="location_rack.php"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M169 57v430h78V57h-78zM25 105v190h46V105H25zm158 23h18v320h-18V128zm128.725 7.69l-45.276 8.124 61.825 344.497 45.276-8.124-61.825-344.497zM89 153v270h62V153H89zm281.502 28.68l-27.594 11.773 5.494 12.877 27.594-11.773-5.494-12.877zm12.56 29.433l-27.597 11.772 5.494 12.877 27.593-11.772-5.492-12.877zm12.555 29.434l-27.594 11.77 99.674 233.628 27.594-11.773-99.673-233.625zM25 313v30h46v-30H25zm190 7h18v128h-18V320zM25 361v126h46V361H25zm64 80v46h62v-46H89z"></path></svg><span class="name">Location Rack</span></a>
                            <a class="nav-link" href="book.php"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M6,22h15v-2H6.012C5.55,19.988,5,19.805,5,19s0.55-0.988,1.012-1H19h1h1v-1v-2V4c0-1.103-0.897-2-2-2H6 C4.794,2,3,2.799,3,5v3v6v3v2C3,21.201,4.794,22,6,22z M5,8V5c0-0.805,0.55-0.988,1-1h13v11v1H5v-2V8z"></path><path d="M8 6H17V8H8z"></path></svg><span class="name">Book</span></a>
                            <a class="nav-link" href="user.php"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><circle fill="none" cx="12" cy="7" r="3"></circle><path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z"></path></svg><span class="name">User</span></a>
                            <a class="nav-link" href="issue_book.php"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M341.79 95.5L65.54 166.379l127.84 58.11 276.025-72.64L341.789 95.5zm-1.577 18.984l74.858 33.059-72.551 19.09-77.258-32.916 74.951-19.233zm142.813 52.395L194.864 242.71l-3.057.805h-.002l-.041.01-2.857-1.3L44.73 178.15l-.184-.092c-5.585-2.793-8.012-1.992-10.77.11-2.757 2.1-5.515 6.88-6.275 12.956-1.519 12.153 3.616 27.58 23.916 34.346l.412.139L193.338 288.5l173.235-45.588V212.45l76-18.345v28.806l42.173-11.097c-4.36-14.037-5.33-29.146-1.72-44.934zm-58.453 50.086l-40 9.656v103.186l21.947-21.948 18.053 12.498V216.965zm58.453 13.914l-40.453 10.646v45.385l42.173-11.098c-4.36-14.036-5.33-29.145-1.72-44.933zM38.42 240.268c-1.803.036-3.177.782-4.642 1.898-2.758 2.101-5.516 6.88-6.276 12.957-1.519 12.153 3.616 27.579 23.916 34.346l.412.138L193.338 352.5l173.235-45.588v-45.387l-174.766 45.99-146.62-65.161a61.602 61.602 0 0 1-4.802-1.874 8.317 8.317 0 0 0-1.965-.212zm6.768 2.086l.021.008-.279-.125.258.117zm437.838 52.525l-40.453 10.646v45.385l42.173-11.097c-4.36-14.037-5.33-29.146-1.72-44.934zM38.42 304.268c-1.803.036-3.177.782-4.642 1.898-2.758 2.101-5.516 6.88-6.276 12.957-1.519 12.153 3.616 27.579 23.916 34.346l.412.138L193.338 416.5l173.235-45.588v-45.387l-174.766 45.99-146.62-65.161a61.602 61.602 0 0 1-4.802-1.874 8.317 8.317 0 0 0-1.965-.212zm6.768 2.086l.021.008-.279-.125.258.117zm363.437 24.855l-38.863 38.863 68.834-18.115-29.97-20.748z"></path></svg><span class="name">Issue Book</span></a>
                            <a class="nav-link" href="logout.php"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg><span class="name">Logout</span></a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                       
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>


    <?php 
    }
    else
    {

    ?>

    <body>

    	<main>

    		<div class="container py-4">

    			<header class="pb-3 mb-4 border-bottom">
                    <div>
                        <div style="display: flex">
                            <img src="./asset/images/BVPDU.png" style="height: 100px; width: 100px" alt="logo">
        			    <div>
                            <a href="index.php" class="d-flex align-items-center text-dark text-decoration-none">
                                <span class="fs-4" style= "width: 90%">Bharati Vidyapeeth Deemed University Department of Engineering and Technology</span>
                            </a>
                        </div>
                            <?php 

                            if(is_user_login())
                            {
                            ?>
                            <ul class="list-inline" style="float: right">
                                <li class="list-inline-item" style="font-weight: 600;">Unique I'D - <?php echo $_SESSION['user_id']; ?></li>
                                <li class="list-inline-item"><a style="text-decoration: none; color: #000000" href="issue_book_details.php"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M169 57v430h78V57h-78zM25 105v190h46V105H25zm158 23h18v320h-18V128zm128.725 7.69l-45.276 8.124 61.825 344.497 45.276-8.124-61.825-344.497zM89 153v270h62V153H89zm281.502 28.68l-27.594 11.773 5.494 12.877 27.594-11.773-5.494-12.877zm12.56 29.433l-27.597 11.772 5.494 12.877 27.593-11.772-5.492-12.877zm12.555 29.434l-27.594 11.77 99.674 233.628 27.594-11.773-99.673-233.625zM25 313v30h46v-30H25zm190 7h18v128h-18V320zM25 361v126h46V361H25zm64 80v46h62v-46H89z"></path></svg><span class="name">Issue Book</span></a></li>
                                <li class="list-inline-item"><a style="text-decoration: none; color: #000000" href="search_book.php"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z"></path></svg><span class="name">Search Book</span></a></li>
                                <li class="list-inline-item"><a style="text-decoration: none; color: #000000" href="profile.php"><svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9ZM14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM3 12C3 14.0902 3.71255 16.014 4.90798 17.5417C6.55245 15.3889 9.14627 14 12.0645 14C14.9448 14 17.5092 15.3531 19.1565 17.4583C20.313 15.9443 21 14.0524 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 21C9.84977 21 7.87565 20.2459 6.32767 18.9878C7.59352 17.1812 9.69106 16 12.0645 16C14.4084 16 16.4833 17.1521 17.7538 18.9209C16.1939 20.2191 14.1881 21 12 21Z" fill="currentColor"></path></svg><span class="name">Profile</span></a></li>
                                <li class="list-inline-item"><a style="text-decoration: none; color: #000000" href="logout.php"><svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg><span class="name">Logout</span></a></li>
                            </ul>
                            <?php 
                            }

                            ?>
                        </div>
                    </div>

    			</header>
    <?php 
    }
    ?>
    			