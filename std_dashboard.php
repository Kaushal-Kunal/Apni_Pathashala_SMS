<?php
	require("connection.php");
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
						<li><a href="logout.php"> <i class="fas fa-sign-in-alt icon"></i><span> Logout</span></a></li>
					</ul>
				</div>
				<div id="view_port">
					<div id="menu_box"><p><font size="6" color="white" style="margin-left: 12px; line-height: 48px; float: left;"><b></b>
					</font></p><i class="login_as">Login As : <?php echo $_SESSION['name']?></i></div>
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
					</div><br>
				</div>
			</div>
			<div id="footer">Powered By:-Green Soft</div>
			<!-- <?php echo $_SESSION['sname']?> -->
		</div>
	</body>
</html>