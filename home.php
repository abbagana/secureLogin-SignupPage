<!-- 
============== Credit ===================== 
Author: Muhammad Abba Gana
Gsm: +2349039016969
Whatsapp: +2349039016969
Email: Abbagana79@gmail.com
Website: Abbagana.com.ng
Facebook: Muhammad Abba Gana Kolo
Instagram: Real_abbagana
Company: Be With Me Technologies
Company Website: bewithmetech.com.ng
 -->

<?php 
// check if user is really logged in 
session_start();

// set the session information to some variables
$activeRole		= 	$_SESSION['role'];
$activeID 		=   $_SESSION['user_id']; 
$activeName		=	$_SESSION['loginName'];
$activeEmail	=	$_SESSION['loginEmail'];

// check the user role
if($activeRole !== 'user') {
	// redirect back
	header("location: index.php?mg=notuser");
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<!-- site Title -->
	<title>Simple Login/Signup Page</title>
	<!-- link style sheeet -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<main class="main">
		<h2 class="welcome-text">You are welcome <?php echo($activeName); ?></h2>
		<p class="welcome-p">Feel free to make some stuff here after the user is logged...</p>

		<div class="logout">
			<a href="logout.php">Log Out</a>
		</div>
	</main>
 
 </body>
 </html>