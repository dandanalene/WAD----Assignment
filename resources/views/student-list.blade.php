<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
	<style type="text/css">
	
		body
		{
			margin: 0;
			font-family: Calibri;
		}

		section
		{
			
			padding: 20px;
			width: 800px;
			margin: 0 auto;
			margin-top: 30px; 
			margin-bottom: 50px;
			
			background-color: #EEE;
			border: solid black;
		}

		table
		{
			width: 100%;
			padding: 5px 20px;
			background-color: #EEE;
			border: solid black;
		}

		th
		{
			height: 50px;
		}

		form {
			display: inline-block;
			margin-top: 20px;
			
		}
		
		.back {
			margin-top: 20px;
		}

		.button
		{
			padding: 5px 20px;
			color: #FFFFFF;
			background-color: #3366FF;
			font-size: 15px;
			font-weight: 500;
			cursor: pointer;
			border-radius: 10px;
			text-decoration: none;
		}

		header {
			background-color: #003366;
			height: 180px;
			
			margin-bottom: 5px;
			padding: 0 20%;
			border-bottom: solid black;
			border-top: solid black;
			border-left: solid black;
			border-right: solid black;
			width: 800px;
		}

		#lvcc_logo img 
		{
			
			float: left;
			height: 160px;
			margin-top: 10px;
			
		}

		.text
		{
			float: left;
			padding: 0;
			margin-top: 20px;
			margin-left: 30px; 
			font-family: tolkien;
			font-size: 50px;
			color: #fff;
		}
		.text1
		{
			float: left;
			padding: 0;
			margin-left: 30px; 
			font-family: Arial;
			font-size: 35px;
			color: #fff;
			margin-top: 10px;
		}

		#edit, #delete 
		{
			margin: 0 5px;
			border-radius: 7px;
			margin-left: 10px;
			display: inline-block;
			padding: 2px 10px;
			float: right;
		}

		

		#edit 
		{
			background-color: #009933;
		}

		#delete
		{
			background-color: #FF1919;
		}
		

		#edit a, #delete a 
		{
			text-decoration: none;
			color: #fff;
			font-weight: bold;
		}

	</style>
</head>
<body>

<header>
			<div id="lvcc_logo">
				<img src="lvcc_logo1.png">
			</div>
			<div class="text"> La Verdad Christian College</div>

			<div class="text1"> Registered Students </div>
		</header>



<section>
	<table>
		<thead>
			<tr>
			    <td><h1>Name</h1></td>
			    <td><h1>Age</h1></td> 
			    <td><h1>Course</h1></td>
			    <td><h1>Address</h1></td>
			 </tr>
		 </thead>
		 <?php foreach ($students as $student): ?>
		 <tbody>
		 	<tr>
			    <td><?php echo $student->name ?> </td>
			    <td><?php echo $student->age ?> </td>
			    <td><?php echo $student->course ?> </td>
			    <td><?php echo $student->address ?> </td>
			    
			    <td>
			    	<div id="delete">
			    		<a href="/delete-student/{{ $student->id }}">
			    			Delete
			    		</a>
			    	</div>

			    	<div id="edit">					
							<a href="/students/edit/{{ $student->id }}">
								Edit
							</a>
					</div>
			    </td>
			  </tr>
			  
		</tbody>
		<?php endforeach ?>

		</table>
		
		<div class="back">
			<a href="/" class="button"> Add Student </a>
		</div>
		

</section>
</body>
</html>