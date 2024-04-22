<?php 
require("connection.php");
	session_start();
	if (!($_SESSION['uid'] and $_SESSION['pwd'])) {
		header("location:admin_login.php");
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
			<div id="content" style="background-color: none;">
				<div id="left_menu">
					<ul>
						<li><a href="admin_dashboard.php"><i class="fas fa-tv"></i><span>Dashboard</span></a></li>
						<li><a href="admin_profile.php"><i class="far fa-user-circle"></i><span>My Profile</span></a></li>
						<li><a href="admin_school.php"><i class="fas fa-school"></i><span>School Details</span></a></li>
						<li><a href="admin_directoelist.php"> <i class="fas fa-user-plus"></i><span>Director Details</span></a></li>
						<li><a href="admin_teacherlist.php"><i class="fas fa-chalkboard-teacher icon"></i><span>Teacher Details</span></a></li>
						<li><a href="admin_parentlist.php"> <i class="fas fa-pen"></i><span>Parents Details</span></a></li>
						<li><a href="admin_studentlist.php"> <i class="fas fa-user-graduate"></i><span> Register Student</span></a></li>
						<li><a href="logout.php"> <i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
					</ul>
				</div>
				<div id="view_port">
					<div class="dashboard_div">
						Total Students<br>
						<?php
							$ts = 0;
							$query = mysqli_query($conn,"SELECT * FROM `students_tbl`");
							while ($row = mysqli_fetch_array($query)){
								$ts++;
							}
							echo $ts;
						?>
					</div>
					<div class="dashboard_div">
						Total Parents<br>
						<?php 
							$tp = 0;
							$query = mysqli_query($conn,"SELECT * FROM `parents_tbl`");
							while ($row = mysqli_fetch_array($query)) {
								$tp++;
							}
							echo $tp;
						?>
					</div>
					<div class="dashboard_div">
						Total Director<br>
						<?php
							$td = 0;
							$query = mysqli_query($conn,"SELECT * FROM `director_list`");
							while ($row = mysqli_fetch_array($query)) {
								$td++;
							}
							echo "$td";
						?>
					</div>
					<div class="dashboard_div">
						Total Teacher<br>
						<?php
							$tt = 0;
							$query = mysqli_query($conn,"SELECT * FROM `teacher_tbl`");
							while ($row = mysqli_fetch_array($query)) {
								$tt++;
							}
							echo "$tt";
						?>
					</div>
					<div class="dashboard_div">
						Total School<br>
						<?php
							$ts = 0;
							$query =mysqli_query ($conn,"SELECT * FROM `school_list`");
							while ($row = mysqli_fetch_array($query)) {
								$ts++;
							}
							echo "$ts";
						?>
					</div>
				</div>
				<div id="footer">
					<p class="footer_text">Powered By:-Tech Glitch</p>
				</div>
			</div>
		</body>
	</html>
	<script type="text/javascript">
		$("#open").click(function(){
			$("#popup").css("display","block");
		})
		$("#close").click(function(){
			$("#popup").css("display","none");
		})
	</script>