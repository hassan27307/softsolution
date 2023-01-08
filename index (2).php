<?php
// $showAlert = false;
// $showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$username = "root";
	$password = "";
	$server = "localhost";
	$database = "users56";

	$conn = mysqli_connect($server, $username, $password, $database);
	if (!$conn) {
		die("Error" . mysqli_connect_error());
	}


	$name = $_POST["name"];
	$contact = $_POST["contact"];
	$email = $_POST["email"];
	// $exists = false;
	// $existsSql = "SELECT * FROM `users` WHERE email = '$email'";
	// $result = mysqli_query($conn, $existsSql);
	// $numExistRows = mysqli_num_rows($result);

	$sql = "INSERT INTO `feedback` (`name`, `email`, `contact`) VALUES ('$name', '$email', '$contact')";
	$result = mysqli_query($conn, $sql);

	// $showAlert = true;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="mobile.css">
	<link rel="stylesheet" type="text/css" href="tab.css">
	<script src="https://kit.fontawesome.com/4e55c5f54e.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<title>startup</title>

</head>

<body>
	<nav class="navbar">
		<h1 class="logo">soft<span class="color-text">S</span>olution</h1>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#Services">Services</a></li>
			<li><a href="#About">About</a></li>
			<li><a href="#Contact">Contact</a></li>
		</ul>
	</nav>
	<header class="header">


		<div class="header-div">
			<h1 class="head-text1">SoftSolution is a startup.We build awesome website for you.<br>
				<button class="btn">contact us</button>
			</h1>
			<img src="1.png" class="img-n" alt="">
		</div>
	</header>
	<section id="Services" class="container">
		<p class="main-p">Services</p>
		<h1 class="Services-h1">With our creative team we<br> deliver you the best and the<br> creative product.</h1>
		<div class="main-Services">
			<div class="cards service-wrap" id="card" class="row wow bounceInUp" data-wow-duration="1.2s" data-wow-delay="1.2s">

				<i class="fas fa-palette fa-5x"></i>
				<h3 class="Services-h3" id="H1">Graphics Designer</h3>
				<p class="cards-p" id="P1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet</p>
			</div>
			<div class="cards">
				<i class="fas fa-laptop-code fa-5x"></i>
				<h3 class="Services-h3">Developer</h3>
				<p class="cards-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet</p>
			</div>
			<div class="cards">
				<i class="fas fa-headset fa-5x"></i>
				<h3 class="Services-h3">Digital Marketer</h3>
				<p class="cards-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet</p>
			</div>
		</div>


	</section>
	<section id="About">
		<div class="about-div">
			<p class="about-main-p">About</p>
			<h1 class="about-h1">Experienced team</h1>
			<p class="about-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
			<button class="btn">read more</button>
		</div>
		<img class="img" src="2.jpg" class="img-n" alt="">
	</section>
	<section id="Work">
		<div class="Work-div">

			<h1 class="Work-h1">How we work</h1>
			<p class="Work-p">"Lorem ipsum dolor sit amet, consectetur adipisicing "</p><br>
			<p class="Work-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
			<i class="fas fa-play-circle fa-5x cards-work"></i>

		</div>
		<img class="img" src="3.jpg" class="img-n" alt="">
	</section>


	<section class="sectionmove">
		<div class="col-6 m-0 m-auto">
			<div id="carosselExampleControls" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="div-1" data-bs-slide-to="0" class="active"></button>
					<button type="button" data-bs-target="div-2" data-bs-slide-to="1"></button>
					<button type="button" data-bs-target="div-3" data-bs-slide-to="2"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="./4.jpg" alt="div-1" class="d-block w-100">
						<div class="carousel-caption">
							<h6 class="fw-bold">WELCOME TO "HIB ONLINE EXAM PORTAL"</h6>
							<p>If you think you can, YOU CAN...! If you think you can't, YOU CAN'T...!</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="./5.jpg" alt="Chicago" class="d-block w-100">
						<div class="carousel-caption">
							<h6 class="text-danger fw-bold">WELCOME TO "HIB ONLINE EXAM PORTAL"</h6>
							<p class="text-info">If you think you can, YOU CAN...! If you think you can't, YOU CAN'T...!</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="./6.jpg" alt="New York" class="d-block w-100">
						<div class="carousel-caption">
							<h6 class="text-danger fw-bold">WELCOME TO "HIB ONLINE EXAM PORTAL"</h6>
							<p class="text-info">If you think you can, YOU CAN...! If you think you can't, YOU CAN'T...!</p>
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carosselExampleControls" data-bs-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carosselExampleControls" data-bs-slide="next">
					<span class="carousel-control-next-icon"></span>
				</button>
			</div>
		</div>
	</section>


	<section id="Contact">
		<h1 class="f-h1">Contact us</h1>
		<div class="form">
			<form class="container form" onsubmit="checkValidation()" action="/hassan/index.php" method="POST">
				<input type="text" id="name" name="name" placeholder="Your name">

				<input type="email" id="email" name="email" placeholder="email address">
				<input type="number" id="contact" name="contact" placeholder="phone no">
				<button type="submit" id="submission" class="btn">Submit</button>
			</form>
		</div>
		</div>
	</section>
	<footer>
		<h1>SoftSolution</h1>

		<p>&copy 2022</p>


	</footer>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./script.js"></script>
</body>

</html>