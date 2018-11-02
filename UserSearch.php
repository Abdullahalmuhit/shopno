
<!DOCTYPE html>
<html>
<head>
<title>UserSearch</title>
<link href="search.css"rel="stylesheet" type="text/css" >
</head>
<body>
<div>
<ul>
<li><a href="home.php">HOME</a></li>
<li><a href="about us.php">ABOUT US</a></li>
<li><a href="contact.php">CONTACT</a></li>
<li><a href="activity.php">ACTIVITY</a>
<ul>
<li><a href="educational.php">EDUCATIONAL</a></li>
<li><a href="social.php">SOCIAL</a></li>
</ul>
</li>
<li><a href="member.php">MEMBERS</a>

<ul>
<li><a href="general.php">GENERAL</a></li>
<li><a href="founder.php">FOUNDER</a></li>
<li><a href="advisor.php">ADVISOR</a></li>
<li><a href="board of directors.php">DIRECTORS</a></li>
</ul>
</li>

</ul>

</div>
</br>
</br> </br> </br> </br>
<div >
<form  action="" method="post">

<fieldset class="searchin">
<h3>Input your email for details</h3>
<input type="text" name="search" placeholder="Valid email" />
<button type="submit" name="muhit" >search</button>
<div style="float:right">
<button type="submit" name="submit" ><a href="userupdate.php">Edit</a></button>
</div>

</fieldset>
</form>
</div>

</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","user");
@$get=$_POST['search'];

if($get)
{	
$show="select * from user where email='$get'";
$result=mysqli_query($conn,$show);
echo "<table border=1>
<tr>
<th>fid</th>
<th>email</th>
<th>user name</th>
<th>Gender</th>
<th>Phone</th>
<th>Country</th>
<th>Money</th>

</tr>";

while($rows=mysqli_fetch_array($result))
{  
	echo "<tr>";
	echo "<td>" . $rows["fid"] . "</td>";
	echo "<td>" . $rows["email"] . "</td>";
	echo "<td>" . $rows["user_name"] . "</td>";
	echo "<td>" . $rows["gender"] . "</td>" ;
	echo "<td>" . $rows["phone"] . "</td>" ;
	echo "<td>" . $rows["country"] . "</td>" ;
	echo "<td>" . $rows["money"] . "</td>" ;
	
	echo "</tr>";
}	
echo "</table>";

}
 if(!$get)
{
	
	echo "nothing found";
}


?>