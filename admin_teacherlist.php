<?php 
	session_start();
	if (!($_SESSION['uid'] and $_SESSION['pwd'])) {
		header("location:admin_login.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>List of Teacher</title>
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
					<div id="menu_box"><p><font size="6" color="white" style="margin-left: 12px; line-height: 48px; float: left;"><b>List of Teacher</b></font></p>
					<i class="fas fa-plus-circle add_button" id="open"></i>
					<div style="width: 315px; background-color: #fff; height: 28px; float: right;margin-right: 20px; margin-top: 10px; border-radius: 8px; border: none;">
						<label for="search"><i class="fas fa-search" style="line-height: 28px; margin-left: 10px; cursor: pointer;"></i></label>
						<input type="search" name="" id="search" class="search_box">
					</div>
				</div>
				<!-- <center>
				<table width="95%" align="center" border="1" rules="all" bgcolor="#ffb3b3" style="text-align: center; margin-top: 6%;">
					<tr bgcolor="#ff4d4d" height="35" style="color: #fff;">
						<th>S.I</th>
						<th>Name</th>
						<th>Mobile</th>
						<th>Qualification</th>
						<th>Email Id</th>
						<th>Address</th>
						<th>Action</th>
					</tr>
					<?php
					// $conn = mysqli_connect("localhost","root","","apni_pathashala");
					// $query = mysqli_query($conn,"select *from teacher_tbl");
					// $sl_no=1;
					// while($row=mysqli_fetch_array($query)){
					// 	echo "<tr height='35'>";
					// 				echo "<td>".$sl_no++."</td>";
					// 				echo "<td>".$row['name']."</td>";
					// 				echo "<td>".$row['mobile']."</td>";
					// 				echo "<td>".$row['qualification']."</td>";
					// 				echo "<td>".$row['email']."</td>";
					// 				echo "<td>".$row['address']."</td>";
					// 				echo "<td><i class='fas fa-user-edit'></i> <i class='fas fa-trash-alt'></i></td>";
					// 	echo "</tr>";
					
					?>
				</table>
				</center> -->
				<span id="viewdata"></span>
			</div>
		</div>
		<div id="footer">
			<p class="footer_text">Powered By:-Tech Glitch</p>
		</div>
	</div>
</body>
</html>
<div id="popup">
<div style="height: 50px; background-color: #ff4d4d; padding-left: 10px;">
	<h2 style="float: left; line-height: 50px;">Teacher Registration Form</h2>
	<i class="fas fa-times-circle add_button" id="close"></i>
</div><br>
<div class="alert"><i class="fas fa-times cross" style="float: right; line-height: 30px;"></i><font color="red"><span id="errormsg"></span></font></div><br>
	<form action="#" method="post" onsubmit="return false">
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
		</div><br><br>
		<div id="column">
			&nbsp &nbsp &nbsp <font size="4" class="font" style="margin-left: 22px;">Address:-</font><br>
			<textarea placeholder="Address" name="address" style="padding-left: 20px; font-size: 20px; font-weight: bold;" id="adr"></textarea><br>
			<center><input type="submit" name="submit" value="Submit" class="button" id="submit">
			<input type="submit" name="" value="Reset"  class="button" id="reset"></center><br>
		</div>
	</form>
</div>
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
			$(".alert").css("display","");
		})
		$.get("crud_teacher_reg.php",function(data){
			$("#viewdata").html(data);
		})


		/// Code for searchbox ///
		$("#search").keyup(function(){
			search = $(this).val();
			$.get("crud_teacher_reg.php",{search:search},function(data){
				$("#viewdata").html(data);
			})
		})
		/// code end of searchbox///


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
				$(".alert").css("display","block")
				$("#errormsg").text("Name is required...")
				$("#fname").focus();
			}
			else if (mobile=="") {
				$(".alert").css("display","block")
				$("#errormsg").text("Mobile is required...")
				$("#mob_no").focus();
			}
			else if(mobile.length!=10){
				$("#errormsg").text("Enter valid Mobile Number...")
				$("#mob_no").focus();
			}
			else if(education==""){
				$(".alert").css("display","block")
				$("#errormsg").text("Qualification is required...")
				$("#edu").focus();
			}
			else if(mail==""){
				$(".alert").css("display","block")
				$("#errormsg").text("Email Id is required...")
				$("#mail").focus();
			}
			else if(password==""){
				$(".alert").css("display","block")
				$("#errormsg").text("Password Id is required...")
				$("#pwd").focus();
			}
			else if(con_password==""){
				$(".alert").css("display","block")
				$("#errormsg").text("Conform Password Id is required...")
				$("#con_pwd").focus();
			}
			else if(address==""){
				$(".alert").css("display","block")
				$("#errormsg").text("Address Id is required...")
				$("#adr").focus();
			}
			else{
				$.get("crud_teacher_reg.php",{t_name:name,t_mobile:mobile,t_education:education,t_mail:mail,t_password:password,t_address:address, submit:submit},function(data){
					$("#viewdata").html(data);
					reset();
				})
			}
		})
	})
	//popup botton

	$("#open").click(function(){      
		$("#popup").css("display","block");
	})
	$("#close").click(function(){
		$("#popup").css("display","");
	})
	
	//popup botton
</script>




<?php
	// $conn=mysqli_connect("localhost","root","","apni_pathashala");
	// if (isset($_POST['submit'])) {
	// 	$name = $_POST['name'];
	// 	$mobile = $_POST['mobile'];
	// 	$qualification = $_POST['qualification'];
	// 	$email = $_POST['email'];
	// 	$password = $_POST['password'];
	// 	$address = $_POST['address'];
	// 	$query = mysqli_query($conn,"insert into teacher_tbl(name,mobile,qualification,email,password,address) values('$name',$mobile,'$qualification','$email',$password,'$address')");
	// 	echo mysqli_error($conn);
	// }
	// mysqli_close($conn);
?>