<!DOCTYPE html>
<html>
<head>
	<title>Responsive Form</title>
	<style type="text/css">
		*{margin: 0;padding: 0;}
		.res_form{
			width:auto;
			height: auto;
			border:5px solid red;
			display: table;
			margin: 0px auto;
			padding: 10px;
		}
		.column{
			width:auto;
			height:100%;
			background-color: silver;
			padding: 20px;
			float: left;
		}
		.row{
			display: table-footer-group;
			float: none;
			width: 100%;
			background-color: silver;
		}
		.txtBox{
			width: 250px;
			padding: 10px;
			margin: 10px 0px;
		}
		.btn{
			width: auto;
			padding: 5px 15px;
		}
		.txtarea{
			width: 100%;
			height: auto;
			padding: 10px;
		}
		.selectBox{
			width: 100%;
			height: 40px;
			padding: 10px;
		}
	</style>
</head>
<body>
	<div class="res_form">
		<div class="column">
			Name : <br>
			<input type="text" name="abc" class="txtBox"><br>
			Email : <br>
			<input type="text" name="abc" class="txtBox"><br>
			Name : <br>
			<input type="text" name="abc" class="txtBox"><br>
			Email : <br>
			<input type="text" name="abc" class="txtBox"><br>
			Name : <br>
			<input type="text" name="abc" class="txtBox"><br>
			Email : <br>
			<input type="text" name="abc" class="txtBox"><br>
		</div>

		<div class="column">
			Name : <br>
			<input type="text" name="abc" class="txtBox"><br>
			Email : <br>
			<input type="text" name="abc" class="txtBox"><br>
			Name : <br>
			<input type="text" name="abc" class="txtBox"><br>
			Email : <br>
			<input type="text" name="abc" class="txtBox"><br>
			Name : <br>
			<input type="text" name="abc" class="txtBox"><br>
			Email : <br>
			<input type="text" name="abc" class="txtBox"><br>
		</div>

		<div class="column">
			Name : <br>
			<input type="text" name="abc" class="txtBox"><br>
			Email : <br>
			<input type="text" name="abc" class="txtBox"><br>
			Name : <br>
			<input type="text" name="abc" class="txtBox"><br>
			Email : <br>
			<input type="text" name="abc" class="txtBox"><br>
			Name : <br>
			<input type="text" name="abc" class="txtBox"><br>
			Email : <br>
			<input type="text" name="abc" class="txtBox">
		</div>

		<div class="row">
			<center>
				<input type="submit" name="submit" value="submit" class="btn">
				<input type="submit" name="submit" value="submit" class="btn">
				<input type="submit" name="submit" value="submit" class="btn">
			</center>
		</div>
	</div>
</body>
</html>