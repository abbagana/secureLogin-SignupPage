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
<!DOCTYPE html>
<html>
<head>
	<!-- site Title -->
	<title>Simple Login/Signup Page</title>
	<!-- link style sheeet -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="img/logo.png">
</head>
<body>

	<!-- Main wrapper -->
	<main class="main">
		<!-- Header Information -->
		<div class="header">
			<p>Secure Login & Signup Page Using PHP (Prepare Statement)</p>
		</div>

		<!-- login wrapper -->
		<section class="signup-wrapper">
			<!-- Brand Logo -->
			<div class="brand">
				<a href="https://bewithmetech.com.ng" target="_blank" title="Be With Me Technologies">
					<img src="img/logo.png">
				</a>
			</div>
			<!-- login form -->
			<div class="signup-form">
				<a href="signup.php"><h2>Signup Page</h2></a>
				<!-- Get Respond file  -->
				<?php include 'respond.php'; ?>
				<!--  -->
				<form action="gateway.php" method="POST">
					<input type="text" class="input-form" name="name" id="name" placeholder="Full Name *" required="required" autocomplete="off" title="Insert Your Full Name Here">

					<input type="text" class="input-form" name="email" id="email" placeholder="Email Address *" required="required" autocomplete="off" title="Insert Your Email Address Here">

					<input type="password" class="input-form" name="password" id="password" placeholder="Password *" required="required" autocomplete="off" title="Insert Your Password Here">

					<input type="password" class="input-form" name="cpassword" id="cpassword" placeholder="Confirm Password *" required="required" autocomplete="off" title="Re-Enter Your Password Here">

					<input type="submit" class="input-submit" name="signup" value="submit">
				</form>

				<!-- important links -->
				<section class="important-links">
					<p class="font-14 text-center mt-15">Having trouble signing up?</p>
                    <div class="option-sep">or</div>
                    <div class="action-btn">
                    	<a class="signup" href="index.php">Login Today</a>
                    	<a class="reset" href="#">Reset Password</a>
                    </div>
					
				</section>
			</div>
			
		</section>

		<aside class="empty-space"></aside>

		<!-- footer credit -->
		<section class="footer">
			<p>&copy; <?php echo date("Y"); ?> all right reserved. Created and Designed by <a href="https://abbagana.com.ng" title="Muhammad Abba Gana" target="_blank">Muhammad Abba Gana</a></p>
		</section>
		
	</main>

</body>
</html>