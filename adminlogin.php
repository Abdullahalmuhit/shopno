
<?php
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
				$query="select * from withmuhit where email='$email' and password='$password'";
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
				  header( "Location: homepage.php");
					echo "successfully login";
					}
					else
					{
						
						echo "email and password not match";
					}
						
					}
					
					
					
				}
					
			}
			}
			

			
		?>
		
<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<center><h2>Login Form</h2></center>
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
		<form action="" method="post">
		
			<div class="inner_container">
				<label><b>Email</b></label>
				<input type="text" placeholder="Enter Username" name="email">
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password">
				<button class="login_button" name="login" type="submit">Login</button>
				
			</div>
		</form>
		
	
		
	</div>
</body>
</html>