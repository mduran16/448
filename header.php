<?php 
	session_start();
	$error='';
	require('functions.php');
	//check if user is logged in
	if(!isset($_SESSION['login'])){
		//header('Location: /login.php');
		echo "test";
	}
	else{
		echo "logged in";
	}

?>
<html>
	<head>
		<title>Home | Musician's Ink</title>
		<!-- BEGIN ASSET INCLUDES -->
		<link rel="stylesheet" type="text/css" href="assets/styles/base.css">
		<script type="text/javascript" src="assets/js/jquery.js"></script>
		<script type="text/javascript" src="assets/js/upload_comic.js"></script>
		<!-- END ASSET INCLUDES -->
	</head>
	<body>
	
		<!-- HEADER -->
		<div id="header">
			<div id="header-nav" class="pull-right">
				<ul>
					<li><a href="login.php">Login</a></li>
					<li><a href="register.php">Sign Up</a></li>
					<li><a href="usecase2.html">View/Edit Drafts</a></li>
					<li><a href="usecase3.html">Upload Comic</a></li>
					<li><a href="usecase4.html">Search Comics</a></li>
					<li id="logout"><a href="logout.php">Log Out</a></li>
				</ul>
			</div>
			<div id="logo">
				<a href="index.html">
					<img src="assets/img/logo.png" height="150px" alt="Musicians Ink logo">
				</a>
			</div>

		</div>
		<!-- END HEADER -->

		<div class="main">
			<div id="content">