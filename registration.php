<?php include('server.php')
?>
<!doctype html>
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
}
body h2{
text-align:center;
}
 body button{
height:50px;
width:200px;
}
body p{
text-align:center;
}



</style>
<head>
<title>REGISTRATION</title>
</head>
<body>
	<header>
			<img src="logo.jfif" align=left>
			<h3>JSS MAHAVIDHYAPEETHA</h3>
			<h1><b>JSS ACADEMY OF TECHNICAL EDUCATION, NOIDA</b></h1>
			<h6><i>Affiliated to Dr. A.P.J.Abdul Kalam Technical University U.P., Lucknow(College Code 091)</h6>
			<h6>C-20/1 Sector 62, Noida Uttar Pradesh</i></h6>
	</header>
<section>
	<h2><u><u>STUDENT REGISTRATION FORM</u></u></h2><br><br>
	<form action="registration.php" method="post">
	<?php include('error.php')?>
	<fieldset>
	<legend style="text-align:center"><b>PERSONAL INFORMATION:</b></legend><br>
	<label>(a) STUDENT'S NAME:</label>
	<input name="fname" type="text" placeholder="ENTER FIRST NAME" required>&emsp;&emsp;
	<input name="mname" type="text" placeholder="ENTER MIDDLE NAME">&emsp;&emsp;
	<input name="lname" type="text" placeholder="ENTER LAST NAME" required>
	<br><br>
	(b) FATHER'S NAME:</label>
	<input type="text" required><br><br>
	<label>(c) MOTHER'S NAME:</label>
	<input type="text" required>
	<br><br>
	<label>(d) DATE OF BIRTH:</label>
	<input name="dob" type="date" placeholder="ENTER D.O.B" required>
	<br><br>
	<label>(e) GENDER:</label>
	<select required>
		<option>MALE</option>
		<option>FEMALE</option>
		<option>OTHER</option>
	</select>
	<br><br>
	<label>(f) ADDRESS:</label>
	<textarea name ="address" required></textarea>&emsp;&emsp;&emsp;&emsp;
	<label>(g) PINCODE:</label>
	<input type="text" required>
	<br><br>
	<label>(h) CITY:</label>
	<input type="text" required>
	<br><br>
	<label>(i) STATE:</label>
	<input type="text" required>
	<br><br>
	<label>(j) PHONE NUMBER:</label>
	<input name="phone" type="text" required>
	<br><br>
	<label>(k) E-MAIL ID:</label>
	<input name="username" type="email" required>
	<br><br>
	<label>(l) ADHAAR NUMBER:</label>
		<input type="text" required>
	<br><br>
	</fieldset>
	<br><br>
	<fieldset>
	<legend style="text-align:center"><b>ACADEMIC DETAILS:</b></legend><br>
	<label>(a) CLASS X PERCENTAGE:</label>
	<input type="percentage" required>&emsp;<i>(if CGPA then multiply by 9.5)</i>
	<br><br>
	<label>(b) YEAR OF PASSING OF X:</label>
		<input type="text" required>
	<br><br>
	<label>(c) ClASS XII PERCENTAGE:</label>
	<input type="percentage" required>
	<br><br>
	<label>(d) YEAR OF PASSING OF XII:</label>
		<input type="text" required>
	<br><br>
	<label>(e) NAME OF THE LAST SCHOOL ATTENDED:</label>
	<textarea name="School" required></textarea>
	<br><br>
	<label>(f) UPSEE RANK:</label>
		<input name= "rank" type="text" required>
	<br><br>
	<label>(g) COURSE APPLIED FOR:</label>
	<select input name="course" required>
		<option>SELECT THE COURSE</option>
		<option>B.TECH IN CIVIL ENGINEERING</option>
		<option>B.TECH IN COMPUTER SCIENCE ENGINEERING</option>
		<option>B.TECH IN ELECTRONICS AND COMMUNICATION ENGINEERING</option>
		<option>B.TECH IN ELECTRICAL AND ELECTRONICS ENGINEERING</option>
		<option>B.TECH IN ELECTRICAL Engineering</option>
		<option>B.TECH IN INFORMATION TECHNOLOGY</option>
		<option>B.TECH IN MECHANICAL ENGINEERING</option>
		<option>Master IN BUSINESS ADMINISTRATION</option>
		<option>Master IN COMPUTER APPLICATIONS</option>
	</select><br><br></fieldset><br>
	<label><b>CREATE PASSWORD:</b></label>
	<input name="pass1" type="password" required>
	<br>
	<label><b>CONFIRM PASSWORD:</b></label>
	<input name="pass2" type="password" required><br><br>
	<p style="font-size:12px"><input type="checkbox" required><i>DO YOU REALLY WANT TO SUBMIT . TO SUBMIT THE FORM PRESS THE <b>SUBMIT</b> BUTTON</i><br><br><br><form><button type="submit" name="registration_user">SUBMIT</button></form></p>
	</form>
	</section>
</body>
</html>