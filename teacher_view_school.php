<?php
	session_start();
	if (!($_SESSION['uid'] and $_SESSION['pwd'])) {
		header("location:teacher_login.php");
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
						<li><a href="teacher_dashboard.php"><i class="fas fa-tv"></i><span>Dashboard</span></a></li>
						<li><a href="teacher_profile.php"><i class="far fa-user-circle"></i><span>My Profile</span></a></li>
						<li><a href="teacher_view_school.php"><i class="fas fa-school icon"></i><span>View School</span></a></li>
						<li><a href="teacher_resume.php"><i class="fas fa-eye"></i><span>View Resume</span></a></li>
						<li><a href="teacher_resume.php"><i class="far fa-file"></i></i><span> Upload Resume</span></a></li>
						<li><a href="logout.php"> <i class="fas fa-sign-in-alt icon"></i><span> Logout</span></a></li>
					</ul>
				</div>
				<div id="view_port">
					<div id="menu_box"><font size="5" color="white" style="margin-left: 35px; line-height: 50px;">List of School</font>
						<div style="width: 315px; background-color: #fff; height: 28px; float: right;margin-right: 20px; margin-top: 10px; border-radius: 8px; border: none;">
							<label for="search"><i class="fas fa-search" style="line-height: 28px; margin-left: 10px; cursor: pointer;"></i></label>
							<input type="" name="" id="search" class="search_box">
						</div>
					</div>
					<span id="viewdata"></span>
					<!-- <center>
					<table width="95%" align="center" border="2" bgcolor="#ffb3b3" style="text-align: center; margin-top: 6%; border-collapse: collapse;">
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
						// $conn = mysqli_connect("localhost","root","","apni_pathashala");
						// $query = mysqli_query($conn,"select *from school_list");
						// $sl_no=1;
						// while ($row=mysqli_fetch_array($query)) {
						// 	echo "<tr height='35'>";
						// 			echo "<td>".$sl_no++."</td>";
						// 			echo "<td>".$row['school_name']."</td>";
						// 			echo "<td>".$row['name_of_principle']."</td>";
						// 			echo "<td>".$row['email_id']."</td>";
						// 			echo "<td>".$row['standared']."</td>";
						// 			echo "<td>".$row['transport']."</td>";
						// 			echo "<td>".$row['hostel']."</td>";
						// 			echo "<td>".$row['address']."</td>";
						// 			echo "<td><button>Apply</button></td>";
						// 	echo "</tr>";
						// }
					?>
				</table>
				</center> -->
				</div>
				<div id="footer">Powered By:-Green Soft</div>
			</div>
		</body>
	</html>
	<script type="text/javascript">
		$.get("crud_adminschool.php",function(data){
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
	</script>
