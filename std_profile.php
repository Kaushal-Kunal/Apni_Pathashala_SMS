<?php
	session_start();
	if (!($_SESSION['uid'] and $_SESSION['pwd'])) {
		header("location:students_login.php");
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
						<li><a href="std_dashboard.php"><i class="fas fa-tv"></i><span>Dashboard</span></a></li>
						<li><a href="std_profile.php"><i class="fas fa-user-graduate icon"></i><span> Profile</span></a></li>
						<li><a href="view_school.php"><i class="fas fa-school icon"></i><span>View School</span></a></li>
						<li><a href="view_teacher.php"><i class="fas fa-chalkboard-teacher icon"></i></i><span>View Teacher</span></a></li>
						<li><a href="apply_test.php"><i class="fas fa-file-alt"></i><span> Apply test</span></a></li>
						<li><a href="index.php"> <i class="fas fa-sign-in-alt icon"></i><span> Logout</span></a></li>
					</ul>
				</div>
				<div id="view_port">
					<div id="menu_box"><p><font size="6" color="white" style="margin-left: 12px; line-height: 48px; float: left;"><b></b>
					Student Profile</font></p><i class="login_as">Login As : <?php echo $_SESSION['name']?></i></div>
					<?php
						$conn=mysqli_connect("localhost","root","","apni_pathashala");
						$query=mysqli_query($conn,"select *from students_tbl where std_id = '". $_SESSION['id']."'");
						$row = mysqli_fetch_array($query);
					?>
					<div class="profile">
							<center>
								<div style="width: 150px; height: 150px; border: 2px solid red; border-radius: 100%;"></div><br><br>
							</center>
						<div class="column">
							<span>Full Name:-</span><br>
							<input type="text" name="name" class="input_box" placeholder="Full Name." id="stdName" value="<?php echo $row ['name']?>"><span id="std_Name"></span><br><br>
							<span>Class:-</span><br>
							<input type="number" name="class" class="input_box" placeholder="Class" id="stdClass" value="<?php echo $row ['class']?>"><span id="std_class"></span><br><br>
							<span>Date of Birth:-</span><br>
							<input type="date" name="dob" class="input_box" placeholder="Date of Birth" id="stdDob" value="<?php echo $row ['dob']?>"><span id="std_Dob"></span><br><br>
					    </div>
					    <div class="column">
							<span>Mobile No:-</span><br>
							<input type="text" name="mobile" class="input_box" placeholder="Mobile no" id="stdMob" value="<?php echo $row ['mobile']?>"><span id="std_Mob"></span><br><br>
							<span>Email Id:-<span><br>
							<input type="text" name="email" class="input_box" placeholder="Email Id." id="stdEmail"  value="<?php echo $row ['email']?>"><span id="std_Email"></span><br><br>
							<font size="4">Address:-</font><br>
							<textarea placeholder="Address" name="address" class="address"><?php echo $row['address']?></textarea><br><br>
						</div>
						<div id="column" style="display: table-footer-group;"><center><input type="button" name="" value="update" class="button"></center></div>
						</div>
					</div>
				</div>
				<div id="footer">Powered By:-Green Soft</div>
			</div>
		</body>
	</html>