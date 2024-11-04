<?php

$con = mysqli_connect('localhost', 'root', '','login');
$Name = $_POST['Name'];
$user_name = $_POST['user_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO `newtable` (`Name`,`user_name`,`phone`,`email`,`password`) VALUES ('$Name','$user_name','$phone','$email','$password')";
$rs = mysqli_query($con, $sql);

if($rs)
{
	header("Location: frmContact1.html?error=Account created successfully");
	echo "Account Created successfully ";
}

?>