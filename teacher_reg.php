<!DOCTYPE html>
<html>
	<head>
		<title>Teacher Registration</title>
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
			<center><font size="7" class="heading"><b><h2>Teacher Registration</h2></b></font></center><br>
			<div class="alert_reg"><i class="fas fa-times cross" style="float: right; line-height: 30px;"></i><font color="red"><span id="errormsg"></span></font></div><br>
			<div class="column">
					<font size="4" class="font">Full Name:-</font><br>
					<input type="text" name="name" class="input_box" placeholder="Full Name." id="fname"><br><br>
					<font size="4" class="font">Mobile no:-</font><br>
					<input type="text" name="mobile" class="input_box" placeholder="Mobile no." id="mob_no"><br><br>
					<font size="4" class="font">Qualification:-</font><br>
					<input type="text" name="qualification" class="input_box" placeholder="Qualification" id="edu">
				</div>
				<div class="column">
					<font size="4" class="font">Email Id:-</font><br>
						<input type="text" name="email" class="input_box" placeholder="Email Id." id="mail"><br><br>
						<font size="4" class="font">Password:-</font><br>
						<input type="password" name="password" class="input_box" placeholder="Password" id="pwd"><br><br>
						<font size="4" class="font">Conform Password:-</font><br>
						<input type="password" name="" class="input_box" placeholder="Conform Password" id="con_pwd">
					</div>
					<div id="column">
						<font size="4" class="font">&nbsp&nbspAddress:-</font><br>
						<textarea placeholder="Address" name="address" id="adr"></textarea><br><br>
						<center><input type="submit" name="submit" value="Submit" class="button" id="submit">
						<input type="submit" name="" value="Reset"  class="button" id="reset"></center>
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
			 $("#mob_no").val("")
			 $("#edu").val("")
			 $("#mail").val("")
			 $("#pwd").val("")
			 $("#con_pwd").val("")
			 $("#adr").val("")
			 $("#fname").focus();
		}
		$("#reset").click(function(){
			reset();
		})
		$(".cross").click(function(){
			$(".alert_reg").css("display","");
		})
		$("#submit").click(function(){
			var name, mobile, education, mail, password, con_password, address, submit
			submit = $("#submit").val()
			name = $("#fname").val()
			mobile = $("#mob_no").val()
			education = $("#edu").val()
			mail = $("#mail").val()
			password = $("#pwd").val()
			con_password = $("#con_pwd").val()
			address = $("#adr").val()
			if (name=="") {
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Name is required...")
				$("#fname").focus();
			}
			else if (mobile=="") {
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Mobile is required...")
				$("#mob_no").focus();
			}
			else if(mobile.length!=10){
				$("#errormsg").text("Enter valid Mobile Number...")
				$("#mob_no").focus();
			}
			else if(education==""){
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Qualification is required...")
				$("#edu").focus();
			}
			else if(mail==""){
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Email Id is required...")
				$("#mail").focus();
			}
			else if(password==""){
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Password Id is required...")
				$("#pwd").focus();
			}
			else if(con_password==""){
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Conform Password Id is required...")
				$("#con_pwd").focus();
			}
			else if(address==""){
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Address Id is required...")
				$("#adr").focus();
			}
			else{
				$.get("crud_teacher_reg.php",{t_name:name,t_mobile:mobile,t_education:education,t_mail:mail,t_password:password,t_address:address,submit:submit},function(data){
					$("#errormsg").text("Record save Successfully");
					reset();
				})
			}
		})
	})
</script>
<?php
	//$conn=mysqli_connect("localhost","root","","apni_pathashala");
	//if (isset($_POST['submit'])) {
		//$name = $_POST['name'];
		//$mobile = $_POST['mobile'];
		//$qualification = $_POST['qualification'];
		//$email = $_POST['email'];
		//$password = $_POST['password'];
		//$address = $_POST['address'];
		//$query = mysqli_query($conn,"insert into teacher_tbl(name,mobile,qualification,email,password,address) values('$name',$mobile,'$qualification','$email',$password,'$address')");
		//echo mysqli_error($conn);
	//}
	//mysqli_close($conn);
?>