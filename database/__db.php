<?php
$__hostname = "localhost";
$__user = "root";
$__password = "";
$__dbname = "file_upload_db";


$GLOBALS['__conn'] = mysqli_connect($__hostname, $__user, $__password, $__dbname) or die("Could not connect to the database at the moment");
