<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File Upload </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-6 m-auto">



<?php

	
	if(isset($_POST['upload'])){

	
		$fp = $_FILES['file_upload'];

		$type = $fp['type'];

		// echo "<pre>";
		// print_r($fp);
		// echo "</pre>";

		$allowed_formats = ["image/jpeg"];

		if(in_array($type, $allowed_formats)){

			move_uploaded_file($fp['tmp_name'], "my_folder/".$fp['name']);

			echo "Success";


		}else{

			echo "Invalid Type, upload only jpeg";
		}









		move_uploaded_file($fp['tmp_name'], "checker");


	}


?>


<form class="form-signin" method="POST" enctype="multipart/form-data">
  <div class="text-center mb-4">
    <img class="mb-4" src="/docs/4.6/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Floating labels</h1>
    <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/css-placeholder-shown">Works in latest Chrome, Safari, Firefox, and IE 10/11 (prefixed).</a></p>
  </div>

  <div class="form-label-group">
    <input type="file" id="inputEmail" class="form-control" name='file_upload' autofocus>
    <label for="inputEmail">Upload Photo</label>
  </div>

  <!-- <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <label for="inputPassword">Password</label>
  </div> -->

 <!--  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div> -->
  <button name='upload' class="btn btn-lg btn-primary btn-block" type="submit">Upload</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2021</p>
</form>
			</div>
		</div>
	</div>


	




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>