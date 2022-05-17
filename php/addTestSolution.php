<?php session_start();?>
<link href="../css/confirmationMsg.css" rel="stylesheet">
<script src="../js/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#confirmMsg").html('<div><div class="confirmPage"><div class="content"><div class="msg">Are You Sure you want to get back?</div><div class="position"><button class="yes"><a href="../addTestSolution.php">Yes</a></button><div class="space"></div><button class="no"><a href="#">no</a></button></div></div></div></div>');
	});
</script>
<?php
	include("../Classes/addTestSolutionClass.php");
	if($_SESSION['type'] == 'Admin'){
		if(isset($_POST['id'])){
			$parameter = new addTestSolutionClass();
			if($parameter->CheckConditions() == 1){
				echo"<script>alert('Test Solution saved')</script>";
			}
			else {
				echo"<script>alert('Test Solutions isn't saved!!')</script>";
			}
			
			echo'<div id="confirmMsg"></div>';
		}
	}
	else{
			header("location: proceed.php");
		}
?>