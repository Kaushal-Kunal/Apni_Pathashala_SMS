<?php
	session_start();
	if (!($_SESSION['uid'] and $_SESSION['pwd'])) {
		header("location:teacher_login.php");
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
	</head>
	<body>
		<div id="wrapper">
			<div id="head">
				<img src="image/aplogo.jpg">
			</div>
			<div id="content">
				<div id="left_menu">
					<ul>
						<li><a href="teacher_dashboard.php"><i class="fas fa-tv"></i><span>Dashboard</span></a></li>
						<li><a href="teacher_profile.php"><i class="far fa-user-circle"></i><span>My Profile</span></a></li>
						<li><a href="teacher_view_school.php"><i class="fas fa-school icon"></i><span>View School</span></a></li>
						<li><a href="teacher_resume.php"><i class="fas fa-eye"></i><span>View Resume</span></a></li>
						<li><a href="teacher_resume.php"><i class="far fa-file"></i></i><span> Upload Resume</span></a></li>
						<li><a href="logout.php"> <i class="fas fa-sign-in-alt icon"></i><span> Logout</span></a></li>
					</ul>
				</div>
				<div id="view_port">
					<div id="floated_form">
						<fieldset style="width: 100%">
							<center><b><u><font size="6">RESUME</font></u></b></center>
							<div class="column">
								First Name:-<br> <input type="First Name" name="" placeholder="Firstname" size="12" class="input_box"><br><br>
								Aadhar no:-<br> <input type="number" name="" placeholder="Aadhar" size="12" class="input_box"><br><br>
								Email Id:-<br> <input type="Email" name="mail" placeholder="Buyer12@gmail.com" size="40" class="input_box"><br><br>
								Last Name:-<br> <input type="text" name="Aadhar" placeholder="Last Name" class="input_box"><br><br>
								Phone no:-<br> <input type="Phone" name="" placeholder="Phone no." class="input_box"><br><br>
								Qualification:-<br> <input type="text" name="" placeholder="Qualification"  class="input_box">
							</div>
							<div class="column"><br>
								<font size="5">Current Address:-</font><br><br>
								Town/Village:-<br> <input type="text" name="" placeholder="Town/Village" size="50" class="input_box"><br><br>
								Dis:-<br><input type="text" name="" placeholder="Dis" class="input_box"><br><br>
								State:-<br><input type="text" name="" placeholder="State" class="input_box"><br><br>
								Zip code:-<br><input type="zip code" name="" placeholder="zip code" class="input_box"><br><br>
								Select Country:-<br>
								<select style="width: 267px; height: 35px;"><br><br>
									<option>Select Country</option>
									<option>India</option>
									<option>America</option>
									<option>UK</option>
									<option>France</option>
									<option>Austrilia</option>
									<option>Kanada</option>
									<option>China</option>
									<option>Nepal</option>
								</select><br><br>
							</div>
							<div class="column"><br>
								<font size="5">Permanent Address:-</font><br><br>
								Town/Village:-<br> <input type="text" name="" placeholder="Town/Village" size="50" class="input_box"><br><br>
								Dis:-<br><input type="text" name="" placeholder="Dis" class="input_box"><br><br>
								State:-<br><input type="text" name="" placeholder="State" class="input_box"><br><br>
								Zip code:-<br><input type="zip code" name="" placeholder="zip code" class="input_box"><br><br>
								Select Country:-<br>
								<select style="width: 267px; height: 35px;"><br><br>
									<option>Select Country</option>
									<option>India</option>
									<option>America</option>
									<option>UK</option>
									<option>France</option>
									<option>Austrilia</option>
									<option>Kanada</option>
									<option>China</option>
									<option>Nepal</option>
								</select><br><br>
							</div>
						</fieldset>
					</div>
				</div>
				<div id="footer">Powered By:-Green Soft</div>
			</div>
		</body>
	</html>