<?php 
	require "engines/data.php";
	require "engines/engine.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User</title>
</head>

<body>

<?php
	
	
	
	
?>

	<h4>Welcome <?php echo $name; ?> <small><a href='logout.php'>Logout</a></small></h4>

	<h5>Profile Photo</h5>
	<div>
		<div id='profile-photo-id'>
			<?php
			if($profile_photo == NULL){
				echo "<img src='assets/default-avatar.jpeg' width=70>";
			}else{
				echo "<img src='{$profile_photo}' width=70>";

			}
			?>
		</div>

		<?php require "forms/process_forms.php"; ?>
		<form action='' method='POST' enctype="multipart/form-data">
			<input type='file' name='profile_upload'>
			<div>
				<button name='upload'>Change Photo</button>
			</div>
		</form>
	</div>

	
</body>
</html>