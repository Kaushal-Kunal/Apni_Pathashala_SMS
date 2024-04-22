<?php
	require("connection.php");
	if (isset($_GET['submit'])) {
	$query = mysqli_query($conn,"insert into admin_tbl values(0,'".$_GET['a_name']."',
								'".$_GET['a_mobile']."','".$_GET['a_education']."',
								'".$_GET['a_mail']."','".$_GET['a_password']."',
								'".$_GET['a_address']."')");
	if ($query) {
		echo "Record saved...";
	}
		else{
			echo "Record not Saved...";
			echo mysqli_error($conn);
		}
	}
	if (isset($_GET['update'])) {
	$query = mysqli_query($conn,"insert into admin_tbl values(0,'".$_GET['a_name']."',
								'".$_GET['a_mobile']."','".$_GET['a_education']."',
								'".$_GET['a_mail']."','".$_GET['a_address']."')");
	if ($query) {
		echo "Record saved...";
	}
		else{
			echo "Record not Saved...";
			echo mysqli_error($conn);
		}
	}
?>