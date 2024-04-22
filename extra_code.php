<!DOCTYPE html>
<html>
<head>
	<title>kpfmk</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
</head>
<body>
	<center>
		<div style="width: 600px; height: 400px; background-color: red; margin-top: 100px;">
			<div style="width: 600px; height: 60px; background-color: blue;">
				<i class="fas fa-times-circle cut" id="close" style="float: right; font-size: 30px; color: #fff; margin:15px;"></i>
			</div>
			<div id="floated_form"><br><br>
			<center><font size="7" class="heading"><b><h2 style="color: black;">Student Registration</h2></b></font></center><br>
			<div class="column">
				<form action="#" method="post">
					<font size="4" class="font">Full Name:-</font><br>
					<input type="text" name="name" class="input_box" placeholder="Full Name." id="stdName"><span id="std_Name"></span><br><br>
					<font size="4" class="font">Student Id:-</font><br>
					<input type="number" name="std_id" class="input_box" placeholder="Student Id" id="stdId"><span id="std_Id"></span><br><br>
					<font size="4" class="font">Class:-</font><br>
					<input type="text" name="class" class="input_box" placeholder="Class" id="stdClass"><span id="std_class"></span><br><br>
					<font size="4" class="font">Date of Birth:-</font><br>
					<input type="date" name="dob" class="input_box" placeholder="Date of Birth" id="stdDob"><span id="std_Dob"></span><br>
				</div>
				<div class="column">
					<font size="4" class="font">Mobile No:-</font><br>
					<input type="text" name="mobile" class="input_box" placeholder="Mobile no" id="stdMob"><span id="std_Mob"></span><br><br>
					<font size="4" class="font">Email Id:-</font><br>
					<input type="text" name="email" class="input_box" placeholder="Email Id." id="stdEmail"><span id="std_Email"></span><br><br>
					<font size="4" class="font">Password:-</font><br>
					<input type="password" name="password" class="input_box" placeholder="Password" id="password"><span id="pass_word"></span><br><br>
					<span><font size="4" class="font">Conform Password:-</font></span><br>
					<input type="password" name="" class="input_box" placeholder="Conform Password" id="cPassword"><span id="c_password"></span>
				</div>
				<div id="column" style="display: table-footer-group;">
					<font size="4" class="font"> &nbsp&nbspAddress:-</font></b><br>
					<textarea placeholder="Address" name="address"></textarea><br>
					<center><br><input type="submit" name="submit" value="Submit" class="button" onclick="std_reg();">
					<input type="submit" name="reset" value="Reset"  class="button">
				</form>
				</div>
			</div>
		</div>
	</center>
</body>
</html>
<i class="fas fa-edit" title="Add" style="cursor: pointer;"></i>
<i class="fas fa-eye" title="View" style="cursor: pointer;"></i>
<i class="far fa-trash-alt" title="Delete" style="cursor: pointer;"></i>