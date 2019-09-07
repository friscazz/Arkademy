<?php
$hostname = "localhost";
$user_db = "root";//adjust according to your mysql setting
$pass_db = ""; //adjust according to your mysql setting, i use no password here
$dbName = "arka";
$conn = mysqli_connect($hostname, $user_db, $pass_db);
mysqli_select_db($conn,$dbName)
or die ("Connect Failed !! :".mysqli_error($conn));
?>