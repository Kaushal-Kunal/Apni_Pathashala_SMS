<?php
	require("connection.php");
	if (isset($_GET['submit'])) {
		$query = mysqli_query($conn,"insert into school_list values(0,'".$_GET['s_school_name']."',
										     '".$_GET['s_principle_name']."','".$_GET['s_mail']."',
										     '".$_GET['s_standard']."','".$_GET['shostel']."','".$_GET['stransport']."','".$_GET['saddress']."')");
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
	<table width="95%"  rules="all" bgcolor="#ffb3b3" style="margin-top: 83px;">
		<tr bgcolor="#ff4d4d" height="35" style="color: #fff;">
			<th>Sl.no</th>
			<th>School Name</th>
			<th>Name of Principle</th>
			<th>Email id</th>
			<th>Standared</th>
			<th>Transport</th>
			<th>Hostel</th>
			<th>Address</th>
		</tr>
		<?php 
			 $result = mysqli_query($conn,"select *from school_list where concat(school_name) like '%".@$_GET['search']."%' order by school_name asc");
			$slno = 1;
			while ($row = mysqli_fetch_array($result)) {
				echo"<tr align='center' height=30>";
				echo"<td>".$slno++."</td>";
				echo"<td>".$row[1]."</td>";
				echo"<td>".$row[2]."</td>";
				echo"<td>".$row[3]."</td>";
				echo"<td>".$row[4]."</td>";
				echo"<td>".$row[5]."</td>";
				echo"<td>".$row[6]."</td>";
				echo"<td>".$row[7]."</td>";
				echo"</tr>";
			}
		?>
	</table>
</center>