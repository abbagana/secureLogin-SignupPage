<?php
// ======= Credit ===========
// Author: Muhammad Abba Gana
// Gsm: +2349039016969
// Whatsapp: +2349039016969
// Email: Abbagana79@gmail.com
// Website: Abbagana.com.ng
// Facebook: Muhammad Abba Gana Kolo
// Instagram: Real_abbagana
// Company: Be With Me Technologies
// Company Website: bewithmetech.com.ng
// ===== Feel free to modify ===========

// Connections Details
error_reporting(0);
$serverName 		= "127.0.0.1";
$serverUser  		= "root";
$serverPass			= "";
$serverDB			= "secure_authentication";


// create connection variable
$conn = new mysqli($serverName, $serverUser, $serverPass, $serverDB);

// check if something goes wrong with the connection
if ($conn->connect_error) {
	die("
		<center>
			<h2>Connection Failure:".$conn->connect_error."</h2>
		</center>
	");
}