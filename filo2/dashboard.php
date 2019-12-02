<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style/dashboard.css">
	<title>Dashboard</title>
</head>

<body>
	<nav class="navbar">
		<div class="foto-profil">
			<img src="" alt="">

		</div>
		<p>Username</p>
		<ul>
			<a href="dashboard.php?page=course">
				<li>Course</li>
			</a>
			<a href="dashboard.php?page=quiz">
				<li>Quiz</li>
			</a>
			<a href="dashboard.php?page=tugas">
				<li>Assignment</li>
			</a>
			<a href="dashboard.php?page=raport">
				<li>Raport Book</li>
			</a>
			<a href="dashboard.php?page=logout">
				<li>Log Out</li>
			</a>
		</ul>
	</nav>
	<div class="main-content">
		<?php
		define('dashboard', true);

		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		} else {
			$page = "dashboard";
		}
		require_once("apps.php");
		require_once $page . ".php";
		?>
	</div>
</body>
</html>