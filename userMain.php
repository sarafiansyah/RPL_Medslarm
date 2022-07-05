<?php
include "_php/function.php";
session_start();
verifyCookie();

if (!isset($_SESSION['username'])) {
	header('Location: index.php');
	return;
}

$no = 1;
$username = $_SESSION['username'];
$showdataadm = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'"));



?>

<!doctype html>
<html lang="en">

<head>
	<title>Sidebar 09</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./sidebar-09/css/style.css">
	<link rel="stylesheet" href="./calendar-04/css/style.css">
	<link rel="stylesheet" href="css/styles.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
	<div class="mainbg1" id="home">
		<?php include("fw/nav-log.php") ?>
		<div class="container">


		</div>
	</div>
	<div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar">
			<div class="custom-menu">
				<button type="button" id="sidebarCollapse" class="btn btn-primary">
				</button>
			</div>
			<div class="img bg-wrap text-center py-4" style="background-image: url(./sidebar-09/images/bg_1.jpg);">
				<div class="user-logo">
					<div class="img" style="background-image: url(./sidebar-09/images/logo.jpg);"></div>
					<h3><?php echo $showdataadm['nama_depan'] . " " . $showdataadm['nama_belakang'] ?></h3>
				</div>
			</div>
			<ul class="list-unstyled components mb-5">
				<li class="active">
					<a href="#"><span class="fa fa-home mr-3"></span> Home</a>
				</li>
				<li class="active">
					<a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Calendar</a>
				</li>
				<li class="active">
					<a href="#"><span class="fa fa-gift mr-3"></span> Reminders</a>
				</li>
				<li class="active">
					<a href="#"><span class="fa fa-trophy mr-3"></span> Medicines</a>
				</li>
				<li class="active">
					<a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
				</li>
				<li class="active">
					<a href="#"><span class="fa fa-support mr-3"></span> Support</a>
				</li>
				<li class="active">
					<a href="#"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
				</li>
			</ul>

		</nav>

		<!-- Page Content  -->
		<div id="content" class="" style="margin-top: -50px;">
			<section class="ftco-section">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-6 text-center mb-5">
							<h2 class="heading-section" style="font-size: 40px;"><b>Welcome, <?php echo $showdataadm['nama_depan'] ?></b></h2>
							<p style="font-size: 20px;">Having a scheduled medicines to take? <br>Start making your reminders below!</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="content w-100">
								<div class="calendar-container">
									<div class="calendar">
										<div class="year-header">
											<span class="left-button fa fa-chevron-left" id="prev"> </span>
											<span class="year mx-auto" id="label" style="margin-top: -20px; margin-left: -200px;"></span>
											<span class="right-button fa fa-chevron-right" id="next"> </span>
										</div>
										<table class="months-table w-100">
											<tbody>
												<tr class="months-row">
													<td class="month">Jan</td>
													<td class="month">Feb</td>
													<td class="month">Mar</td>
													<td class="month">Apr</td>
													<td class="month">May</td>
													<td class="month">Jun</td>
													<td class="month">Jul</td>
													<td class="month">Aug</td>
													<td class="month">Sep</td>
													<td class="month">Oct</td>
													<td class="month">Nov</td>
													<td class="month">Dec</td>
												</tr>
											</tbody>
										</table>

										<table class="days-table w-100">
											<td class="day">Sun</td>
											<td class="day">Mon</td>
											<td class="day">Tue</td>
											<td class="day">Wed</td>
											<td class="day">Thu</td>
											<td class="day">Fri</td>
											<td class="day">Sat</td>
										</table>
										<div class="frame">
											<table class="dates-table w-100">
												<tbody class="tbody">
												</tbody>
											</table>
										</div>
										<button class="button" id="add-button">Add Reminder</button>
									</div>
								</div>
								<div class="events-container">
								</div>
								<div class="dialog" id="dialog">
									<h2 class="dialog-header"> Add New Reminder </h2>
									<form class="form" id="form" style="margin-top: -50px;">
										<div class="form-container" align="center">
											<label class="form-label" id="valueFromMyButton" for="name">Nama Obat</label>
											<input class="input" type="text" id="name" maxlength="36">
											<label class="form-label" id="valueFromMyButton" for="count">Dosis</label>
											<input class="input" type="number" id="count" min="0" max="1000000" maxlength="7">
											<label class="form-label" id="valueFromMyButton" for="time">Berapa Kali Sehari</label>
											<input class="input" type="number" id="time" maxlength="36">
											<input type="button" value="Cancel" class="button" id="cancel-button">
											<input type="button" value="OK" class="button button-white" id="ok-button">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<!-- Footer -->
	<?php include("fw/footer-main.php") ?>
	<!-- Footer -->

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
	<script src="./sidebar-09/js/jquery.min.js"></script>
	<script src="./sidebar-09/js/popper.js"></script>
	<script src="./sidebar-09/js/bootstrap.min.js"></script>
	<script src="./sidebar-09/js/main.js"></script>
	<script src="./calendar-04/js/main.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>