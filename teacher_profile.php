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
						<li><a href="teacher_resume.php"><i class="far fa-file"></i><span> Upload Resume</span></a></li>
						<li><a href="logout.php"> <i class="fas fa-sign-in-alt icon"></i><span> Logout</span></a></li>
					</ul>
				</div> 
				<div id="view_port">
					<div id="menu_box"><p><font size="6" color="white" style="margin-left: 12px; line-height: 48px; float: left;"><b>Teacher Profile</b></font></p><i class="login_as">Login As : <?php echo $_SESSION['name']?></i></div>
					<?php
						$conn=mysqli_connect("localhost","root","","apni_pathashala");
						$query=mysqli_query($conn,"select *from teacher_tbl where teacher_id = '". $_SESSION['id']."'");
						$row = mysqli_fetch_array($query);
					?>
					<div class="profile">
							<span>Full Name:-</span><br>
							<input type="text" name="name" class="input_box" placeholder="Full Name." value="<?php echo $row ['name']?>"><br><br>
							<span>Mobile no:-</span><br>
							<input type="text" name="mobile" class="input_box" placeholder="Mobile no." value="<?php echo $row ['mobile']?>"><br><br>
							<span>Qualification:-</span><br>
							<input type="text" name="qualification" class="input_box" placeholder="Qualification" value="<?php echo $row ['qualification']?>"><br><br>
							<span>Email Id:-</span><br>
							<input type="text" name="email" class="input_box" placeholder="Email Id." value="<?php echo $row ['email']?>"><br><br>
							<font size="4">Address:-</font><br>
							<textarea placeholder="Address" name="address" class="address" id="ptextarea"><?php echo $row['address']?></textarea><br><br>
							<center><input type="button" name="" value="update" class="button"></center>
					</div>
				</div>
			</div>
			<div id="footer">Powered By:-Green Soft</div>
		</div>
	</body>
</html>


