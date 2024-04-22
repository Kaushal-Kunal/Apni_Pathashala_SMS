<?php 
	session_start();
	if (!($_SESSION['uid'] and $_SESSION['pwd'])) {
		header("location:admin_login.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>List of Student</title>
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
						<li><a href="admin_profile.php"><i class="far fa-user-circle"></i><span>Admin profile</span></a></li>
						<li><a href="admin_school.php"><i class="fas fa-school"></i><span>School Details</span></a></li>
						<li><a href="admin_directoelist.php"> <i class="fas fa-user-plus"></i><span>Director Details</span></a></li>
						<li><a href="admin_teacherlist.php"><i class="fas fa-chalkboard-teacher icon"></i><span>Teacher Details</span></a></li>
						<li><a href="admin_parentlist.php"> <i class="fas fa-pen"></i><span>Parents Details</span></a></li>
						<li><a href="admin_studentlist.php"> <i class="fas fa-user-graduate"></i><span> Register Student</span></a></li>
						<li><a href="logout.php"> <i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
					</ul>
				</div>
				<div id="view_port">
					<div id="menu_box"><p><font size="6" color="white" style="line-height: 48px; float: left;"><b>List of Student</b></font></p>
					<i class="fas fa-plus-circle" id="open" style="float: right; margin-right: 20px; line-height: 50px; font-size: 28px; cursor: pointer; color: #fff;"></i>
					<div style="width: 315px; background-color: #fff; height: 28px; float: right;margin-right: 20px; margin-top: 10px; border-radius: 8px; border: none;">
							<label for="search"><i class="fas fa-search" style="line-height: 28px; margin-left: 10px; cursor: pointer;"></i></label>
							<input type="" name="" id="search" class="search_box">
					</div>
					<div>
						<span id="viewdata"></span>
					</div>
				</div>
			</div>
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>
<script type="text/javascript">
	 $.get("crud_std_reg.php",function(data){
	    	 $("#viewdata").html(data);
	      })
	 $("#search").keyup(function(data){
	 	search = $(this).val();
	 	$.get("crud_std_reg.php",{search:search},function(data){
	 		$("#viewdata").html(data);
	 	})
	 })
</script>
<!-- <div id="popup">
<div style="width: auto; height: 50px; background-color: #ff4d4d; padding-left: 10px;">
	<h2 style="float: left; line-height: 50px;">Director Registration Form</h2>
	<i class="fas fa-times-circle add_button" id="close"></i>
</div><br>
<form action="#" method="post" onsubmit="return false">
	<div class="alert"><i class="fas fa-times cross" style="float: right; line-height: 30px;"></i>
		<font color="red"><span id="errormsg"></span></font></div><br>
	<div class="column" style="height: 100px;">
		<font size="4" class="font">Director Name:-</font><br>
		<input type="text" name="parent_name" class="input_box" placeholder="Full Name." id="dname">
		<br><br>
		<font size="4" class="font">school Name:-</font><br>
		<input type="text" name="std_name" class="input_box" placeholder="Full Name." id="sname">
		<br><br>
		<font size="4" class="font">Mobile no:-:</font><br>
		<input type="text" name="mobile" class="input_box" placeholder="Mobile no." id="mob_no">
		<br><br>
	</div>
	<div class="column">
		<font size="4" class="font">Email Id:-</font><br>
		<input type="text" name="email" class="input_box" placeholder="Email Id." id="mail"><br><br>
		<font size="4" class="font">Password:-</font><br>
		<input type="Password" name="password" class="input_box" placeholder="Password" id="pwd"><br><br>
		<font size="4" class="font">Conform Password:-</font><br>
		<input type="password" name="" class="input_box" placeholder="Conform Password" id="con_pwd"><br>
	</div>
	<div id="column">
		<font size="4" class="font"> &nbsp Address:-</font><br>
		<textarea placeholder="Address." name="address" id="adr"></textarea><br><br>
		<center>
		<input type="submit" name="submit" value="Submit" class="button" id="submit">
		<input type="submit" name="reset" value="Reset"  class="button" id="reset">
		</center>
	</div>
</form><br>
</div> -->
<!-- <script type="text/javascript">
	$(function(){
		$("#reset").click(function(){
			$("#dname").val("");
			$("#sname").val("");
			$("#mob_no").val("");
			$("#mail").val("");
			$("#pwd").val("");
			$("#con_pwd").val("");
			$("#adr").val("");
			$("#dname").focus();
		})
		$.get("student_reg.php",function(data){
	    	 $("#viewdata").html(data);
	      })
		$(".cross").click(function(){
		$(".alert").css("display","");
	})
		$("#submit").click(function(){
			var name, school, mobile, email, password, con_password, address, submit
			name = $("#dname").val()
			school = $("#sname").val()
			mobile = $("#mob_no").val()
			email = $("#mail").val()
			password = $("#pwd").val()
			con_password = $("#con_pwd").val()
			address = $("#adr").val()
			submit = $("#submit").val()
			if (name=="") {
				$(".alert").css("display","block")
				$("#errormsg").text("Name is required...")
				$("#dname").focus();
			}
			else if(school==""){
				$(".alert").css("display","block")
				$("#errormsg").text("School Name is required...")
				$("#sname").focus();
			}
			else if(mobile==""){
				$(".alert").css("display","block")
				$("#errormsg").text("Mobile is required...")
				$("#mob_no").focus();
			}
			else if(email==""){
				$(".alert").css("display","block")
				$("#errormsg").text("Email Id is required...")
				$("#mail").focus();
			}
			else if(password==""){
				$(".alert").css("display","block")
				$("#errormsg").text("Conform Password is required...")
				$("#pwd").focus();
			}
			else if(con_password==""){
				$(".alert").css("display","block")
				$("#errormsg").text("Conform Password is required...")
				$("#con_pwd").focus();
			}
			else if(address==""){
				$(".alert").css("display","block")
				$("#errormsg").text("Address is required...")
				$("#adr").focus();
			}
			else{
				  $.get("cruid_directorlist.php",{dname:name,dschool:school,dmobile:mobile,demail:email,dpassword:password,daddress:address,submit:submit},function(data){
					  $("#viewdata").html(data);
					  alert(data);
			       })
			    }
		})
	})
	$("#open").click(function(){
		$("#popup").css("display","block");
	})
	$("#close").click(function(){
		$("#popup").css("display","none");
	})
</script> -->