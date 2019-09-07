<?php 
function password ($pass) {


	if (preg_match_all("/[a-zA-Z0-9\'^£$%&*()}{@#~?><>,|=_+¬-]{8}/", $pass, $matches)) {
		echo 'true';
	}else { echo 'false';}


}
password ('codeYourFuture!123');
echo "<br>";
password ('p4s$gW');
echo "<br>";

function user ($user){

	if (!preg_match_all('/[0-9]/', $user, $matches)) {
		echo 'true';
	}else { echo 'false';}
}
user('cod3r');
echo "<br>";
user('siska');
 ?>