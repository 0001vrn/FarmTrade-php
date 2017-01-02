<?php
session_start();
include 'dbh.php';

$uname = $_POST['name'];
$aadhar = $_POST['aadhar'];
$pwd = $_POST['pass'];

$sql = "INSERT INTO users (uname,aadhar,pwd)
VALUES ('$uname','$aadhar','$pwd')";

$res = mysqli_query($conn,$sql);

header("Location: index.php");

?>