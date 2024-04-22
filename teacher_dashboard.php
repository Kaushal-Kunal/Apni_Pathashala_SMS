<?php
require("connection.php");
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
						<li><a href="schoollist_teacherdashboard.php"><i class="fas fa-school icon"></i><span>View School</span></a></li>
						<li><a href="teacher_resume.php"><i class="fas fa-eye"></i><span>View Resume</span></a></li>
						<li><a href="teacher_resume.php"><i class="far fa-file"></i></i><span> Upload Resume</span></a></li>
						<li><a href="logout.php"> <i class="fas fa-sign-in-alt icon"></i><span> Logout</span></a></li>
					</ul>
				</div>
				<div id="view_port">
					<div class="dashboard_div">
						Total School<br>
						<?php
							$tt = 0;
							$query = mysqli_query($conn,"SELECT * FROM `teacher_tbl`");
							while ($row = mysqli_fetch_array($query)) {
								$tt++;
							}
							echo "$tt";
						?>
					</div>
				</div>				
			</div>
			<div id="footer">Powered By:-Green Soft</div>
			<!-- <?php echo $_SESSION['name']?> -->
		</div>
	</body>
</html>