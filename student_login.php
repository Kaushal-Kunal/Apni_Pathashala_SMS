<!DOCTYPE html>
<html>
	<head>
		<title>Student Login</title>
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
			<div id="menu_box">
				<a href="index.php"><i class="fas fa-home fontawsome" ></i></a>
				<label for="check"><i class="fas fa-bars fontawsome" id="bar"></i></label>
				<input type="checkbox" name="" id="check">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="">About us</a></li>
					<li><a href="">Login</a>
					<ul>
						<li><a href="admin_login.php">Admin</a></li>
						<li><a href="teacher_login.php">Teacher</a></li>
						<li><a href="student_login.php">Student</a></li>
						<li><a href="parent_login.php">Parent</a></li>
					</ul>
				</li>
				<li><a href="">Registration</a>
				<ul>
					<li><a href="admin_login.php">Admin</a></li>
					<li><a href="teacher_reg.php">Teacher</a></li>
					<li><a href="student_reg.php">Student</a></li>
					<li><a href="parent_reg.php">Parent</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="content">
		<center>
		<div class="login_form">
			<font size="6"><b>Student Login</b></font><br>
			<i class="fas fa-user-lock userlogin"></i><br><br>
			<font size="7" class="font"><b>Username:-</b></font><br>
			<input type="text" name="" placeholder="Username" class="input_box" id="uid"><br>
			<font color="762222"><span id="user_name"></span></font><br>
			<font size="7" class="font"><b>Password:-</b></font><br>
			<input type="password" name="" placeholder="Password" class="input_box" id="pwd"><br>
			<font color="762222"><span id="pass_word"></span></font><br>
			<input type="submit" name="" value="Login" class="button" id="std_login"><br><br>
			<span><a href="forget_password.php">Forget Password</a></span><br><br>
			<font color="white" size="4">Are you new user?</font><font><br><br><a href="student_reg.php">Signup</a></font>
		</div>
		</center>
	</div>
	<div id="footer">
	<p class="footer_text">Powered By:-Tech Glitch</p>
	</div>
</div>
</body>
<script type="text/javascript">
	$(function() {
		$("#std_login").click(function(){
				var username, pwd
				username = $("#uid").val();
				pwd = $("#pwd").val();
				if (username=="") {
					$("#user_name").text("Please Enter Username...")
					$("#uid").focus();
				}
				else if (pwd=="") {
					$("#pass_word").text("Please enter password...")
					$("#pwd").focus();
				}
				else{
					$.get("login.php",{uid:$("#uid").val(),pwd:$("#pwd").val(),std_login:$("#std_login").val()},function(data){
					if(data=="std_dashboard.php") {
						window.location = data;
					}
					else{
						alert(data)
					}
				})
			}
		})
		$("#uid").keyup(function(){
			$("#user_name").css("display","none")
		})
		$("#pwd").keyup(function(){
			$("#pass_word").css("display","none")
		})
	})
		
	// function std() {
	// 	var username=document.getElementById('username').value;
	// 	var password=document.getElementById('password').value;
	// 	if (username=="") {
	// 		document.getElementById('username').focus();
	// 		document.getElementById('user_name').innerText="Please enter username.";
	// 	}
	// 	else if (password=="") {
	// 		document.getElementById('password').focus();
	// 		document.getElementById('pass_word').innerText="Enter Password.";
	// 	}
	// }
	// function uname(){
	// 	document.getElementById('user_name').style.display="none"
	// }
	// function pword(){
	// 	document.getElementById('pass_word').style.display="none"
	// }
</script>
</html>