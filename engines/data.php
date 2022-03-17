<?php
session_start();

if(isset($_SESSION['email'])){
	$id = $_SESSION['id'];
	$email = $_SESSION['email'];
	$name = $_SESSION['name'];
	$profile_photo = $_SESSION['profile_photo'];
}else{
	header("location: app_register.php");
}