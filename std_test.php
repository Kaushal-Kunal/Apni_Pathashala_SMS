<?php
	session_start();
	if (!($_SESSION['uid'] and $_SESSION['pwd'])) {
		header("location:parent_login.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Apni pathshala</title>
		<link rel="stylesheet" type="text/css" href="css/all.css">
		<link rel="stylesheet" type="text/css" href="css/layout.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="head">
				<img src="image/aplogo.jpg">
			</div>
			<div id="content">
				<div id="left_menu">
					<ul>
				<li><a href="parent_dashboard.php"><i class="fas fa-tv"></i><span>Dash Board</span></a></li>
				<li><a href="parent_profile.php"><i class="far fa-user-circle"></i><span>Parent Profile</span></a></li>
				<li><a href="parent_view_school.php"><i class="fas fa-school icon"></i><span>View School</span></a></li>
				<li><a href="std_test.php"><i class="fas fa-file-alt"></i><span>Apply test</span></a></li>
				<li><a href="parent_login.php"> <i class="fas fa-sign-in-alt icon"></i><span> Logout</span></a></li>
			  </ul>	
				</div>
				<div id="view_port">
					<div id="floated_form"><br><br>
			<table align="center">
				<tr>
					<td><b><h2>Apply for Test</h2></b></td>
				</tr>
			</table>
			<div class="column">
				<span>Student Name:-</span><br>
				<input type="text" name="name" class="input_box" placeholder="Student Name" id="stdName"><span id="std_Name"></span><br><br>
				<span>Father's Name:-</span><br>
				<input type="number" name="std_id" class="input_box" placeholder="Father's Name" id="stdId"><span id="std_Id"></span><br><br>
				<span>Class:-</span><br>
				<input type="number" name="class" class="input_box" placeholder="Class" id="stdClass"><span id="std_class"></span><br><br>
				<span>Date of Birth:-</span><br>
				<input type="date" name="dob" class="input_box" placeholder="Date of Birth" id="stdDob"><span id="std_Dob"></span>
			</div>
			<div class="column">
					<span>Mobile No:-</span><br>
					<input type="text" name="mobile" class="input_box" placeholder="Mobile no" id="stdMob"><span id="std_Mob"></span><br><br>
					<span>Mother's Name:-<span><br>
					<input type="text" name="email" class="input_box" placeholder="Mother's Name" id="stdEmail"><span id="std_Email"></span><br><br>
					<span>Password:-</span><br>
					<input type="password" name="password" class="input_box" placeholder="Password" id="password"><span id="pass_word"></span><br><br>
					<span>Conform Password:-</span><br>
					<input type="password" name="" class="input_box" placeholder="Conform Password" id="cPassword"><span id="c_password"></span>
			</div>
				<div id="column" style="display: table-footer-group; padding: 30px;">
					&nbsp &nbsp&nbsp<font size="4"><b>Address:-</b></font></b><br>
					<textarea placeholder="Address" name="address"></textarea><br><br>
					<center><input type="submit" name="submit" value="Submit" class="button">
					<input type="submit" name="reset" value="Reset"  class="button"></center><br><br>
				</div>
				</div>
			</div>
			<div id="footer">Powered By:-Green Soft</div>
		</div>
	</body>
</html>