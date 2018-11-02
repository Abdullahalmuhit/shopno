<?php
if(isset($_POST['email']))
{
	echo  $_POST['comment'];
	
}

?>

<!DOCTYPE html>
<html>
<head>
<title>CONTACT</title>
<link href="home.css" rel="stylesheet" type="text/css">
<link href="sidebar.css" rel="stylesheet" type="text/css">
</head>
<body >

<img src="imgs/shopno.jpg" style="float:left;height:80px;width:90px;padding:0px;padding-left:0px"> 

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
<div>
<img src="imgs/people.png" style="margin: 0;display: block;width:100%;height:500px;background-size: cover;">
</div>
<div style=" background-color:cyan;color:indigo;width:400px" align="right">

<form action="" method="post" >
<div style="align:right">
<ul>
<!--<li><a href="first.php">MORE DETAILS</a></li>-->
</ul>
</div>

<b>Email:</b><input type="email" name="email" placeholder="email for contact" required> <br/><br/>
<b>Your Comment:</b> <br/>
<textarea name="comment" rows="10" cols="50" required></textarea> <br/><br/>
<button type="submit" name="submit" style="background-color:blue;color:white"><b>Submit</b></button> 
</form>
</div>
</body>
</html>