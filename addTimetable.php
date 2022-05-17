<html>
	<?php session_start();?>
	<head>
		<title>Add Timetable</title>
		<link href="css/generalFormStyle.css" rel="stylesheet">
		<link href="css/addSchedule.css" rel="stylesheet">
		<script src="js/validation.js"></script>
	</head>
	<body>
		<?php
			if($_SESSION['type'] == 'Admin'){
				include("adminRestPagesHeader.html");
				
				echo'<div class="pageContent">
					<form action="php/addTimetable.php" method="post" enctype="multipart/form-data" id="myForm">
						<div class="space">
							<div class="content">
								<div class="formData">
									<div class="dataCentering"><h1>Add Timetable</h1></div>
									<div class="formFields">
										<div class="fieldInfo studentId">
											<span>Student ID:</span>
											<input type="number" placeholder="Enter Student ID" name="id" id="id">
											<div class="error"></div>
										</div>
										<div class="fieldInfo timetableSource">
											<span>Timetable Image:</span>
											<input type="file" name="source" id="source">
											<div class="error"></div>
										</div>
									</div>
									<div class="submitButton">
										<div class="dataCentering"><input type="button" value="Add Timetable" onClick="ValidateAddTimetable()"></div>
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