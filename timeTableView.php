<!DOCTYPE html>
<html>
	<?php
		session_start();
		$id = $_SESSION['id'];
	?>
    <head>
		<title>TimeTable</title>
		<link href="css/timeTable.css" rel="stylesheet"/>
		<link href="css/studentHeaderPage.css" rel="stylesheet">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/jquery-3.6.0.js"></script>
		<script src="js/jquery.min.js"></script>
    </head>
    <body>
		<?php
			if($_SESSION['type'] == 'User'){
				echo"
					<div class=\"grey\">
						<div class=\"title\">
							<img class=\"icon\" src=\"images/icons/timetable.png\"> TimeTable</div>
						<div class=\"twoColumns\">
							<div class=\"blue\">
								<div class=\"curves\">
									<div class=\"curve\"></div>
								</div>
							</div>
						</div>
					</div>
					<div class=\"whiteBox\"></div>
				";
				include("studentNavBar.html");
				include("php/timetableView.php");
				
			}
			else{
				header('location: proceed.php');
			}
		?>
    </body>
</html>