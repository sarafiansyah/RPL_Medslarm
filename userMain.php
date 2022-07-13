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
	<title>Medslarm - Your Scheduled Medicine Reminder</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./sidebar-09/css/style.css">
	<link rel="stylesheet" href="./calendar-04/css/style.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/feedback.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
	<div class="mainbg1" id="home">

		<?php include("fw/nav-log.php") ?>
		<div class="alert alert-success alert-dismissible fade show d-none sc-alert" role="alert">
			<strong>Data Berhasil Ditambahkan!</strong> Menunggu respon dari pihak admin.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
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
					<div class="img" style="background-image: url(images/img-dp/00-default.jpg);"></div>
					<h3 style="font-size: 24px;"><b><?php echo $showdataadm['nama_depan'] . " " . $showdataadm['nama_belakang'] ?></b></h3>
					<h3 style="margin-top: -15px;">Basic User</h3>
				</div>
			</div>
			<ul class="list-unstyled components mb-5">
				<li class="active">
					<a href="userMain.php?page=home"><span class="fa fa-home mr-3"></span> Home</a>
				</li>
				<li class="active">
					<a href="userMain.php?page=profile"><span class="fa fa-home mr-3"></span> Profile</a>
				</li>
				<li class="active">
					<a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Calendar</a>
				</li>
				<li class="active">
					<a href="userMain.php?page=reminder"><i class="fa-solid fa-stopwatch mr-3"></i> Reminders</a>
				</li>
				<li class="active">
					<a href="userMain.php?page=support"><i class="fa-solid fa-pills mr-3"></i> Medicines</a>
				</li>
				<li class="active">
					<a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
				</li>
				<li class="active">
					<a href="userMain.php?page=alarm"><span class="fa fa-support mr-3"></span> Alarm</a>
				</li>
				<li class="active">
					<a href="userMain.php?page=support"><span class="fa fa-support mr-3"></span> Support</a>
				</li>
				<li class="active">
					<a href="logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
				</li>
			</ul>

		</nav>

		<!-- Page Content  -->
		<div id="content" class="" style="margin-top: -50px;">
			<section class="ftco-section">
				<div class="container">


					<?php

					if (isset($_GET['page'])) {
						$page = $_GET['page'];

						switch ($page) {
							case 'home':
								$display = 'userHome.php';
								break;
							case 'profile':
								$display = 'userProfile.php';
								break;
							case 'reminder':
								$display = 'userReminder.php';
								break;
							case 'support':
								$display = 'userSupport.php';
								break;
							case 'alarm':
								$display = 'userAlarm.php';
								break;


							case 'help':
								$display = 'help.php';
								break;
						}
					} else $display = "userHome.php";

					include($display);

					?>


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
	<script src="js/main.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>

	<script>
		const scriptURL = 'https://script.google.com/macros/s/AKfycbxRmBB8fKxQt0PR9oSUAqJAHK9GpR3gG13AwqHQnmMk08qTfsN6ZkT126j-1X8w3_PCcg/exec'
		const form = document.forms['rpl_medslarm']
		const successAlert = document.querySelector('.sc-alert');
		const submitBtn = document.querySelector('.submitBtn');
		const loadingBtn = document.querySelector('.loadingBtn');


		form.addEventListener('submit', e => {
			e.preventDefault()
			submitBtn.classList.toggle('d-none')
			fetch(scriptURL, {
					method: 'POST',
					body: new FormData(form)
				})
				.then((response) => {
					successAlert.classList.toggle('d-none');

					loadingBtn.classList.toggle('d-none');
					submitBtn.classList.toggle('d-none')

					form.reset();
					window.scrollTo(0, 0);
					console.log('Success!', response)
				})

			loadingBtn.classList.toggle('d-none')


				.catch(error => console.error('Error!', error.message))
		})
	</script>


</body>

</html>