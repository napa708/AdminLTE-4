<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "008_napat_salee_21-7-68";

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die("การเชื่อมต่อผิดพลาด: " . mysqli_connect_error());
}
