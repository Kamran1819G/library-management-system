<?php

//index.php

include '../database_connection.php';

include '../function.php';

if(!is_admin_login())
{
	header('location:../admin_login.php');
}


include '../header.php';

?>
<style>
	.counter{
		margin-left: 20px;
	}
</style>
<div class="container-fluid py-4">
	<h1 class="mb-5">Dashboard</h1>
	<div class="row">
		<div class="col-xl-3 col-md-6">
			<div class="card bg-primary text-white mb-4">
				<div class="card-body">
					<h1 class="text-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M102.5 26.03l90.03 345.75 289.22 23.25-90.063-345.75L102.5 26.03zm-18.906 1.564c-30.466 11.873-55.68 53.098-49.75 75.312l3.25 11.78c.667-1.76 1.36-3.522 2.093-5.28C49.097 85.7 65.748 62.64 89.564 50.5l-5.97-22.906zm10.844 41.593c-16.657 10.012-29.92 28.077-38 47.407-5.247 12.55-8.038 25.63-8.75 36.53L112.5 388.407c.294-.55.572-1.106.875-1.656 10.603-19.252 27.823-37.695 51.125-48.47L94.437 69.19zm74.874 287.594c-17.677 9.078-31.145 23.717-39.562 39-4.464 8.107-7.27 16.364-8.688 23.75l11.688 42.408 1.625.125c-3.84-27.548 11.352-60.504 41.25-81.094l-6.313-24.19zm26.344 34c-32.567 17.27-46.51 52.44-41.844 72.94l289.844 24.5c-5.34-7.79-8.673-17.947-8.594-28.5l-22.406-9L459 443.436l-13.5-12.875c5.604-6.917 13.707-13.05 24.813-17.687L195.656 390.78z"></path></svg><span class="counter"><?php echo Count_total_issue_book_number($connect); ?></span></h1>
					<h5 class="text-center">Total Book Issue</h5>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-warning text-white mb-4">
				<div class="card-body">
					<h1 class="text-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z"></path></svg><span class="counter"><?php echo Count_total_returned_book_number($connect); ?></span></h1>
					<h5 class="text-center">Total Book Returned</h5>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-danger text-white mb-4">
				<div class="card-body">
					<h1 class="text-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M0 56v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V56c0-13.255-10.745-24-24-24H24C10.745 32 0 42.745 0 56zm40 200c0-13.255 10.745-24 24-24s24 10.745 24 24-10.745 24-24 24-24-10.745-24-24zm272 256c-20.183 0-29.485-39.293-33.931-57.795-5.206-21.666-10.589-44.07-25.393-58.902-32.469-32.524-49.503-73.967-89.117-113.111a11.98 11.98 0 0 1-3.558-8.521V59.901c0-6.541 5.243-11.878 11.783-11.998 15.831-.29 36.694-9.079 52.651-16.178C256.189 17.598 295.709.017 343.995 0h2.844c42.777 0 93.363.413 113.774 29.737 8.392 12.057 10.446 27.034 6.148 44.632 16.312 17.053 25.063 48.863 16.382 74.757 17.544 23.432 19.143 56.132 9.308 79.469l.11.11c11.893 11.949 19.523 31.259 19.439 49.197-.156 30.352-26.157 58.098-59.553 58.098H350.723C358.03 364.34 384 388.132 384 430.548 384 504 336 512 312 512z"></path></svg><span class="counter"><?php echo Count_total_not_returned_book_number($connect); ?></span></h1>
					<h5 class="text-center">Total Book Not Return</h5>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-success text-white mb-4">
				<div class="card-body">
					<h1 class="text-center"><?php echo get_currency_symbol($connect) . Count_total_fines_received($connect); ?></span></h1>
					<h5 class="text-center">Total Fines Received</h5>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-success text-white mb-4">
				<div class="card-body">
					<h1 class="text-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M341.79 95.5L65.54 166.379l127.84 58.11 276.025-72.64L341.789 95.5zm-1.577 18.984l74.858 33.059-72.551 19.09-77.258-32.916 74.951-19.233zm142.813 52.395L194.864 242.71l-3.057.805h-.002l-.041.01-2.857-1.3L44.73 178.15l-.184-.092c-5.585-2.793-8.012-1.992-10.77.11-2.757 2.1-5.515 6.88-6.275 12.956-1.519 12.153 3.616 27.58 23.916 34.346l.412.139L193.338 288.5l173.235-45.588V212.45l76-18.345v28.806l42.173-11.097c-4.36-14.037-5.33-29.146-1.72-44.934zm-58.453 50.086l-40 9.656v103.186l21.947-21.948 18.053 12.498V216.965zm58.453 13.914l-40.453 10.646v45.385l42.173-11.098c-4.36-14.036-5.33-29.145-1.72-44.933zM38.42 240.268c-1.803.036-3.177.782-4.642 1.898-2.758 2.101-5.516 6.88-6.276 12.957-1.519 12.153 3.616 27.579 23.916 34.346l.412.138L193.338 352.5l173.235-45.588v-45.387l-174.766 45.99-146.62-65.161a61.602 61.602 0 0 1-4.802-1.874 8.317 8.317 0 0 0-1.965-.212zm6.768 2.086l.021.008-.279-.125.258.117zm437.838 52.525l-40.453 10.646v45.385l42.173-11.097c-4.36-14.037-5.33-29.146-1.72-44.934zM38.42 304.268c-1.803.036-3.177.782-4.642 1.898-2.758 2.101-5.516 6.88-6.276 12.957-1.519 12.153 3.616 27.579 23.916 34.346l.412.138L193.338 416.5l173.235-45.588v-45.387l-174.766 45.99-146.62-65.161a61.602 61.602 0 0 1-4.802-1.874 8.317 8.317 0 0 0-1.965-.212zm6.768 2.086l.021.008-.279-.125.258.117zm363.437 24.855l-38.863 38.863 68.834-18.115-29.97-20.748z"></path></svg><span class="counter"><?php echo Count_total_book_number($connect); ?></span></h1>
					<h5 class="text-center">Total Book</h5>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-danger text-white mb-4">
				<div class="card-body">
					<h1 class="text-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14 1H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V2a1 1 0 00-1-1zM2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg><span class="counter"><?php echo Count_total_author_number($connect); ?></span></h1>
					<h5 class="text-center">Total Author</h5>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-warning text-white mb-4">
				<div class="card-body">
					<h1 class="text-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" viewBox="0 0 18 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M3.5 2h-3c-0.275 0-0.5 0.225-0.5 0.5v11c0 0.275 0.225 0.5 0.5 0.5h3c0.275 0 0.5-0.225 0.5-0.5v-11c0-0.275-0.225-0.5-0.5-0.5zM3 5h-2v-1h2v1z"></path><path d="M8.5 2h-3c-0.275 0-0.5 0.225-0.5 0.5v11c0 0.275 0.225 0.5 0.5 0.5h3c0.275 0 0.5-0.225 0.5-0.5v-11c0-0.275-0.225-0.5-0.5-0.5zM8 5h-2v-1h2v1z"></path><path d="M11.954 2.773l-2.679 1.35c-0.246 0.124-0.345 0.426-0.222 0.671l4.5 8.93c0.124 0.246 0.426 0.345 0.671 0.222l2.679-1.35c0.246-0.124 0.345-0.426 0.222-0.671l-4.5-8.93c-0.124-0.246-0.426-0.345-0.671-0.222z"></path><path d="M14.5 13.5c0 0.276-0.224 0.5-0.5 0.5s-0.5-0.224-0.5-0.5c0-0.276 0.224-0.5 0.5-0.5s0.5 0.224 0.5 0.5z"></path></svg><span class="counter"><?php echo Count_total_category_number($connect); ?></span></h1>
					<h5 class="text-center">Total Category</h5>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card bg-primary text-white mb-4">
				<div class="card-body">
					<h1 class="text-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M169 57v430h78V57h-78zM25 105v190h46V105H25zm158 23h18v320h-18V128zm128.725 7.69l-45.276 8.124 61.825 344.497 45.276-8.124-61.825-344.497zM89 153v270h62V153H89zm281.502 28.68l-27.594 11.773 5.494 12.877 27.594-11.773-5.494-12.877zm12.56 29.433l-27.597 11.772 5.494 12.877 27.593-11.772-5.492-12.877zm12.555 29.434l-27.594 11.77 99.674 233.628 27.594-11.773-99.673-233.625zM25 313v30h46v-30H25zm190 7h18v128h-18V320zM25 361v126h46V361H25zm64 80v46h62v-46H89z"></path></svg><span class="counter"><?php echo Count_total_location_rack_number($connect); ?></span></h1>
					<h5 class="text-center">Total Location Rack</h5>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

include '../footer.php';

?>