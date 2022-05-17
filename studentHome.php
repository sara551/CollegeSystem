<?php
	session_start();
	$email = $_SESSION['email'];
	$name = $_SESSION['name'];
	$id = $_SESSION['id'];
	$major = $_SESSION['major'];
	$level = $_SESSION['level'];
?>
<html>
	<head>
		<title>Home Page</title>
		<link href="css/adminHome.css" rel="stylesheet">
		<script src="js/jquery-3.6.0.js"></script>
		<script src="js/jquery.min.js"></script>	
		<script src="js/adminHome.js"></script>
		<style>
			.elementSpace .functionElement img{
				margin: 0 11%;
			}
		</style>
	</head>
	<body>
		<?php
			if($_SESSION['type'] == 'User'){
				include("studentHeader.html");
				
				echo'<div class="slider">
						<img src="images\slider\image1.jpg" height="100%" width="100%" id="imageSource">
					</div>	
					<div class="studentFunctions">
						<div class="title">Student Functions:</div>
						<div class="firstRow">
							<div class="elementSpace">
								<div class="functionElement" id="card1" onmouseout="Card(this.id)">
									<img src="images\studentFunctions\timeTable.png" width="80%" height="75%">
									<button onClick="directToPage(\'timeTableView.php\')"><a href="timeTableView.php">View Timetable</a></button>
								</div>
							</div>
							<div class="elementSpace">
								<div class="functionElement" id="card2" onmouseout="Card(this.id)">
									<img src="images\studentFunctions/schedule.png" width="80%" height="75%">
									<button onClick="directToPage(\'scheduleView.php\')"><a href="scheduleView.php">View Schedule</a></button>
								</div>
							</div>
							<div class="elementSpace">
								<div class="functionElement" id="card3" onmouseout="Card(this.id)">
									<img src="images/studentFunctions/booklet.png" width="80%" height="75%" height="75%">
									<button onClick="directToPage(\'bookletView.php\')"><a href="bookletView.php">View Booklet</a></button>
								</div>
							</div>
						</div>
						<div class="secondRow">
							<div class="elementSpace">
								<div class="functionElement" id="card4" onmouseout="Card(this.id)">
									<img src="images\studentFunctions/video.png" width="80%" height="75%">
									<button onClick="directToPage(\'videoLinksView.php\')"><a href="videoLinksView.php">View Video</a></button>
								</div>
							</div>
							<div class="elementSpace">
								<div class="functionElement" id="card5" onmouseout="Card(this.id)">
									<img src="images\studentFunctions/Marks.png" width="80%" height="75%">
									<button onClick="directToPage(\'weeklyMarksView.php\')"><a href="weeklyMarksView.php">View Weekly Marks</a></button>
								</div>
							</div>
							<div class="elementSpace">
								<div class="functionElement" id="card6" onmouseout="Card(this.id)">
									<img src="images\studentFunctions/test.png" width="80%" height="75%">
									<button onClick="directToPage(\'testSolutionView.php\')"><a href="testSolutionView.php">View Test Solution</a></button>
								</div>
							</div>
						</div>
						<div class="thirdRow">

							<div class="elementSpace">
								<div class="functionElement" id="card7" onmouseout="Card(this.id)">
									<img src="images\studentFunctions/pt1pt2.png" width="80%" height="75%">
									<button onClick="directToPage(\'PTsView.php\')"><a href="PTsView.php">view PT1 - PT2</a></button>
								</div>
							</div>
						</div>
					</div>';
				include("footer.php");
			}
			else{
				header('location: proceed.php');
			}
		?>
	</body>
</html>