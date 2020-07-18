<?php

// ============== Credit ===================== 
// Author: Muhammad Abba Gana
// Gsm: +2349039016969
// Whatsapp: +2349039016969
// Email: Abbagana79@gmail.com
// Website: Abbagana.com.ng
// Facebook: Muhammad Abba Gana Kolo
// Instagram: Real_abbagana
// Company: Be With Me Technologies
// Company Website: bewithmetech.com.ng

$_SESSION['role'] = "none";

session_start();
session_unset();
session_destroy();

header("location: index.php?mg=logout");