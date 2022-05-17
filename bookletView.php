<?php 
	session_start();
	$id = $_SESSION['id'];
?>
<html>
    <head>
		<title>Booklet View</title>
		<link href="css/studentHeaderPage.css" rel="stylesheet">
		<link href="css/bookletView.css" rel="stylesheet">
    </head>
    <body>
        <?php 
			if($_SESSION['type'] == 'User'){
				echo"<div class=\"grey\">
						<div class=\"title\"><img class=\"icon\" src=\"images/icons/booklet.png\"> Booklet</div>
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
				include("studentNavbar.html");
				include("php/bookletView.php");
			}
			else{
				header('location: proceed.php');
			}
		?>
		
    </body>
</html>