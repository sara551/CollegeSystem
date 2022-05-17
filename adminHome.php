<html>
	<?php session_start()?>
	<head>
		<title>Home Page</title>
		<link href="css/adminHome.css" rel="stylesheet">
		<script src="js/jquery-3.6.0.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/adminHome.js"></script>
	</head>
	<body>
		<?php
			if($_SESSION['type'] == 'Admin'){
				include("adminHomeHeader.html");
				echo"
					<div class=\"slider\">
						<img src=\"images/slider/image1.jpg\" height=\"100%\" width=\"100%\" id=\"imageSource\">
					</div>
					<div class=\"adminFunctions\">
						<div class=\"title\">Admin Functions:</div>
						<div class=\"firstRow\">
							<div class=\"elementSpace\">
								<div class=\"functionElement\" id=\"card1\" onmouseout=\"Card(this.id)\">
									<img src=\"images/adminFunctions/addStudent.jpg\" width=\"100%\" height=\"75%\">
									<button onClick=\"directToPage('addStudent.php')\"><a href=\"addStudent.php\">Add Student</a></button>
								</div>
							</div>
							<div class=\"elementSpace\">
								<div class=\"functionElement\" id=\"card2\" onmouseout=\"Card(this.id)\">
									<img src=\"images/adminFunctions/addCourse.jpg\" width=\"100%\" height=\"75%\">
									<button onClick=\"directToPage('addCourse.php')\"><a href=\"addCourse.php\">Add Course</a></button>
								</div>
							</div>
							<div class=\"elementSpace\">
								<div class=\"functionElement\" id=\"card3\" onmouseout=\"Card(this.id)\">
									<img src=\"images/adminFunctions/addBooklet.jpg\" width=\"100%\" height=\"75%\">
									<button onClick=\"directToPage('addBooklet.php')\"><a href=\"addBooklet.php\">Add Booklet</a></button>
								</div>
							</div>
						</div>
						<div class=\"secondRow\">
							<div class=\"elementSpace\">
								<div class=\"functionElement\" id=\"card4\" onmouseout=\"Card(this.id)\">
									<img src=\"images/adminFunctions/addSchedule.jpg\" width=\"100%\" height=\"75%\">
									<button onClick=\"directToPage('addSchedule.php')\"><a href=\"addSchedule.php\">Add Schedule</a></button>
								</div>
							</div>
							<div class=\"elementSpace\">
								<div class=\"functionElement\" id=\"card5\" onmouseout=\"Card(this.id)\">
									<img src=\"images/adminFunctions/addTimetable.jpg\" width=\"100%\" height=\"75%\">
									<button onClick=\"directToPage('addTimetable.php')\"><a href=\"addTimetable.php\">Add Timetable</a></button>
								</div>
							</div>
							<div class=\"elementSpace\">
								<div class=\"functionElement\" id=\"card6\" onmouseout=\"Card(this.id)\">
									<img src=\"images/adminFunctions/addVideo.jpg\" width=\"80%\" height=\"75%\" style=\"margin: 0px 10%\">
									<button onClick=\"directToPage('addVideo.php')\"><a href=\"addVideo.php\">Add Video</a></button>
								</div>

							</div>
						</div>
						<div class=\"thirdRow\">
							<div class=\"elementSpace\">
								<div class=\"functionElement\" id=\"card7\" onmouseout=\"Card(this.id)\">
									<img src=\"images/adminFunctions/addTestSolutions.jpg\" width=\"80%\" height=\"75%\" style=\"margin: 0px 10%\">
									<button onClick=\"directToPage('addTestSolution.php')\"><a href=\"addTestSolution.php\">Add Test Solution</a></button>
								</div>
							</div>
							<div class=\"elementSpace\">
								<div class=\"functionElement\" id=\"card8\" onmouseout=\"Card(this.id)\">
									<img src=\"images/adminFunctions/addWeeklyMark.jpg\" width=\"100%\" height=\"75%\">
									<button onClick=\"directToPage('addWeeklyMarks.php')\"><a href=\"addWeeklyMarks.php\">Add Weekly Marks</a></button>
								</div>
							</div>
							<div class=\"elementSpace\">
								<div class=\"functionElement\" id=\"card9\" onmouseout=\"Card(this.id)\">
									<img src=\"images/adminFunctions/addPT.jpg\" width=\"80%\" height=\"75%\" style=\"margin: 0px 10%\">
									<button onClick=\"directToPage('addPTs.php')\"><a href=\"addPTs.php\">Add PT1 &amp; PT2</a></button>
								</div>
							</div>
						</div>
					</div>";
					include("footer.php");
				}
			else{
				header('location: proceed.php');
			}
		?>
	</body>
</html>