
<?php

?>


<!DOCTYPE html>
<html>
<head>
<title>search box</title>
<link href="search.css"rel="stylesheet" type="text/css" >
<script src="script.js"></script>
<link href="sidebar.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color:Olive ;color:white">
<div id="sidebar">
<div class="toggle-btn" onclick="toggleSidebar()">
<span></span>
<span></span>
<span></span>

</div>
<ul>
<li><a href="login.php">FOR ADMIN</button></a></li>
<li><a href="updatesearch.php">UPDATE</a></li>
 <div style="float:right; background-color:red">
<ul>
<li><a href="allusers.php">ALL MEMBERS</a></li>
</ul>
</div>
</ul>
</div>
<div style="float:right">
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
<div style="margin:0px;padding:20px;">
<?php

//echo "Hello". "  ".$_SESSION['email']."  "."You are loged in"; 

echo "</br>";
echo '<a href="searchlogout.php"><b><h1 color="red">Logout</h1></b></a>';
echo "</br>";

?>
<form  action="" method="post">

<fieldset class="searchin">
<h3>Input your email for details</h3>
<input type="text" name="search" placeholder="Valid email" />
<button type="submit" name="submit" >search</button>
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
<th>money</th>

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