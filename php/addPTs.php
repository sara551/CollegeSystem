<?php session_start();?>
<link href="../css/confirmationMsg.css" rel="stylesheet">
<script src="../js/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#confirmMsg").html('<div><div class="confirmPage"><div class="content"><div class="msg">Are You Sure you want to get back?</div><div class="position"><button class="yes"><a href="../addPTs.php">Yes</a></button><div class="space"></div><button class="no"><a href="#">no</a></button></div></div></div></div>');
	});
</script>
<?php
	if($_SESSION['type'] == 'Admin'){
		if(isset($_POST['id'])){
			include("../Classes/addPTsClass.php");
			$parameter = new addPTsClass();
			if($parameter->InsertToDatabase() == 1){
				echo"<script>alert('Subjects marks added successfully')</script>";
			}
			else{
				echo"<script>alert('Marks is not added')</script>";
			}
			echo'<div id="confirmMsg"></div>';
		}
	}

	else{
		header("location: proceed.php");
	}
?>