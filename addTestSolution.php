<html>
	<?php session_start();?>
	<head>
		<title>Add Test Solutions</title>
		<link href="css/generalFormStyle.css" rel="stylesheet">
		<link href="css/addTestSolution.css" rel="stylesheet">
		<script src="js/validation.js"></script>
	</head>
	<body>
		<?php
			if($_SESSION['type'] == 'Admin'){
				include("adminRestPagesHeader.html");
				echo'<div class="pageContent">
						<form action="php/addTestSolution.php" method="post" enctype="multipart/form-data" id="myForm">
							<div class="space">
								<div class="content">
									<div class="formData">
										<div class="dataCentering"><h1>Add Test Solutions</h1></div>
										<div class="formFields">
											<div class="fieldInfo studentId">
												<span>Student ID:</span>
												<input type="number" placeholder="Enter Student ID" name="id" id="id">
												<div class="error"></div>
											</div>
											<div class="fieldInfo courseName">
												<span>Course Name:</span>
												<input type="text" placeholder="Enter Course Name" name="name" id="name">
												<div class="error"></div>
											</div>
											<div class="fieldInfo timetableSource">
												<span>Test Solution:</span>
												<input type="file" name="source" id="source">
												<div class="error"></div>
											</div>
										</div>
										<div class="submitButton">
											<div class="dataCentering"><input type="button" value="Add Test Solutions" onClick="ValidateAddTestSolutions()"></div>
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