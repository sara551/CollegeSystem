<!DOCTYPE html>
<html>
	<?php 
		session_start();
		$id = $_SESSION['id'];
	?>
    <head>
		<link href="css/videoLinks.css" rel="stylesheet">
		<link href="css/studentHeaderPage.css" rel="stylesheet">
    </head>
    <body>
		<?php
			if($_SESSION['type'] == 'User'){
				echo'<div class="grey">
						<div class="title"><img class="icon" src="images/icons/video-player.png"> Videos</div>
						<div class="twoColumns">
							<div class="blue">
								<div class="curves">
									<div class="curve"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="whiteBox"></div>';
				include("studentNavBar.html");
				include("php/videoLinksView.php");
			}
			else{
				header('location: proceed.php');
			}
		?>
		
    </body>
</html>