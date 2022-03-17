<?php 
  require "engines/engine.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File Upload | Log in </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-6 m-auto">


<form class="form-signin" method="POST">
  <div class="text-center mb-4">
  
    <h1 class="h3 mb-3 font-weight-normal">File Upload App</h1>
    <p>Log in</p>
  </div>


  <?php  require "forms/process_forms.php"; ?>
  <div class="form-label-group">
    <input type="email" id="inputEmail" class="form-control" name='email' autofocus>
    <label for="inputEmail">Enter Email</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
    <label for="inputPassword">Password</label>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button name='login' class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
  <span><small>Not registered? <a href='app_register.php'>Sign up</a></small></span>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2021</p>

</form>
			</div>
		</div>
	</div>


	




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>