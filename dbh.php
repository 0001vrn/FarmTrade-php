<?php
//github username for c9 
//root for local 
$conn = mysqli_connect("localhost","root","","login");

if(!$conn){
	die("connection failed: ".mysqli_connect_error());
}

?>