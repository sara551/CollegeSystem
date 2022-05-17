<html>
	<?php session_start();?>
	<head>
		<title>Add Schedule</title>
		<link href="css/generalFormStyle.css" rel="stylesheet">
		<link href="css/addTestSolution.css" rel="stylesheet">
		<script src="js/validation.js"></script>
	</head>
	<body>
		<?php
			if($_SESSION['type'] == 'Admin'){
				include("adminRestPagesHeader.html");
				echo'
					<div class="pageContent">
						<form action="php/addSchedule.php" method="post" enctype="multipart/form-data" id="myForm">
							<div class="space">
								<div class="content">
									<div class="formData">
										<div class="dataCentering"><h1>Add Schedule</h1></div>
										<div class="formFields">
											<div class="fieldInfo studentId">
												<span>Student Id:</span>
												<input type="number" placeholder="Enter Student Id" name="id" id="id">
												<div class="error"></div>
											</div>
											<div class="fieldInfo scheduleLevel">
												<span>College Level:</span>
												<input type="number" placeholder="Enter Level of the Schedule" name="level" id="level">
												<div class="error"></div>
											</div>
											<div class="fieldInfo scheduleSource">
												<span>Schedule Image:</span>
												<input type="file" name="source" id="source">
												<div class="error"></div>
											</div>
										</div>
										<div class="submitButton">
											<div class="dataCentering"><input type="submit" value="Add Schedule" onClick="ValidateAddSchedule()"></div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				';
			include("footer.php");
			}
		else{
			header("location: proceed.php");
		}
		?>
		
	</body>
</html>