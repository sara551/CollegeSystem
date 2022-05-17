<!DOCTYPE html>
<html>
	<?php 
		session_start();
		$id = $_SESSION['id'];
		$level = $_SESSION['level'];
	?>
    <head>
		<title>Schedule View</title>
		<link href="css/studentHeaderPage.css" rel="stylesheet">
		<link href="css/scheduleView.css" rel="stylesheet">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/jquery-3.6.0.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/timeTable.js"></script>
    </head>
    <body>
        <?php
			if($_SESSION['type'] == 'User'){
				echo"
					<div class=\"grey\">
						<div class=\"title\">
							<img class=\"icon\" src=\"images/icons/schedule.png\"> Schedule</div>
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
				require_once("connection.php");
				$a = $con->query("SELECT * FROM addschedule WHERE studentid='$id' AND level='$level'");

				if($a){
					while($x = $a->fetch_array(MYSQLI_ASSOC)){
						echo"<div class=\"space\">
								<div class=\"schedule\">
									<div class=\"imagePlace\">
										<img src=".'images/schedule/'.$x['image']." width=\"100%\" height=\"100%\" id=\"image\">
									</div>
								</div>
							</div>";
					}
				}
				echo'<div class="buttonsDiv">
						<div class="buttons">
							<div class="buttonSpace"  id="zoomIn"><input type="button" value="Zoom In"></div>
							<div class="buttonSpace" id="zoomOut"><input type="button" value="Zoom Out"></div>
						</div>
					</div>';
			}
			else{
				header('location: proceed.php');
			}
		?>
    </body>
</html>