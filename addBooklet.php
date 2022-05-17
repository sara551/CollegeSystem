<html>
	<?php session_start();?>
	<head>
		<title>Add Booklet</title>
		<link href="css/generalFormStyle.css" rel="stylesheet">
		<link href="css/addBooklet.css" rel="stylesheet">
		<script src="js/validation.js"></script>
		<script>
			
		</script>
	</head>
	<body>
		<?php include("adminRestPagesHeader.html")?>
		<?php 
			if($_SESSION['type'] == 'Admin'){
				echo'<div class="pageContent">
						<form action="php/addBooklet.php" method="post" enctype="multipart/form-data" id="myForm">
							<div class="space">
								<div class="content">
									<div class="formData">
										<div class="dataCentering"><h1>Add Booklet</h1></div>
										<div class="formFields">
											<div class="fieldInfo studentId">
												<span>Student Id:</span>
												<input type="text" placeholder="Enter Student ID" name="id" id="id">
												<div class="error"></div>
											</div>
											<div class="fieldInfo bookletName">
												<span>Booklet Name:</span>
												<input type="text" placeholder="Enter Booklet Name" name="name" id="name">
												<div class="error"></div>
											</div>
											<div class="fieldInfo bookletCourse">
												<span>Booklet Course:</span>
												<input type="text" placeholder="Enter Booklet Course" name="bCourse" id="bCourse">
												<div class="error"></div>
											</div>
											<div class="fieldInfo bookletSrc">
												<span>Booklet Source:</span>
												<input type="file" name="source">
												<div class="error"></div>
											</div>
										</div>
										<div class="submitButton">
											<div class="dataCentering"><input type="button" value="Add Booklet" onClick="ValidateAddBooklet()"></div>
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