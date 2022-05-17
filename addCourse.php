<html>
	<?php session_start();?>
	<head>
		<title>Add Course Page</title>
		<link href="css/generalFormStyle.css" rel="stylesheet">
		<link href="css/addCourse.css" rel="stylesheet">
		<script src="js/validation.js"></script>
	</head>
	<body>
		<?php
			if($_SESSION['type'] == 'Admin'){
				include("adminRestPagesHeader.html");
				
				echo"
				<div class=\"pageContent\">
					<form action=\"php/addCourse.php\" method=\"post\" enctype=\"multipart/form-data\" id=\"myForm\">
						<div class=\"space\">
							<div class=\"content\">
								<div class=\"formData\">
									<div class=\"dataCentering\"><h1>Add Course</h1></div>
									<div class=\"formFields\">
										<div class=\"fieldInfo studentid\">
											<span>Student ID:</span>
											<input type=\"text\" placeholder=\"Enter Student ID\" name=\"id\" id=\"id\">
											<div class=\"error\"></div>
										</div>
										<div class=\"fieldInfo courseName\">
											<span>Course Name:</span>
											<input type=\"text\" placeholder=\"Enter Course Name\" name=\"name\" id=\"name\">
											<div class=\"error\"></div>
										</div>
										<div class=\"fieldInfo courseTerm\">
											<span>Course Term:</span>
											<input type=\"number\" placeholder=\"Enter Course Term\" name=\"term\" id=\"term\">
											<div class=\"error\"></div>
										</div>
										<div class=\"fieldInfo courseMajor\">
											<span>Course Major:</span>
											<input type=\"text\" placeholder=\"Enter Course Major\" name=\"major\" id=\"major\">
											<div class=\"error\"></div>
										</div>
										<div class=\"fieldInfo courseLevel\">
											<span>Course Level:</span>
											<input type=\"text\" placeholder=\"Enter Course Level\" name=\"level\" id=\"level\">
											<div class=\"error\"></div>
										</div>
									</div>
									<div class=\"submitButton\">
										<div class=\"dataCentering\"><input type=\"button\" value=\"Add Course\" onClick=\"ValidateAddCourse()\"></div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>";
				include("footer.php");
			}
			else{
				header('location: proceed.php');
			}
		?>
	</body>
</html>