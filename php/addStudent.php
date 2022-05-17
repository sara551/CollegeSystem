<?php session_start();?>
<link href="../css/confirmationMsg.css" rel="stylesheet">
<script src="../js/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#confirmMsg").html('<div><div class="confirmPage"><div class="content"><div class="msg">Are You Sure you want to get back?</div><div class="position"><button class="yes"><a href="../addStudent.php">Yes</a></button><div class="space"></div><button class="no"><a href="#">no</a></button></div></div></div></div>');
	});
</script>
<?php
	if($_SESSION['type'] == 'Admin'){
		if(isset($_POST['name'])){
			include("../Classes/addStudentClass.php");
			$parameter = new addStudentClass();
			if($parameter->InsertToDatabase() == 1){
				echo"<script>alert('Student Added!!')</script>";
			}else {
				echo"<script>alert('Failed')</script>";
			}
			echo'<div id="confirmMsg"></div>';
		}
	}
	else{
		header("location: proceed.php");
	}
?>