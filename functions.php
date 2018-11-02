<?php
            $HOST="localhost";
			$USER="root";
			$PASSWORD="";
			$DB="user";
			$con=mysqli_connect($HOST,$USER,$PASSWORD,$DB);

function create( $username, $name, $email, $password, $phone_no ){
    $date = date('d-m-Y');
    $db = new SQLite3('database.sqlite');
    $results = $db->exec("INSERT into users (username, name, email, password, password_updated_at, phone) VALUES ('$username', '$name', '$email', '$password', '$date', '$phone_no')");
    $db->close();
}

function get_by( $column, $value ){
    $db = new SQLite3('database.sqlite');
    $results = $db->query("SELECT * FROM users WHERE $column = '$value'");
    $row = $results->fetchArray();
    $db->close();
    return $row;
}

function check( $username, $password ){
    $db = new SQLite3('database.sqlite');
    $results = $db->query("SELECT * FROM users WHERE username = '$username' and password = '$password'");
    $row = $results->fetchArray();
    $db->close();
    return $row;
}

function login( $email ){


    // update token to database
	

    // create cookie with username and token
	$cookie_name = "swe";
	$cookie_value = array("email" => $email, "token" => $token);
	setcookie($cookie_name, json_encode($cookie_value), time() + (86400 * 30), "/");
}


function logged_in(){

	if( !isset($_COOKIE['swe']) )
		return false;
	$email=null;

	$cookie = json_decode(stripcslashes($_COOKIE['swe']), true);
	$username = $cookie['email'];
	$token = $cookie['token'];

	$db=mysqli_connect("localhost","root","","user");
    $results = $db->query("SELECT * FROM user WHERE email = '$email' and access_token = '$token'");
    $row =$db->fetchArray($results);
	//$row = $db->fetch_array($results);
    $db->close();


	return $row;
}


function WeakPassword( $pwd ) {
 	
 	$error = false;

    if (strlen($pwd) < 6) {
        $error = "Password Must be 6 Character Long!";
    }

    if (!preg_match("#[0-9]+#", $pwd)) {
        $error = "Password must include at least one number!";
    }

    if (!preg_match("#[a-zA-Z]+#", $pwd)) {
        $error = "Password must include at least one letter!";
    }     

    return $error;
}
?>