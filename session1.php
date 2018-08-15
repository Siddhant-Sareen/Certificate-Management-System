<?php
	//Start session
	session_start();
 
	//Include database connection details
	//require_once('connection.php');
	$conn= mysqli_connect("localhost", "root", "","wt");
	if(mysqli_connect_errno()){
	  die("Unable to connect to the database server!".mysqli_connect_error()); 
	}
	 $roh= mysqli_select_db($conn,"wt");
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	/*function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($conn,$str);
	}*/
 
	//Sanitize the POST values
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	
 
	//Input Validations
	if($email == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: newlogin1.php");
		exit();
	}
 
	//Create query
	$qry="SELECT * FROM user WHERE email='$email' AND password='$password'";
	$result=mysqli_query($conn,$qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['email'];
			$_SESSION['SESS_LAST_NAME'] = $member['password'];
		    $_SESSION['fname'] = $member['fname'];
			$_SESSION['lname'] = $member['lname'];
	        $_SESSION['image'] = $member['image'];
			     // $_SESSION['contact'] = $member['contact'];
                  //$_SESSION['photo'] = $member['picture'];
session_write_close();
header("Location:user.php");
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = '<h3>Username and password incorrect!</h3>';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: newlogin1.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>


