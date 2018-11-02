<!DOCTYPE html>
<html>
<head>
<title>AdminUpdate</title>
<link>
</head>
<body>
<?php 
$conn=mysqli_connect("localhost","root","","user");
$query="SELECT * FROM user";
$record=mysqli_query($conn,$query);

?>
<table border=1>
<tr>
<th>email</th>
<th>user name</th>
<th>Gender</th>
<th>Phone</th>
<th>Country</th>
<th>money</th>
<!--<th>password</th>
<th>confairm_password</th>-->

</tr>
<?php
while($row=mysqli_fetch_array($record))
{
	echo "<tr> <form action=updatesearch2.php method=post>";
	echo "<td> <input type=text name=email value='".$row['email']."'></td>";
	echo "<td> <input type=text name=name value='".$row['user_name']."'></td>";
	echo "<td> <input type=text name=gender value='".$row['gender']."'></td>";
	echo "<td> <input type=text name=phone value='".$row['phone']."'></td>";
	echo "<td> <input type=text name=country value='".$row['country']."'></td>";
	echo "<td> <input type=text name=money value='".$row['money']."'></td>";
	//echo "<td> <input type=hidden name=password value='".$row['password']."'></td>";
	//echo "<td> <input type=hidden name=cpassword value='".$row['confairm_password']."'></td>";
	echo "<input type=hidden name=id value='".$row['fid']."'></td>";
	echo "<td><input type=submit name=submit>";
	echo "</form></tr>";
}

?>


</body>
</html>