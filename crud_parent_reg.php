<?php
	require("connection.php");
	if (isset($_GET['submit'])) {
		$query = mysqli_query($conn,"insert into parents_tbl values(0,'".$_GET['s_std_name']."','".$_GET['fname']."','".$_GET['smobile']."','".$_GET['semail']."','".$_GET['spassword']."','".$_GET['saddress']."')");
		if ($query) {
			echo "Record saved...";
		}
		else{
			echo "Record not saved...";
			echo mysqli_error($conn);
		}
	}
	if (isset($_GET['update'])) {
		$query = mysqli_query($conn,"update parents_tbl set std_name = '".$_GET['s_std_name']."',parent_name = '".$_GET['fname']."', mobile = '".$_GET['smobile']."', email = '".$_GET['semail']."', address = '".$_GET['saddress']."' where parent_id = '".$_GET['parent_id']."'");
			echo mysqli_error($conn);
	}
?>
<center>
	<br><br><br><br>
	<table width="95%" border="1" rules="all" bgcolor="#ffb3b3">
	<tr bgcolor="#ff4d4d" height="35" style="color: #fff;">
		<th>Sl.no</th>
		<th>Student Name</th>
		<th>Parent Name</th>
		<th>Mobile no</th>
		<th>Email Id</th>
		<th>Address</th>
	</tr>
	<?php
	require("connection.php");
		$result = mysqli_query($conn,"select *from parents_tbl where concat(std_name,parent_name,mobile) like '%".@$_GET['search']."%' order by parent_name asc");
		$slno = 1;
		echo mysqli_error($conn);
		while ($row = mysqli_fetch_array($result)) {
			echo"<tr align='center' height=30>";
			echo "<td>".$slno++."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[3]."</td>";
			echo "<td>".$row[4]."</td>";
			echo "<td>".$row[6]."</td>";
			echo"</tr>";
		}
	?>
</table>
</center>