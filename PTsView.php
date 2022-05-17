<!DOCTYPE html>
<html>
	<?php 
		session_start();
		$id = $_SESSION['id'];
	?>
	<head>
		<link href="css/studentHeaderPage.css" rel="stylesheet">
		<link href="css/PTsView.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    </head>
    <body>
		<?php
			if($_SESSION['type'] == 'User'){
				echo"<div class=\"grey\">
						<div class=\"title\"><img class=\"icon\" src=\"images/icons/pie-chart.png\">PT1 &amp; PT2</div>
						<div class=\"twoColumns\">
							<div class=\"blue\">
								<div class=\"curves\">
									<div class=\"curve\">

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class=\"whiteBox\"></div>";
				include("studentNavbar.html");
				
				echo"
				<div class=\"chartContainer\">
						<p class=\"pieText\">Pie Chart</p>
						<canvas id=\"pieChart\" style=\"width:100%;max-width:600px\"></canvas>
					</div>";
				require_once("connection.php");
				
				$r = $con->query("SELECT * FROM pts WHERE studentid = '$id'");
				if($r){
					while($x = $r->fetch_array(MYSQLI_ASSOC)){
						$pt1 = $x['pt1grade'];
						$pt2 = $x['pt2grade'];
					}
					echo"<script>
							var xValues = [\"Pt1\", \"Pt2\"];
							var yValues = [".$pt1.",".$pt2."];
							var barColors = ['#b91d47','#00aba9'];

							new Chart(\"pieChart\", {
							  type: \"pie\",
							  data: {
								labels: xValues,
								datasets: [{
								  backgroundColor: barColors,
								  data: yValues
								}]
							  },
							  options: {
								title: {
								  display: true,
								  text: \"Pt1 and Pt2 Marks\"
								}
							  }
							});

						</script>";
				}
			}
			else{
				header('location: proceed.php');
			}
		?>
    </body>
</html>