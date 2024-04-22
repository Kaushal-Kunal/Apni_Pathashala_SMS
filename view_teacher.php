<?php
	session_start();
	if (!($_SESSION['uid'] and $_SESSION['pwd'])) {
		header("location:students_login.php");
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
						<li><a href="std_dashboard.php"><i class="fas fa-tv"></i><span>Dashboard</span></a></li>
						<li><a href="std_profile.php"><i class="fas fa-user-graduate icon"></i><span> Profile</span></a></li>
						<li><a href="view_school.php"><i class="fas fa-school icon"></i><span>View School</span></a></li>
						<li><a href="view_teacher.php"><i class="fas fa-chalkboard-teacher icon"></i></i><span>View Teacher</span></a></li>
						<li><a href="apply_test.php"><i class="fas fa-file-alt"></i><span> Apply test</span></a></li>
						<li><a href="student_login.php"> <i class="fas fa-sign-in-alt icon"></i><span> Logout</span></a></li>
					</ul>
				</div>
				<div id="view_port">
					<div id="menu_box"><font size="5" color="white" style="margin-left: 33px; line-height: 50px;"><b>List of Teacher</b></font>
						<div style="width: 315px; background-color: #fff; height: 28px; float: right;margin-right: 20px; margin-top: 10px; border-radius: 8px; border: none;">
							<label for="search"><i class="fas fa-search" style="line-height: 28px;
							 margin-left: 10px; cursor: pointer;"></i></label>
							<input type="" name="" id="search" class="search_box">
						</div>
					</div>
					<span id="viewdata"></span>
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
					$conn = mysqli_connect("localhost","root","","apni_pathashala");
					$query = mysqli_query($conn,"select *from teacher_tbl");
					$sl_no=1;
					while($row=mysqli_fetch_array($query)){
						echo "<tr height='35'>";
									echo "<td>".$sl_no++."</td>";
									echo "<td>".$row['name']."</td>";
									echo "<td>".$row['mobile']."</td>";
									echo "<td>".$row['qualification']."</td>";
									echo "<td>".$row['email']."</td>";
									echo "<td>".$row['address']."</td>";
									echo "<td><i class='fas fa-user-edit'></i> <i class='fas fa-trash-alt'></i></td>";
						echo "</tr>";
					}
					?>
				</table>
				</center> -->
			</div>
			<div id="footer">Powered By:-Green Soft</div>
		</div>
	</body>
</html>
<script type="text/javascript">
	$.get("crud_teacher_reg.php",function(data){
	    $("#viewdata").html(data);
	})
	$("#search").keyup(function(){
		search = $(this).val();
		$.get("crud_teacher_reg.php",{search:search},function(data){
			$("#viewdata").html(data);
		})
	})
</script>