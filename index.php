<?php
session_start();
if(isset($_SESSION['username'])){
	//$_SESSION['msg'] = "YOU MUST LOGIN FIRST TO VIEW THIS PAGE";
	//header("location:login.php");
	$username = $_SESSION['username'];
	$db=mysqli_connect('localhost','root','','database')or die("could not connect to database");
	$user_check_query = "SELECT * FROM user WHERE username='$username'";
	$results = mysqli_query($db,$user_check_query);
	while($user= mysqli_fetch_assoc($results))
	{
		$fname=$user['fname'];
		$lname=$user['lname'];
		$dob=$user['dob'];
		$address=$user['address'];
		$phone=$user['phone'];
		$rank=$user['rank'];
		$course=$user['course'];
	}
}
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header("location:jssaten.html");
}
?>
<!DOCTYPE html>
<html>
<style>
		header{
			text-align:center;
			background-color:rgb(175,175,250);
		}
		header h3{
			color:red;
		}
		header h6{
			color:red;
		}
		body section{
			font-family:verdana;
			background:url(jssa.png);
			background-repeat:no-repeat;
			background-size:100%;
		}
		body button{
			height:20px;
			width:100px;
		}
		<!--body article{
			font-family:verdana;
			border-style:solid;
			background-color:silver;
		}-->
		body section a:visited{
		color:blue;
		}
	</style>
<head>
	<title><?php echo $fname;?></title>
</head>
<body>
	<?php
	if(isset($_SESSION['success'])):
	?>
	<div>
		<h3>
			<?php
				echo $_SESSION['success'];
				unset($_SESSION['success']);
			?>
		</h3>
	</div>
	<?php endif?>
	<!--if the user logs in print info about his-->
	
		<header>
			<img src="logo.jfif" align=left>
			<h3>JSS MAHAVIDHYAPEETHA</h3>
			<h1><b>JSS ACADEMY OF TECHNICAL EDUCATION, NOIDA</b></h1>
			<h6><i>Affiliated to Dr. A.P.J.Abdul Kalam Technical University U.P., Lucknow(College Code 091)</h6>
			<h6>C-20/1 Sector 62, Noida Uttar Pradesh</i></h6>
		</header>
		<hr>
		<form action="index.php?logout='1'" align="right">
		<button type="submit" name="logout">LOGOUT</button></form>
		<section>
		<div class="fetch">
		<?php if(isset($_SESSION['username'])):?>
		<p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>NAME :</b>&emsp;<?php echo $fname;?> <?php echo $lname;?></p><br>
		<p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>DATE OF BIRTH :</b>&emsp;<?php echo $dob;?></p><br>
		<p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>ADDRESS :</b>&emsp;<?php echo $address;?></p><br>
		<p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>PHONE NUMBER :</b>&emsp;<?php echo $phone;?></p><br>
		<p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>EMAIL-ID :</b>&emsp;<?php echo $username;?></p><br>
		<p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>UPSEE RANK :</b>&emsp;<?php echo $rank;?></p><br>
		<p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>COURSE APPLIED :</b>&emsp;<?php echo $course;?></p><br>
		</div>
	<?php endif?></section>
</body>
</html>