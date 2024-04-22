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
						<li><a href="admin_dashboard.php"><i class="fas fa-tv"></i><span>Admin dashboard</span></a></li>
						<li><a href="#"><i class="fas fa-school"></i><span>School Details</span></a></li>
						<li><a href="#"> <i class="fas fa-user-plus"></i><span>Director Details</span></a></li>
						<li><a href="adminteacher_reg.php"><i class="fas fa-chalkboard-teacher icon"></i><span>Teacher Details</span></a></li>
						<li><a href="#"> <i class="fas fa-pen"></i><span>Parents Details</span></a></li>
						<li><a href="admin_studentlist.php"> <i class="fas fa-user-graduate"></i><span> Register Student</span></a></li>
						<li><a href="#"> <i class="far fa-file"></i><span>Logout</span></a></li>
					</ul>
				</div>
				<div id="view_port">
					<div id="menu_box"><p><font size="6" color="white" style="line-height: 48px; float: left;"><b>Teacher Registration</b></font></p></div>
					<div id="floated_form"><br><br>
						<table align="center">
							<tr>
								<td><b><h2>Edit Teacher Details</h2></b></td>
							</tr>
						</table>
						<div class="column">
							<form action="#" method="post">
								<span>Full Name:-</span><br>
								<input type="text" name="name" class="input_box" placeholder="Full Name."><br><br>
								<span>Mobile no:-</span><br>
								<input type="text" name="mobile" class="input_box" placeholder="Mobile no."><br><br>
								<span>Qualification:-</span><br>
								<input type="text" name="qualification" class="input_box" placeholder="Qualification">
							</div>
							<div class="column">
								<span>Email Id:-<span><br>
									<input type="text" name="email" class="input_box" placeholder="Email Id."><br><br>
									<span>Password:-</span><br>
									<input type="text" name="password" class="input_box" placeholder="Password"><br><br>
									<span>Conform Password:-</span><br>
									<input type="text" name="" class="input_box" placeholder="Conform Password">
								</div>
								<div id="column" style="display: table-footer-group; padding: 30px;">
									&nbsp &nbsp&nbsp<font size="4"><b>Address:-</b></font></b><br>
									<textarea placeholder="Address" name="address"></textarea><br><br>
									<input type="submit" name="submit" value="Update" class="button" style="float: right; margin-right: 20px;"><br><br>
								</form>
							</div>
						</div>
					</div>
				</div>
					
					<div id="footer"></div>
				</div>
			</body>
		</html>