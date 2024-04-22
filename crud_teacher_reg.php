<?php
	require("connection.php");
	if (isset($_GET['submit'])) {
	$query = mysqli_query($conn,"insert into teacher_tbl values(0,'".$_GET['t_name']."',
								'".$_GET['t_mobile']."','".$_GET['t_education']."',
								'".$_GET['t_mail']."','".$_GET['t_password']."',
								'".$_GET['t_address']."')");
	if ($query) {
		echo "Record saved...";
	}
		else{
			echo "Record not Saved...";
			echo mysqli_error($conn);
		}
	}
?>
<center>
<table width="95%" align="center" border="1" rules="all" bgcolor="#ffb3b3" style="text-align: center; margin-top: 6%;">
	<tr bgcolor="#ff4d4d" height="35" style="color: #fff;">
		<th>S.I</th>
		<th>Name</th>
		<th>Mobile</th>
		<th>Qualification</th>
		<th>Email Id</th>
		<th>Address</th>
	</tr>
	<?php
	$result = mysqli_query($conn,"select *from teacher_tbl where concat (name,mobile) like '%".@$_GET['search']."%' order by name,mobile asc");
	$sl_no=1;
	while($row=mysqli_fetch_array($result)){
		echo "<tr align='centre' height='35'>";
		echo "<td>".$sl_no++."</td>";
		echo "<td>".$row['1']."</td>";
		echo "<td>".$row['2']."</td>";
		echo "<td>".$row['3']."</td>";
		echo "<td>".$row['4']."</td>";
		echo "<td>".$row['5']."</td>";
		echo "</tr>";
	}
	?>
</table>
</center>