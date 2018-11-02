<?php
	if(isset($_COOKIE['swe'])){
		unset($_COOKIE['swe']);
		setcookie('swe', null, -1, '/');
}
header("Location: home.php");

exit();
?>