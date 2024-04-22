<?php 
	require("connection.php");
	if (isset($_GET['submit'])) {
		$query = mysqli_query($conn,"insert into director_list(director_name,school_name,mobile_no,email,password,address) values
			('".$_GET['dname']."', '".$_GET['dschool']."', '".$_GET['dmobile']."',
			'".$_GET['demail']."','".$_GET['dpassword']."','".$_GET['daddress']."')");
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
	<br><br><br><br>
	<table width="95%" border="1" rules="all" bgcolor="#ffb3b3">
	<tr bgcolor="#ff4d4d" height="35" style="color: #fff;">
		<th>Sl.no</th>
		<th>Director Name</th>
		<th>School Name</th>
		<th>Mobile no</th>
		<th>Email Id</th>
		<th>Address</th>
	</tr>
	<?php
	require("connection.php");
	$result = mysqli_query($conn,"select *from director_list where concat(director_name,mobile_no) 
	like '%".@$_GET['search']."%' order by director_name asc");
	$sl_no=1;
	while($row=mysqli_fetch_array($result)) {
		echo "<tr align='center' height='35'>";
		echo "<td>".$sl_no++."</td>";
		echo "<td>".$row['1']."</td>";
		echo "<td>".$row['2']."</td>";
		echo "<td>".$row['3']."</td>";
		echo "<td>".$row['4']."</td>";
		echo "<td>".$row['6']."</td>";
		echo "</tr>";
	}
	?>
</table>
</center>