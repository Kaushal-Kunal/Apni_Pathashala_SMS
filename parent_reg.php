<!DOCTYPE html>
<html>
	<head>
		<title>Parent Registration</title>
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
					<li><a href="admin_reg.php">Admin</a></li>
					<li><a href="teacher_reg.php">Teacher</a></li>
					<li><a href="student_reg.php">Student</a></li>
					<li><a href="parent_reg.php">Parent</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div id="content">
		<div id="floated_form"><br><br>
			<form action="#" method="post" onsubmit="return false">
				<center><font size="7" class="heading"><b><h2>Parent Registration</h2></b></font></center><br>
				<div class="alert_reg"><i class="fas fa-times cross" style="float: right; line-height: 30px;"></i><font color="red"><span id="errormsg"></span></font></div><br>
				<div class="column">
					<font size="4" class="font">Parent Name:-</font><br>
					<input type="text" name="parent_name" class="input_box" placeholder="Full Name." id="fname"><br><br>
					<font size="4" class="font">Student Name:-</font><br>
					<input type="text" name="std_name" class="input_box" placeholder="Student Name." id="std_name"><br><br>
					<font size="4" class="font">Mobile no:-:</font><br>
					<input type="text" name="mobile" class="input_box" placeholder="Mobile no." id="mob_no"><br><br>
				</div>
				<div class="column">
					<font size="4" class="font">Email Id:-</font><br>
					<input type="text" name="email" class="input_box" placeholder="Email Id." id="mail"><br><br>
					<font size="4" class="font">Password:-</font><br>
					<input type="Password" name="password" class="input_box" placeholder="Password" id="pwd"><br><br>
					<font size="4" class="font">Conform Password:-</font><br>
					<input type="password" name="" class="input_box" placeholder="Conform Password" id="con_pwd"><br><br>
				</div>
				<div id="column">
					<font size="4" class="font">&nbsp&nbspAddress:-</font><br>
					<textarea placeholder="Address." name="address" id="ptextarea"></textarea><br>
					<center>
					<input type="submit" name="submit" value="Submit" class="button" id="submit">
					<input type="submit" name="reset" value="Reset"  class="button" id="reset">
					</center>
				</div>
			</form>
		</div>
	</div>
	<div id="footer">
	<p class="footer_text">Powered By:-Tech Glitch</p>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
	$(function(){
		function reset(){
			$("#fname").val("")
			$("#std_name").val("")
			$("#mob_no").val("")
			$("#mail").val("")
			$("#pwd").val("")
			$("#con_pwd").val("")
			$("#ptextarea").val("")
		}
		$("#reset").click(function(){
			reset();
		})
		$.get("crud_parent_reg.php",function(data){
			$("#viewdata").html(data);
		})
		$(".cross").click(function(){
			$(".alert_reg").css("display","");
		})
		$("#submit").click(function(){
			var name, std_name, mobile, email, password, con_password, address, submit
			submit = $("#submit").val()
			name = $("#fname").val()
			std_name = $("#std_name").val()
			mobile = $("#mob_no").val()
			email = $("#mail").val()
			password = $("#pwd").val()
			con_password = $("#con_pwd").val()
			address = $("#ptextarea").val()
			std_name = $("#std_name").val()
			if (name=="") {
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Name is required...")
				$("#fname").focus();
			}
			else if (std_name=="") {
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Student Name is required...")
				$("#std_name").focus();
			}
			else if(mobile=="") {
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Mobile No. is required...")
				$("#mob_no").focus();
			}
			else if(mobile.length!=10){
				$("#errormsg").text("Enter valid Mobile Number...")
				$("#mob_no").focus();
			}
			else if (email=="") {
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Email Id is required...")
				$("#mail").focus();
			}
			else if (password=="") {
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Password is required...")
				$("#pwd").focus();
			}
			else if (con_password=="") {
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Conform Password is required...")
				$("#con_pwd").focus();
			}
			else if (address=="") {
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Address is required...")
				$("#ptextarea").focus();
			}
			else{
				$.get("crud_parent_reg.php",{fname:name,s_std_name:std_name,smobile:mobile,semail:email,spassword:password,saddress:address, submit:submit},function(data){
					$("#viewdata").html(data);
					$("#errormsg").text("Record save Successfully");
					reset();
				})
			}
		})
	})
</script>
<?php
	// $conn=mysqli_connect("localhost","root","","apni_pathashala");
	// if (isset($_POST['submit'])) {
	// 	$parent_name = $_POST['parent_name'];
	// 	$std_name = $_POST['std_name'];
	// 	$mobile = $_POST['mobile'];
	// 	$address = $_POST['address'];
	// 	$email = $_POST['email'];
	// 	$password = $_POST['password'];
	// 	$query = mysqli_query($conn,"insert into parents_tbl(parent_name,std_name,mobile,address,email,password) values('$parent_name','$std_name',$mobile,'$address','$email','$password')");
	// 	echo mysqli_error($conn);
	// }
	// mysqli_close($conn);
?>