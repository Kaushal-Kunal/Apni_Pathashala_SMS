<!DOCTYPE html>
<html>
	<head>
		<title>Admin Login</title>
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
						<li><a href="admin.php">Admin</a></li>
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
	<div id="content" style="background-image:url(image/pic1.jpg); background-size:cover;">
		<center>
		<div class="login_form">
			<h2> Login</h2>
			<i class="fas fa-user-lock userlogin"></i><br>
			<font size="5" class="font">Username:-</font><br> 
			<input type="text" name="" placeholder="Username" class="input_box" id="username" onkeyup="uname()"><br>
			<span id="user_name"></span><br>
			<font size="5" class="font">Password:-</font><br> 
			<input type="password" name="" placeholder="Password" class="input_box" id="password" onkeyup="pword()"><br>
			<span id="pass_word"></span><br>
			<input type="submit" name="" value="Login" class="button" onclick="std()"><br><br>
			<span><a href="forget_password.php">Forget Password</a></span><br><br>
			<font>Are you new user?</font><font><br><br><a href="student_reg.php">Signup</a></font>
		</div>
		</center>
	</div>
	<div id="footer"></div>
</div>
</body>
<script type="text/javascript">
	function std() {
		var username=document.getElementById('username').value;
		var password=document.getElementById('password').value;
		if (username=="") {
			document.getElementById('username').focus();
			document.getElementById('user_name').innerText="Please enter username.";
		}
		else if (password=="") {
			document.getElementById('password').focus();
			document.getElementById('pass_word').innerText="Enter Password.";
		}
	}
	function uname(){
		document.getElementById('user_name').style.display="none"
	}
	function pword(){
		document.getElementById('pass_word').style.display="none"
	}
</script>
</html>