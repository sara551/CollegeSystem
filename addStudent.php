<html>
	<?php session_start();?>
	<head>
		<title>Add Student Page</title>
		<link href="css/addStudent.css" rel="stylesheet">
		<link href="css/generalFormStyle.css" rel="stylesheet">
		<script src="js/validation.js"></script>
		
	</head>
	<body>
		<?php
			if($_SESSION['type'] == 'Admin'){
				include("adminRestPagesHeader.html");
				
				echo'<div class="pageContent">
					<form action="php/addStudent.php" method="post" enctype="multipart/form-data" id="myForm">
						<div class="space">
							<div class="content">
								<div class="formData">
									<div class="dataCentering"><h1>Add Student</h1></div>
									<div class="formFields">
										<div class="fieldInfo studentName">
											<span>Student Name:</span>
											<input type="text" placeholder="Enter Student Name" name="name" id="name">
											<div class="error"></div>
										</div>
										<div class="fieldInfo studentID">
											<span>Student ID:</span>
											<input type="number" placeholder="Enter Student ID" name="id" id="id">
											<div class="error"></div>
										</div>
										<div class="fieldInfo studentMajor">
											<span>Student Major:</span>
											<input type="text" placeholder="Enter Student Major" name="major" id="major">
											<div class="error"></div>
										</div>
										<div class="fieldInfo studentLevel">
											<span>Student Level:</span>
											<input type="text" placeholder="Enter Student Level" name="level" id="level">
											<div class="error"></div>
										</div>
										<div class="fieldInfo studentLevel">
											<span>Student Address:</span>
											<input type="text" placeholder="Enter Student Address" name="address" id="address">
											<div class="error"></div>
										</div>
										<div class="fieldInfo studentMail">
											<span>Student Mail:</span>
											<input type="text" placeholder="Enter Student Mail" name="email" id="mail">
											<div class="error"></div>
										</div>
										<div class="fieldInfo studentPassword">
											<span>Student Password:</span>
											<input type="password" placeholder="Enter Student Password" name="password" id="password">
											<div class="error"></div>
										</div>
									</div>
									<div class="submitButton">
										<div class="dataCentering"><input type="button" value="Add Student" onClick="ValidateAddForm()"></div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>';
				include("footer.php");
			}
			else{
				header('location: proceed.php');
			}
		?>
	</body>
</html>