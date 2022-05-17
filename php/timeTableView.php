<?

$id = $_SESSION['id']?>
<script>
	$(document).ready(function(){
	var pageWidth = $(document).width();
	$(".space").css("margin-left",((pageWidth*0.24)/2));
	$("#zoomIn").click(function(){
		var imageWidth = $("#image").width();
		var imageHeight = $("#image").height();
		var imageDivWidth = $(".schedule").width();
		var imageDivHeight = $(".schedule").height();

		$(".schedule").width(imageDivWidth * 1.2);
		$(".schedule").height(imageDivHeight * 1.2);
		$("#image").width(imageWidth * 1.2);
		$("#image").height(imageHeight * 1.2);
	});
	
	$("#zoomOut").click(function(){
		
		var imageDivWidth = $(".schedule").width();
		var imageDivHeight = $(".schedule").height();
		var imageWidth = $("#image").width();
		var imageHeight = $("#image").height();
		
		$(".schedule").css("margin-left","auto");
		$(".schedule").css("margin-right","auto");
		$(".schedule").width(imageDivWidth / 1.2);
		$(".schedule").height(imageDivHeight / 1.2);
		$("#image").width(imageWidth / 1.2);
		$("#image").height(imageHeight / 1.2);
	});
});
</script>
<?php
	require_once("connection.php");
	$a = $con->query("SELECT * FROM timetable WHERE id='$id'");

	if($a){
		while($x = $a->fetch_array(MYSQLI_ASSOC)){
			echo"
				<div class=\"space\">
					<div class=\"timetable\">
						<div class=\"imagePlace\">
							<img src=".'images/timetable/'.$x['image']." width=\"100%\" height=\"100%\" id=\"image\">
						</div>
					</div>
				</div>";
		}
		echo'<div class="buttonsDiv">
				<div class="buttons">
					<div class="buttonSpace"  id="zoomIn"><input type="button" value="Zoom In"></div>
					<div class="buttonSpace" id="zoomOut"><input type="button" value="Zoom Out"></div>
				</div>
			</div>';
	}
?>