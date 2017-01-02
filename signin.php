<?php
session_start();
include 'dbh.php';

$_SESSION['err']="";

$aadhar=$_POST['aadhar'];
$pass=$_POST['pass'];

$sql = "SELECT * from users where aadhar='$aadhar' AND pwd='$pass'";

$res = mysqli_query($conn,$sql);

if(!$row = mysqli_fetch_assoc($res)){
	echo "Your aadhar or password is incorrect";
	$_SESSION['err']="Your aadhar or password is incorrect";
}
else{
	$_SESSION['id'] = $row['id'];
	$_SESSION['uname']=$row['uname'];
}

header("Location: index.php");

?>