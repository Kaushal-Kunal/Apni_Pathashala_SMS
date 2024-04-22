<!DOCTYPE html>
<html>
	<head>
		<title>Student Registration</title>
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
		<div id="floated_form">
			<form action="#" method="post" onsubmit="return false">
				<center>
				<font size="7" class="heading"><b><h2 style="color: black;"><br>Student Registration</h2></b></font><br>
				</center>
				<div class="alert_reg"><i class="fas fa-times cross" style="float: right; line-height: 30px;"></i><font color="red"><span id="errormsg"></span></font></div><br>
				<div class="column">
					<font size="4" class="font">Full Name:-</font><br>
					<input type="text" name="name" class="input_box" placeholder="Full Name." id="stdName"><span id="std_Name"></span><br><br>
					<font size="4" class="font">Class:-</font><br>
					<select class="input_box" name="class" id="select" style="height: 35px;">
						<option selected="---select---">---select---</option>
						<option>1<sup>st</sup></sup></option>
						<option>2<sup>nd</sup></option>
						<option>3<sup>rd</sup></sup></option>
						<option>4<sup>th</sup></option>
						<option>5<sup>th</sup></option>
						<option>6<sup>th</sup></option>
						<option>7<sup>th</sup></option>
						<option>8<sup>th</sup></option>
						<option>9<sup>th</sup></option>
						<option>10<sup>th</sup></option>
						<option>10+2</option>
					</select><br><br>
					<font size="4" class="font">Date of Birth:-</font><br>
					<input type="date" name="dob" class="input_box" placeholder="Date of Birth" id="stdDob"><span id="std_Dob"></span><br><br>
					<font size="4" class="font">Mobile No:-</font><br>
					<input type="text" name="mobile" class="input_box" placeholder="Mobile no" id="stdMob"><span id="std_Mob"></span><br><br>
					<font size="4" class="font">Email Id:-</font><br>
					<input type="text" name="email" class="input_box" placeholder="Email Id." id="stdEmail"><span id="std_Email"></span><br><br>
				</div>
				<div class="column">
					<font size="4" class="font">Address:-</font><br>
					<textarea placeholder="Address" name="address" id="txt"></textarea><br><br>
					<font size="4" class="font">Password:-</font><br>
					<input type="password" name="password" class="input_box" placeholder="Password" id="pwd"><span id="pass_word"></span><br><br>
					<span><font size="4" class="font">Conform Password:-</font></span><br>
					<input type="password" name="" class="input_box" placeholder="Conform Password" id="cpwd"><span id="c_password"></span>
				</div>
				<div id="column">
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
	</div><br>
</div>
</body>
</html>
<script type="text/javascript">
	$(function(){
		function reset(){
			$("#stdName").val("")
			$("#select").val("")
			$("#stdDob").val("")
			$("#stdMob").val("")
			$("#stdEmail").val("")
			$("#txt").val("")
			$("#pwd").val("")
			$("#cpwd").val("")
			$("#stdName").focus();
			$(".alert_reg").css("display","none")
		}
		$("#reset").click(function(){
			reset();
		})
		$.get("crud_std_reg.php",function(data){
	    	 $("#viewdata").html(data);
	      })
		$(".cross").click(function(){
			$(".alert_reg").css("display","");
		})
		$("#submit").click(function(){
			var name,select,birth,mobile,email,address,Password,con_password,submit
			submit = $("#submit").val()
			name = $("#stdName").val()
			select = $("#select").val()
			birth = $("#stdDob").val()
			mobile = $("#stdMob").val()
			email = $("#stdEmail").val()
			address = $("#txt").val()
			password = $("#pwd").val()
			con_password = $("#cpwd").val()
			if (name=="") {
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Name is required...")
				$("#stdName").focus();
			}
			else if(select=="---select---"){
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Class is required...")
				$("#select").focus();
			}
			else if(birth==""){
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Date of Birth is required...")
				$("#stdDob").focus();
			}
			else if(mobile==""){
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Mobile is required...")
				$("#stdMob").focus();
			}
			else if(mobile.length!=10){
				$("#errormsg").text("Mobile is required...")
				$("#stdMob").focus();
			}
			else if(email==""){
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Email Id is required...")
				$("#stdEmail").focus();
			}
			else if(address==""){
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Address is required...")
				$("#txt").focus();
			}
			else if(password==""){
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Password is required...")
				$("#pwd").focus();
			}
			else if(con_password==""){
				$(".alert_reg").css("display","block")
				$("#errormsg").text("Conform Password is required...")
				$("#cpwd").focus();
			}
			else{
				$.get("crud_std_reg.php",{sname:name,s_select:select,sbirth:birth,smobile:mobile,semail:email,spassword:password,saddress:address,submit:submit},function(data){
					$("#viewdata").html(data);
					$("#errormsg").text("Record save Successfully");
					echo mysqli_error($conn);
					reset();
				})
			}
		})
	})
</script>