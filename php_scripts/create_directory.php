<?php
		ini_set("display_errors", "on");

		if(isset($_POST['register'])){

			$dir_name = trim($_POST['dir_name']);

			if(!empty($dir_name)){

				$dir_name = str_replace(" ", "_", $dir_name);

				$dir_name = strtolower($dir_name);

				if(!is_dir($dir_name)){
					mkdir($dir_name);
				}else{
					echo "Directory exists already";
				}
				


			}else{

				echo "Error";
			}





		}
		




	?>