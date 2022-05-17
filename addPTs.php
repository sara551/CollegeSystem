<html>
	<?php session_start();?>
	<head>
		<title>Add PTs Marks</title>
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
						<form action="php/addPTs.php" method="post" enctype="multipart/form-data" id="myForm">
							<div class="space">
								<div class="content">
									<div class="formData">
										<div class="dataCentering"><h1>Add PTs Marks</h1></div>
										<div class="formFields">
											<div class="fieldInfo studentId">
												<span>Student ID:</span>
												<input type="number" placeholder="Enter Student ID" name="id" id="id">
												<div class="error"></div>
											</div>
											<div class="fieldInfo PT1Grade">
												<span>PT1 Grade:</span>
												<input type="number" placeholder="Enter PT1 Grade" name="pt1" id="mark1">
												<div class="error"></div>
											</div>
											<div class="fieldInfo PT2Grade">
												<span>PT2 Grade:</span>
												<input type="number" placeholder="Enter PT2 Grade" name="pt2" id="mark2">
												<div class="error"></div>
											</div>
										</div>
										<div class="submitButton">
											<div class="dataCentering"><input type="button" value="Add PT Marks" onClick="ValidateAddPTs()"></div>
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