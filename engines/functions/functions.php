<?php

//bring in the database
require "database/__db.php";


function loginUser($email, $password){
	$conn = $GLOBALS['__conn'];

	$query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' LIMIT 1";

	$result = mysqli_query($conn, $query);

	if($result){
		if(mysqli_num_rows($result) == 1){
			//you have found the match..
			session_start();

			$_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);

			header("location: user.php");


		}else{

			//there is no match for this user..
			//therefore the user does not exist
			
			return [
				'data' => false,
				'message' => "Invalid email/password combination. Have you registered?",
				'status' => 401
			];
		}


	}else{

		//query failed
		return [
				'data' => false,
				'message' => "Something bad happened: ".mysqli_error($conn),
				'status' => 401
			];
	}


}


function registerNewUser($name, $email, $password){

	$response = checkUser($email, $password);

	if($response == true) {

        return [

			"data" => true,
			"message" => "User already exit. You may use this link<a href='app_login.php'> to log into your account</a>",
			"status" => 201 
		];

	} else {
		$conn = $GLOBALS['__conn'];

		$name = mysqli_real_escape_string($conn, trim($name));
		$password = mysqli_real_escape_string($conn, trim($password));


		
		$query = "INSERT `users`(`name`, `email`, `password`, `profile_photo`) VALUES('$name', '$email', '$password', NULL)";



		$result = mysqli_query($conn, $query);

		if($result){

			return [

				"data" => true,
				"message" => "User created successfully. You may <a href='app_login.php'>log into your account</a>",
				"status" => 201 
			];

		}else{
			return [

				"data" => false,
				"message" => "Something unexpected happened: ".mysqli_error($conn),
				"status" => 400 
			];
		}


	}


}

function checkUser($email, $password) {

    $conn = $GLOBALS['__conn'];

    $user_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";

    $users_result = mysqli_query($conn, $user_query);

    if($users_result) {

        if (mysqli_num_rows($users_result) == 1) {
        
            return true;

        } else {

            return false;
            
        }
    }else {
        echo mysqli_error($conn);
    }
}


function registerPhoto($id, $photoPath){
	$conn = $GLOBALS['__conn'];


	$query = "UPDATE `users` SET `profile_photo`= '$photoPath' WHERE `id`=$id LIMIT 1";

	$result = mysqli_query($conn, $query);

	if($result){


		$_SESSION['profile_photo'] = $photoPath;
		header("location: user.php");

		// return [
		// 	"data" => true,
		// 	"message" => "Photo photo updated",
		// 	"status" => 201
		// ];
	}else{
		return [
			"data" => false,
			"message" => "Photo photo could not be updated: ".mysqli_error($conn),
			"status" => 401
		];

	}


}


