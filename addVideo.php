<html>
	<?php session_start();?>
	<head>
		<title>Add Video</title>
		<link href="css/generalFormStyle.css" rel="stylesheet">
		<link href="css/addSchedule.css" rel="stylesheet">
		<script src="js/validation.js"></script>
	</head>
	<body>
		<?php
			if($_SESSION['type'] == 'Admin'){
				include("adminRestPagesHeader.html");
				
				echo'<div class="pageContent">
						<form action="php/addVideo.php" method="post" enctype="multipart/form-data" id="myForm">
							<div class="space">
								<div class="content">
									<div class="formData">
										<div class="dataCentering"><h1>Add Video</h1></div>
										<div class="formFields">
											<div class="fieldInfo courseId">
												<span>Student ID:</span>
												<input type="number" placeholder="Enter Student ID" name="id" id="id">
												<div class="error"></div>
											</div>
											<div class="fieldInfo CourseName">
												<span>Video URL:</span>
												<input type="text" placeholder="Enter Video URL" name="url" id="url">
												<div class="error"></div>
											</div>
										</div>
										<div class="submitButton">
											<div class="dataCentering"><input type="button" value="Add Video" onClick="ValidateAddVideo()"></div>
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