<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
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
		<div id="menu_box">
			<a href="index.php"><i class="fas fa-home fontawsome" ></i></a>
			<label for="check"><i class="fas fa-bars fontawsome" id="bar"></i></label>
			<input type="checkbox" name="" id="check">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="">About us</a></li>
				<li><a href="">Login</a>
					<ul>
						<li><a href="teacher_login.php">Teacher</a></li>
						<li><a href="student_login.php">Student</a></li>
						<li><a href="parent_login.php">Parent</a></li>
					</ul>
				</li>
				<li><a href="">Registration</a>
					<ul>
						<li><a href="teacher_reg.php">Teacher</a></li>
						<li><a href="student_reg.php">Student</a></li>
						<li><a href="parent_reg.php">Parent</a></li>
					</ul>
				</li>
			</ul>
		</div>
			<div id="content" style="background-image:url(image/pic1.jpg);background-size:cover;">
		      <center>	
				   <div id="content1"><br>
				   	    <h2><b>Parent Registration</h2></u><br>
					    <i class="fas fa-user-lock userlogin"></i><br><br>
						<p>Full Name</p> <input type="text" name="" placeholder="Username" class="input_box"><br>
						<p>Mobile No.</p> <input type="number" name="" placeholder="Mobile no." class="input_box"><br>
						<p>Email Id.</p> <input type="mail" name="" placeholder="Email Id" class="input_box"><br>
						<p>Address.</p> <input type="number" name="" placeholder="Address" class="input_box"><br>
						<p>Password.</p> <input type="number" name="" placeholder="Password" class="input_box"><br>
						<p>Conform Password.</p> <input type="number" name="" placeholder="Conform Password" class="input_box"><br><br>
						<input type="submit" name="" value="signup" class="button"><br><br>
						<span><a href="">Forget Password</a></span><br><br>
						<font>Are you new user?</font><font><br><br><a href="student_reg.php">Login</a></font><br><br>
				   </div>
		      </center>		    	
		    </div>
		<div id="footer"></div>
	</div>
</body>
</html>