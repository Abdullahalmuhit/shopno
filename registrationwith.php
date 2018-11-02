<?php

$uname=$email=$password=$cpassword=$phone=$gender=$country=$money="";
$runame=$remail=$rpassword=$rcpassword=$rphone=$rgender=$rcountry=$rmoney="";
$errors="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
	if(empty($_POST["User_Name"]))
	{
		$runame="user name is required";
		$errors=1;
	}
	else
	{
		$uname=$_POST['User_Name'];
         if (!preg_match("/^[a-zA-Z ]*$/",$uname)) {
      $runame = "Only letters and white space allowed"; 
		 }
		
	}
	if(empty($_POST['Password']))
	{
		$rpassword="password is required";
		$errors=1;
	}
	else
	{
		$password=md5($_POST['Password']);
		
		
	}
	if(empty($_POST['Email']))
	{
	   	$remail="email is required";
		$errors=1;
	}
	else
	{
		$email=$_POST['Email'];
		
	}
	if(empty($_POST['Confairm_Password']))
	{
		$rcpassword="confairm_password is required";
		$errors=1;
	}
	else
	{
		$cpassword=md5($_POST['Confairm_Password']);
	}
	if(empty($_POST['Phone_no']))
	{
		$rphone="phone no is required";
		$errors=1;
	}
	else
	{
		$phone=$_POST['Phone_no'];
		if(!preg_match("/^(?:\+?88)?01[15-9]\d{8}$/",$phone))
			{
				$rphone=" Input Only bangladeshi valid phone number ";
			}
	}
	
	if(empty($_POST["money"]))
	{
		$rmoney="amount is required";
		$errors=1;
	}
	else
	{
		$money=$_POST['money'];
         if (!preg_match("/^\d+(:?[.]\d{2})$/",$money)) {
      $rmoney = "Enter 50.00 "; 
		 }
		
	}
	if(empty($_POST['cn']))
	{
		$rcountry="country name is required";
		$errors=1;
	}
	else
	{
		$country=$_POST['cn'];
	}
	if(empty($_POST['gn']))
	{
		$rgender="gender is required";
		$errors=1;
	}
	else
	{
		$gender=$_POST['gn'];
		
	}
	
            $HOST="localhost";
			$USER="root";
			$PASSWORD="";
			$DB="user";
			$con=mysqli_connect($HOST,$USER,$PASSWORD,$DB);
			if(!$con)
			{
				
				echo "database error";
			}
			if(isset($_POST['register']))
			{
			
				if($errors ==0)
		   {

	//$muhit="INSERT INTO first(fid,first_name,last_name,email,user_name,password,confairm_password,phone,gender,country) VALUES ('','$fname','$lname','$email','$uname','$password','$cpassword','$phone','$gender','$country')";
	
	       
	
				if($password==$cpassword)
				{
					
						
					
					$query="select * from user where email='$email'";
					
					$query_run=mysqli_query($con,$query);
					
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					if($row['email']==$email)
					{
						echo "email already exist";
						
					}
					else
					{
						$muhit="INSERT INTO user(fid,user_name,email,password,cpassword,phone,gender,country,money) VALUES ('','$uname','$email','$password','$cpassword','$phone','$gender','$country','$money')";
						$query_run=mysqli_query($con,$muhit);
						if($query_run)
						{
							$_SESSION['user_name'] = $username;
							$_SESSION['password'] = $password;
							$SESSION['email']=$email;
							header("location: loginwith.php");
							
						}
						else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						
					}
					
					
					
				
				
			}
			else
				{
					echo "password no match";
					
				}
			
			
			}
}
}
			


?>

<!DOCTYPE html>
<html>
<head>
<title>Sign Up Page</title>
<link rel="stylesheet" href="style.css" type="text/css">
 <style>
         .error {color: #FF0000;}
      </style>
	  
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

input[type=number_format] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
}
input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
	
}
input[type=number] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
	
}
</style>
	  
	  
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<marquee bgcolor="Brown " scrollamount="15">
	<p style="color:white;font-size:20px"><b>WELLCOME TO REGISTRATION</b></p>
	</marquee>
	<center><h2>Sign Up Form</h2></center>
		<form  method="post" action="<?php

		echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
			<span class="error">All field is required</span></br></br>
<label for="User_Name"><b>User_Name</b></label> <br>
 <input type="text" name="User_Name"placeholder="User Name" autocomplete="on"/> <br>
 <span class="error">
 <?php
  if(isset($_POST['User_Name']))
  {
	  echo "$runame";
	  
  }
  
	
  

 ?>
 </span>
 </br>
 
<label for="Email"> <b>Email</b></label> <br>
 <input type="email" name="Email" placeholder="a@gmail.com" autocomplete="off"  autocomplete="on" /> <br>
<span class="error">
<?php
  if(isset($_POST['Email']))
  {
	  echo "$remail";
	  
  }

 ?>
 </span>
 </br>
 <label for="Password"><b>Password:</b></label> <br>
<input type="Password" name="Password" placeholder="*******" style="color:green" autocomplete="on"/> <br>
<span class="error">
 <?php
  if(isset($_POST['Password']))
  {
	  echo "$rpassword";
	  
  }

 ?>
 </span>
 </br>
<label for="Confairm_Password"><b>Confairm Password:</b></label> <br>

<input type="password" name="Confairm_Password" placeholder="******" autocomplete="on"/> <br>
 <span class="error">
 <?php
  if(isset($_POST['Confairm_Password']))
  {
	  echo "$rcpassword";
	  
  }

 ?>
 </span>
 </br>
<label for="Phone_no"><b>Phone No:</b></label> <br>

 <input type="number_format" placeholder="012345" name="Phone_no"  autocomplete="on"/> <br>
 <span class="error">
 <?php
  if(isset($_POST['Phone_no']))
  {
	  echo "$rphone";
	  
  }

 ?>
 </span >
 </br>
<label for="money"><b>Amount:</b></label> <br>

 <input type="number" placeholder="50/100?.." name="money"  autocomplete="on"/> <br>
 <span class="error">
 <?php
  if(isset($_POST['money']))
  {
	  echo "$rmoney";
	  
  }

 ?>
 </span >
 </br>
<label for="Gender:"><b>Gender:</b></label> <br>
 <select name="gn" style="color:red"> 
 <option value="select gender" style="width:500px"> select gender</option>
 <option value="Male"> Male</option>
 <option value="Female"> Female</option>
 <option value="Other"> Other</option> 
 </select> <br>
 <!--
for set field height width
 maxlength="12" size="12" -->
 
 <label for="Country:"><b>Country</b></label> <br>
 <select name="cn" style="color:green">
 <option value="select Country"> select Country</option>
 <option value="Bangladesh"> Bangladesh</option>
 <option value="India"> India</option>
 <option value="USA">USA</option> 
 <option value="UK">UK</option> 
 <option value="Arab">Arab</option> 
 </select> <br>
 
				<button name="register" class="sign_up_btn" type="submit">Sign Up</button>
				
				<a href="loginwith.php"><button type="button" class="back_btn"><< Back to Login</button></a>
			</div>
		</form>
		
		
	</div>
</body>
</html>