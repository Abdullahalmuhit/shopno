
<?php

session_start();
            $HOST="localhost";
			$USER="root";
			$PASSWORD="";
			$DB="with";
			$con=mysqli_connect($HOST,$USER,$PASSWORD,$DB);
			if(!$con)
			{
				
				echo "database error";
			}
			if(isset($_POST['login']))
			{
				$email=$_POST['email'];
				$password=md5($_POST['password']);
				$query="select * from user where email='$email' and password='$password'";
				$query_run=mysqli_query($con,$query);
				if($query_run)
				{
					if(empty($_POST['email']) || empty($_POST['password']))
					{
						echo'<script type="text/javascript">alrt("filup the requirement")</script>';
					}
					else
					{
					
					if(mysqli_num_rows($query_run)>0)
					{
						$row=mysqli_fetch_array($query_run,MYSQLI_ASSOC);
						
					
					
					if($row['email']==$email && $row['password']==$password)
					{
						
					
						$_SESSION['email']=$email;
						
				          echo '<!DOCTYPE html>
<html>
<head>
<title>AdminUpdateshow</title>
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
</html>';
							//include 'updatesearch.php';
							$sql="UPDATE user SET email='$_POST[email]',user_name='$_POST[name]',gender='$_POST[gender]',phone='$_POST[phone]',country='$_POST[country]' WHERE fid='$_POST[id]'";
							$record=mysqli_query($con,$sql);
							if($record)
							header("refresh:1; url=userupdate.php");
							else
								echo "Not update";
							}	

							
					}
					else
					{
						
						echo "email and password not match";
					}
						
					}
					
					
					
				}
					
			}
			
			

			
		?>
		
<!DOCTYPE html>
<html>
<head>
<title>Admin login</title>

<style> 
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
}
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
}
</style>

<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<marquee bgcolor="Brown " scrollamount="15">
	<p style="color:white;font-size:20px"><b>WELLCOME TO ADMIN</b></p>
	</marquee>
	<center><h2>Login Form</h2></center>
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
		<form action="" method="post">
		
			<div class="inner_container">
				<label><b>Email</b></label>
				<input bgcolor="black" type="text" placeholder="Enter Username" name="email">
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password">
				<button class="login_button" name="login" type="submit">Login</button>
				
			</div>
		</form>
		
	
		
	</div>
</body>
</html>