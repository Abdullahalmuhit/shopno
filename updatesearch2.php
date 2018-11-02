<?php 
//include 'updatesearch.php';
if(isset($_POST['submit']))
{
$con=mysqli_connect("localhost","root","","user");
$sql="UPDATE user SET email='$_POST[email]',user_name='$_POST[name]',gender='$_POST[gender]',phone='$_POST[phone]',country='$_POST[country]',money='$_POST[money]' WHERE fid='$_POST[id]'";
$record=mysqli_query($con,$sql);
if($record)
header("refresh:1; url=updatesearch.php");
else
	echo "Not update";
}	

?>