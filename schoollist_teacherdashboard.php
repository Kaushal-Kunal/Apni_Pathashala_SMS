<!DOCTYPE html>
<html>
	<head>
		<title>List of Teacher</title>
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
						<li><a href="teacher_profile.php"><i class="fas fa-tv"></i><span>Dashboard</span></a></li>
						<li><a href="teacher_profile.php"><i class="far fa-user-circle"></i><span>My Profile</span></a></li>
						<li><a href="update_details.php"><i class="far fa-edit icon"></i></i><span>Update Details</span></a></li>
						<li><a href="schoollist_teacherdashboard.php"><i class="fas fa-school icon"></i><span>View School</span></a></li>
						<li><a href="teacher_resume.php"><i class="fas fa-eye"></i><span>View Resume</span></a></li>
						<li><a href="teacher_resume.php"><i class="far fa-file"></i></i><span> Upload Resume</span></a></li>
						<li><a href="teacher_login.php"> <i class="fas fa-sign-in-alt icon"></i><span> Logout</span></a></li>
					</ul>
				</div>
				<div id="view_port">
					<div id="menu_box"><font size="5" color="white" style="margin-left: 65px; line-height: 50px;">List of School</font>
						<div style="width: 295px; height: 32px; background-color: whitesmoke; float: right; margin-top: 10px; border-radius: 20px; border-bottom: 2px solid black; margin-right: 20px;">
							<i class="fas fa-search" style=" padding:0px 5px; margin-top:10px;"></i>
							<input type="text" name="" class="input_box" style=" width:230px; position: relative; top: -0px; padding: none;">
						</div>
					</div>
					<span id="viewdata"></span>
			</div>
			<div id="footer"></div>
		</div>
	</body>
	</html>
	<script type="text/javascript">
		$.get("crud_adminschool.php",function(data){
		$("#viewdata").html(data);
	})
	</script>