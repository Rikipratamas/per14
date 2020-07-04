<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "latihan1";

$conn = mysqli_connect($host, $user, $password, $db);

if ($conn == false)	{
	echo "koneksi ke server gagal";
	die();
}