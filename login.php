<?php
session_start();
require("connection.php");
if (isset($_GET['login'])) {
	$query = mysqli_query($conn,"select *from teacher_tbl where email = '".$_GET['uid']."' and password = '".$_GET['pwd']."'");
	$row = mysqli_fetch_array($query);
	if (mysqli_num_rows($query)==1) {
		$_SESSION['id'] = $row[0];
		$_SESSION['name'] = $row[1];
		$_SESSION['uid'] = $row[4];
		$_SESSION['pwd'] = $row[5];
		echo "teacher_dashboard.php";
	}
	else{
		echo "Login Failed...";
	}
	echo mysqli_error($conn);
}

//Students login code goes here.	
if (isset($_GET['std_login'])) {
	$query = mysqli_query($conn,"select *from students_tbl where email = '".$_GET['uid']."' and password = '".$_GET['pwd']."'");
	$row = mysqli_fetch_array($query);
	if (mysqli_num_rows($query)==1) {
		$_SESSION['id'] = $row[0];
		$_SESSION['name'] = $row[1];
		$_SESSION['uid'] = $row[5];
		$_SESSION['pwd'] = $row[6];
		echo "std_dashboard.php";
	}
	else{
		echo "Login Failed...";
	}
	echo mysqli_error($conn);
}
//Students login code end here.	

// Parent login code goes here.	
if (isset($_GET['parent_login'])) {
	$query = mysqli_query($conn,"select *from parents_tbl where email = '".$_GET['uid']."' and password = '".$_GET['pwd']."'");
	$row = mysqli_fetch_array($query);
	if (mysqli_num_rows($query)==1) {
		$_SESSION['id'] = $row[0];
		$_SESSION['name'] = $row[2];
		$_SESSION['uid'] = $row[4];
		$_SESSION['pwd'] = $row[5];
		echo "parent_dashboard.php";
	}
	else{
		echo "Login Failed...";
	}
	echo mysqli_error($conn);
}
// Parent login code end here.	

// Admin login code end here.
if (isset($_GET['admin_login'])) {
	$query = mysqli_query($conn,"select *from admin_tbl where email = '".$_GET['uid']."' and password = '".$_GET['pwd']."'");
	$row = mysqli_fetch_array($query);
	if (mysqli_num_rows($query)==1) {
		$_SESSION['id'] = $row[0];
		$_SESSION['name'] = $row[1];
		$_SESSION['uid'] = $row[4];
		$_SESSION['pwd'] = $row[5];
		echo "admin_dashboard.php";
	}
	else{
		echo "Login Failed...";
	}
	echo mysqli_error($conn);
}	
// Admin login code end here.
?>