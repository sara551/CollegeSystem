<!DOCTYPE html>
<html>
	<?php 
		session_start();
		$id = $_SESSION['id'];
	?>
	<head>
		<link href="css/studentHeaderPage.css" rel="stylesheet">
		<link href="css/weeklyMarksView.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    </head>
    <body>
       	<?php
			if($_SESSION['type'] == 'User'){
				echo"<div class=\"grey\">
						<div class=\"title\"><img class=\"icon\" src=\"images/icons/marks.png\"> Weekly Marks</div>
							<div class=\"twoColumns\">
								<div class=\"blue\">
									<div class=\"curves\">
										<div class=\"curve\">

										</div>
									</div>
								</div>
							</div>
						</div>
					<div class=\"whiteBox\"></div>
				";
				include("studentNavbar.html");
				
				echo"<p class=\"tableText\">Table Of Student Marks</p>";
				echo'<table class="marksTable">
						<tr>
							<th>Week</th>
							<th>Number Of Subjects</th>
							<th>Mark Out Of 25</th>
						</tr>
						<tr>
							<td>1</td>
							<td>3</td>
							<td>25</td>
						</tr>
						<tr>
							<td>2</td>
							<td>4</td>
							<td>20</td>
						</tr>
						<tr>
							<td>3</td>
							<td>2</td>
							<td>15</td>
						</tr>
					</table>
					<div class="chartcontainer">
						<p class="chartText"> Bar Chart Of Weekly Marks</p>
						<canvas id="barChart" style="width:100%;max-width:600px"></canvas>
					</div>';
			}
			else{
				header('location: proceed.php');
			}
		?>
		
	<script type="text/javascript">
	var xValues = ["week1", "week2", "week3"];
	var yValues = [25, 20, 15];
	var barColors = ["red", "green","blue","orange","brown"];

	new Chart("barChart", {
  		type: "bar",
  		data: {
    	labels: xValues,
    	datasets: [{
      	backgroundColor: barColors,
      	data: yValues
    }]
  },
  		options: {
    	legend: {display: false},
    	title: {
      	display: true,
      	text: "student grades"
    }
  }
});
	</script>
    </body>
</html>