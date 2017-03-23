<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<style type="text/css">
		body
		{
			margin: 0;
			font-family: calibri;
			
		}

		fieldset
		{
			margin-right: 300px;
			margin-left: 300px;
			padding: 10px;
			border-radius: 10px;
			background-color: #eee;
		}

		form 
		{
			font-weight: bold;
			padding: 20px;
			margin-top: 20px;
			border: solid 1px #ccc;
		}

		input, textarea 
		{
			margin-top: 5px;
			margin-bottom: 10px;
			width: 70%;
			border-radius: 5px;
			border: solid 3px #ccc;
			padding: 7px 10px;
			resize: none;
		}

		button
		{
			
			padding: 7px 25px;
			color: #FFFFFF;
			background-color: #3366FF;
			font-size: 18px;
			font-weight: 500;
			cursor: pointer;
			border-radius: 10px;
		}

	</style>
</head>
<body>

	<form method="POST" action="students">
		{{ csrf_field() }}
		<center>
		
		<img src="lvcc_logo1.png">

		<br><br>
		<fieldset>
		<legend><h1>Registration Form</h1></legend>

		<h3>
		Name: <br>
		<input type="text" name="name" required>
		<br>
		Age: <br>
		<input type="number" name="age" required>
		<br>
		Course: <br>
		<input type="text" name="course"  required><br>
		Address <br>
			<textarea name="address" rows="3" cols="40"></textarea> <br>
		</h3>
		<button type="submit"> Register </button>
		</center>

		</fieldset>

	</form>


</body>
</html>