<?php
session_start();
//initialising variables
$fname="";
$mname="";
$lname="";
$dob="";
$address="";
$phone="";
$rank="";
$course="";
$username="";
$pass1="";
$pass2="";
$errors=array();
//connect to db
$db=mysqli_connect('localhost','root','','database')or die("could not connect to database");
//register users
if(isset($_POST['registration_user'])){
$fname=mysqli_real_escape_string($db,$_POST['fname']);
$mname=mysqli_real_escape_string($db,$_POST['mname']);
$lname=mysqli_real_escape_string($db,$_POST['lname']);
$dob=mysqli_real_escape_string($db,$_POST['dob']);
$address=mysqli_real_escape_string($db,$_POST['address']);
$phone=mysqli_real_escape_string($db,$_POST['phone']);
$rank=mysqli_real_escape_string($db,$_POST['rank']);
$course=mysqli_real_escape_string($db,$_POST['course']);
$username=mysqli_real_escape_string($db,$_POST['username']);
$pass1=mysqli_real_escape_string($db,$_POST['pass1']);
$pass2=mysqli_real_escape_string($db,$_POST['pass2']);
//form validation
if(empty($username)){array_push($errors,"USERNAME IS REQUIRED");}
if(empty($pass1)){array_push($errors,"PASSWORD IS REQUIRED");}
if($pass1!=$pass2){array_push($errors,"PASSWORDS DO NOT MATCH");}

//check db for existing user with same username
$user_check_query = "SELECT * FROM user WHERE username='$username' LIMIT 1";
$results = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($results);
if($user){
	if($user['username']==$username){array_push($errors,"USERNAME ALREADY EXISTS");}
}
//register the user if no error
if(count($errors)==0){
	$pass = md5($pass1);//this will encrypt the password
	print $pass;
	$query ="INSERT INTO user(fname,mname,lname,dob,address,phone,username,rank,course,pass1) VALUES ('$fname','$mname','$lname','$dob','$address','$phone','$username','$rank','$course','$pass')";
	
	mysqli_query($db,$query);
	$_SESSION['username']=$username;
	$_SESSION['sucess']="YOU ARE NOW LOGGED IN";
	header('location: confirmation.html');
}
}
//LOGIN USER
if(isset($_POST['login_user'])){
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$password=mysqli_real_escape_string($db,$_POST['password_1']);
	if(empty($username)){
		array_push($error,"USERNAME IS REQUIRED");
	}
	if(empty($password)){
		array_push($error,"PASSWORD IS REQUIRED");
	}
	if(count($errors)==0){
		$password=md5($password);
		$query="SELECT * FROM user WHERE username='$username' AND pass1='$password'";
		$results=mysqli_query($db,$query);
		if(mysqli_num_rows($results)){
			$_SESSION['username']=$username;
			$_SESSION['success']="LOGGED IN SUCCESSFULLY";
			header('location:index.php');
		}
		else{
			array_push($errors,"WRONG USERNAME/PASSWORD COMBINATION, PLEASE TRY AGAIN.");
		}
	}
}
?>