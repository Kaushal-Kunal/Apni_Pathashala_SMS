<?php
	//include("connection.php");
	require("connection.php");
	if (isset($_GET['submit'])) {
	$query = mysqli_query($conn,"insert into students_tbl values(0,'".$_GET['sname']."',
								'".$_GET['s_select']."','".$_GET['sbirth']."',
								'".$_GET['smobile']."','".$_GET['semail']."',
								'".$_GET['spassword']."','".$_GET['saddress']."')");
		if ($query) {
			echo "Record saved...";
		}
		else{
			echo "Record not saved...";
			echo mysqli_error($conn);
		}
	} 
?>
<center>
	<table width="95%" border="1" rules="all" bgcolor="#ffb3b3" style="margin: 85px auto;">
	<tr bgcolor="#ff4d4d" height="35" style="color: #fff;">
		<th>Sl.no</th>
		<th>Student Name</th>
		<th>Class</th>
		<th>Date of Birth</th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Address</th>
	</tr>
	<?php 
		$result = mysqli_query($conn,"select *from students_tbl where concat (name,mobile) 
		like '%".@$_GET['search']."%' order by name asc");
		$sl_no=1;
		echo mysqli_error($conn);
		while ($row=mysqli_fetch_array($result)) {
			echo "<tr align='center' height='35'>";
			echo "<td>".$sl_no++."</td>";
			echo "<td>".$row['1']."</td>";
			echo "<td>".$row['2']."</td>";
			echo "<td>".$row['3']."</td>";
			echo "<td>".$row['4']."</td>";
			echo "<td>".$row['5']."</td>";
			echo "<td>".$row['7']."</td>";
			echo "</tr>";
		}
	?>
	</table>
</center>