<?php
	session_start();
	if (!($_SESSION['uid'] and $_SESSION['pwd'])) {
		header("location:parent_login.php");
	}
?>
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
						<li><a href="parent_dashboard.php"><i class="fas fa-tv"></i><span>Dash Board</span></a></li>
						<li><a href="parent_profile.php"><i class="far fa-user-circle"></i><span>Parent Profile</span></a></li>
						<li><a href="parent_view_school.php"><i class="fas fa-school icon"></i><span>View School</span></a></li>
						<li><a href="std_test.php"><i class="fas fa-file-alt"></i><span>Apply test</span></a></li>
						<li><a href="logout.php"> <i class="fas fa-sign-in-alt icon"></i><span> Logout</span></a></li>
					</ul>
				</div>
				<div id="view_port">
					<div id="menu_box"><p><font size="6" color="white" style="margin-left: 12px; line-height: 48px; float: left;"><b>Parent Profile</b></font></p><i class="login_as">Login As : <?php echo $_SESSION['name']?></i></div>
					<?php
						$conn=mysqli_connect("localhost","root","","apni_pathashala");
						$query=mysqli_query($conn,"select *from parents_tbl where parent_id = '". $_SESSION['id']."'");
						$row = mysqli_fetch_array($query);
					?>
					<div class="profile">
						<div id="#errormsg"></div>
						<div class="column">
							<font size="4" class="font">Student Name:-</font><br>
							<input type="text" name="std_name" class="input_box" placeholder="Full Name." id="std_name" value="<?php echo $row ['std_name']?>"><br><br> 
							<font size="4" class="font">Father Name:-</font><br>
							<input type="text" name="parent_name" class="input_box" placeholder="Full Name." id="fname" value="<?php echo $row ['parent_name']?>"><br><br> 
							<font size="4" class="font">Mobile no:-:</font><br>
							<input type="text" name="mobile" class="input_box" placeholder="Mobile no." id="mob_no" value="<?php echo $row ['mobile']?>"><br><br> 
							<font size="4" class="font">Email Id:-</font><br>
							<input type="text" name="email" class="input_box" placeholder="Email Id." id="mail" value="<?php echo $row ['email']?>"><br><br>
							<font size="4" class="font">Address:-</font><br>
							<textarea placeholder="Address." name="address" class="address" id="ptextarea"><?php echo $row['address']?></textarea><br><br>
							<center><input type="button" name="" value="Update" class="button" id="update"></center>
						</div>
					</div>
				</div>
			</div>
			<div id="footer">Powered By:-Green Soft</div>
		</div>
	</body>
</html>
<script type="text/javascript">
	$(function(){
		$("#update").click(function(){
			var fname, std_name, mobile, email,address, update
			update = $("#update").val()
			fname = $("#fname").val()
			std_name = $("#std_name").val()
			mobile = $("#mob_no").val()
			email = $("#mail").val()
			address = $("#ptextarea").val()
			parent_id = <?php echo $_SESSION['id']?>;
				if (fname=="") {
					alert("Father Name is required..")
					$("#fname").focus();
				}
				else if(std_name==""){
					alert("Student Name is required..")
					$("#std_name").focus();
				}
				else if(mobile==""){
					alert("Mobile is requires")
					$("#mob_no").focus();
				}
				else if(email==""){
					alert("Email is required")
					$("mail").focus();
				}
				else if(address==""){
					alert("Address is required..")
					$("#ptextarea").focus();
				}
				else{
					$.get("crud_parent_reg.php",{fname:fname,s_std_name:std_name,smobile:mobile,semail:email,saddress:address,parent_id:parent_id,update:update},function(data){
						alert("Record Updated...")
					})
				}
			})
		})
</script>