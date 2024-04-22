<?php 
	session_start();
	if (!($_SESSION['uid'] and $_SESSION['pwd'])) {
		header("location:admin_login.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>List of School</title>
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
					<div id="menu_box"><p><font size="6" color="white" style="line-height: 48px; float: left;"><b>List of parents</b></font></p>
					<i class="fas fa-plus-circle add_button" id="open" style="float: right;"></i>
					<div style="width: 315px; background-color: #fff; height: 28px; float: right;margin-right: 20px; margin-top: 10px; border-radius: 8px; border: none;">
						<label for="search"><i class="fas fa-search" style="line-height: 28px; margin-left: 10px; cursor: pointer;"></i></label>
						<input type="search" name="" id="search" class="search_box">
					</div>
				</div>
				<center>
				<!-- <table width="95%" align="center" border="2" bgcolor="#ffb3b3" style="text-align: center; margin-top: 6%; border-collapse: collapse;">
						<tr bgcolor="#ff4d4d" height='35'>
								<th>S.N.</th>
								<th>School Name</th>
								<th>Name of Prinnciple</th>
								<th>Email id</th>
								<th>Standared</th>
								<th>Transport</th>
								<th>Hostel</th>
								<th>Address</th>
								<th>Action</th>
						</tr>
					<?php
						$conn = mysqli_connect("localhost","root","","apni_pathashala");
						$query = mysqli_query($conn,"select *from school_list");
						$sl_no=1;
						while ($row=mysqli_fetch_array($query)) {
							echo "<tr height='35'>";
								echo "<td>".$sl_no++."</td>";
								echo "<td>".$row['school_name']."</td>";
								echo "<td>".$row['name_of_principle']."</td>";
								echo "<td>".$row['email_id']."</td>";
								echo "<td>".$row['standared']."</td>";
								echo "<td>".$row['transport']."</td>";
								echo "<td>".$row['hostel']."</td>";
								echo "<td>".$row['address']."</td>";
								echo "<td><i class='fas fa-user-edit'></i> <i class='fas fa-trash-alt'></i></td>";
							echo "</tr>";
						}
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
<div style="height: 50px; background-color:  #ff4d4d; padding-left: 10px;">
	<h2 style="float: left; line-height: 50px;">School Registration Form</h2>
	<i class="fas fa-times-circle add_button" id="close"></i>
	<div class="alert"><i class="fas fa-times cross" style="float: right; line-height: 30px;"></i><font color="red"><span id="errormsg"></span></font></div><br>
</div><br><br>
<form action="#" method="post" onsubmit="return false">
	<div class="column" style="height: 100px;">
		<font size="4" class="font">School Name:-</font><br>
		<input type="text" name="school_name" class="input_box" placeholder="School Name" id="school_name"><br><br>
		<font size="4" class="font">Name of Principle:-</font><br>
		<input type="text" name="name_of_principle" class="input_box" placeholder="Name of Principle" id="pri_name"><br><br>
		<font size="4" class="font">Email Id:-</font><br>
		<input type="text" name="email_id" class="input_box" placeholder="Email Id." id="mail"><br><br>
	</div>
	<div class="column">
		<font size="4" class="font">Standared:-</font><br>
		<select name="standared" class="input_box" id="standard">
			<option>---select---</option>
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
		<font size="4" class="font">Hostel:-</font><br>
		<input type="" name="hostel" class="input_box" placeholder="Hostel" id="hostel"><br><br>
		<font size="4" class="font">Transport:-</font><br>
		<input type="text" name="transport" class="input_box" placeholder="Transport" id="transport"><br>
	</div>
	<div id="column">
		<font size="4" class="font"> &nbsp Address:-</font><br>
		<textarea placeholder="Address" name="address"id="address" style="width: 615px;"></textarea><br>
		<center>
		<input type="submit" name="submit" value="Submit" class="button" id="submit">
		<input type="submit" name="reset" value="Reset"  class="button" id="reset">
		</center>
	</div><br>
</form>
</div>
<script type="text/javascript">
	$(function(){
		function reset(){
			$("#school_name").val("");
			$("#pri_name").val("");
			$("#mail").val("");
			$("#standard").val("");
			$("#hostel").val("");
			$("#transport").val("");
			$("#address").val("");
			$("#school_name").focus();
		}
		$("#reset").click(function(){
			reset();
		})
		$.get("crud_adminschool.php",function(data){
		$("#viewdata").html(data);
	})
		$(".cross").click(function(){
		$(".alert").css("display","");
	})
		// code for searchbox//
		$("#search").keyup(function(){
			search = $(this).val();
			$.get("crud_adminschool.php",{search:search},function(data){
				$("#viewdata").html(data);
			})
		})
		$("#submit").click(function(){
			var school_name, principle_name, mail, standard, hostel, transport, address, submit
			submit = $("#submit").val()
			school_name = $("#school_name").val()
			principle_name = $("#pri_name").val()
			mail = $("#mail").val()
			standard = $("#standard").val()
			hostel = $("#hostel").val()
			transport = $("#transport").val()
			address = $("#address").val()
			if(school_name==""){
				$(".alert").css("display","block");
				$("#errormsg").text("School name is required...")
				$("#school_name").focus();
			}
			else if(principle_name==""){
				$(".alert").css("display","block");
				$("#errormsg").text("Principle Name is required");
				$("#pri_name").focus();
			}
			else if (mail=="") {
				$(".alert").css("display","block");
				$("#errormsg").text("Email Id is required");
				$("#mail").focus();
			}
			else if (standard=="---select---") {
				$(".alert").css("display","block");
				$("#errormsg").text("Standard is required");
				$("#standard").focus();
			}
			else if(hostel==""){
				$(".alert").css("display","block");
				$("#errormsg").text("Hostel is required");
				$("#hostel").focus();
			}
			else if(transport==""){
				$(".alert").css("display","block");
				$("#errormsg").text("Transport is required");
				$("#transport").focus();
			}
			else if(address==""){
				$(".alert").css("display","block");
				$("#errormsg").text("Address is required");
				$("#address").focus();
			}
			else{
				$.get("crud_adminschool.php",{s_school_name:school_name, s_principle_name:principle_name, s_mail:mail, s_standard:standard, shostel:hostel, stransport:transport, saddress:address, submit:submit},function(data){
					$("#viewdata").html(data);
					reset();
				})
			}
		})
		$("#errormsg").text("Record save Successfully");
	})
$("#open").click(function(){
		$("#popup").css("display","block");
	})
	$("#close").click(function(){
		$("#popup").css("display","");
	})
</script>
<!-- <?php
	// $conn=mysqli_connect("localhost","root","","apni_pathashala");
	// if (isset($_POST['submit'])) {
	// $school_name = $_POST['school_name'];
	// $name_of_principle = $_POST['name_of_principle'];
	// $email_id = $_POST['email_id'];
	// $standared = $_POST['standared'];
	// $transport = $_POST['transport'];
	// $hostel = $_POST['hostel'];
	// $address = $_POST['address'];
	// $query = mysqli_query($conn,"insert into school_list(school_name,name_of_principle,email_id,standared,hostel,transport,address) values('$school_name','$name_of_principle','$email_id','$standared','$hostel','$transport','$address')");
	// echo mysqli_error($conn);
	// }
	// mysqli_close($conn);
?> -->