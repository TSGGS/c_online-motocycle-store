<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "login";

$con = mysqli_connect($serverName, $userName, $password, $dbName) or die(mysqli_connect_error());
$stmt = mysqli_stmt_init($con);