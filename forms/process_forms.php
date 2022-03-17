<?php
if(isset($_POST['register'])){


	$name = trim($_POST['username']);
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);

	$form_errors = [];


	if(empty($name)){

		$form_errors[] = "Please enter your name";

	}

	if(empty($email)){
		$form_errors[] = "Please enter your email";
	}

	if(empty($password)){
		$form_errors[] = "Enter your password";
	}


	if(empty($form_errors)){
		$feedback = registerNewUser($name, $email, $password);

		if($feedback['data'] == true){

			echo "<div class='alert alert-success'>{$feedback['message']}</div>";

		}else{

			echo "<div class='alert alert-danger'>{$feedback['message']}</div>";

		}
	}else{

		foreach($form_errors as $error){

			echo "<div class='alert alert-danger'>{$error}</div>";

		}


	}

}




//Login
if(isset($_POST['login'])){

	$email = trim($_POST['email']);
	$password = trim($_POST['password']);


	$form_errors = [];

	if(empty($email)){
		$form_errors[] = "Please enter your email";
	}

	if(empty($password)){
		$form_errors[] = "Please enter password";
	}

	if(empty($form_errors)){
		$feedback = loginUser($email, $password);

		if($feedback['data'] == false){
			echo "<div class='alert alert-danger'>{$feedback['message']}</div>";
		}
	}else{

		foreach ($form_errors as $error) {
			echo "<div class='alert alert-danger'>{$error}</div>";
		}


	}



}


//Upload 
if(isset($_POST['upload'])){

	// echo "<pre>";
	// print_r($_FILES);

	$allowed_types = ['image/png', 'image/jpeg', 'image/PNG', 'image/JPG'];


	$pf = $_FILES['profile_upload'];

	$pf_name = $pf['name'];
	$pf_type = $pf['type'];
	$pf_tmp = $pf['tmp_name'];

	if(in_array($pf_type, $allowed_types)){

		if(!is_dir("{$id}")){
			mkdir("{$id}");
		}

		$photo_path = "{$id}/{$pf_name}";

		move_uploaded_file($pf_tmp, $photo_path);

		//add this to the database..
		registerPhoto($id, $photo_path);


	}

}