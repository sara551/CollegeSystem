<?php
	include("classInterface.php");
	class addScheduleClass implements Images{
		function checkImageSize(){
			$ok = true;
			if( ("../images/schedule/".$_FILES['source']['size'] > 10*1000*1000) ){
				$ok = false;
				echo"<script>alert('Image size is very large!!')</script>";
			}
			return $ok;
		}

		function CheckExistBooklet(){
			$ok = true;
			if( (file_exists("../images/schedule/".$_FILES['source']['name'])) ){
				$ok = false;
				echo"<script>alert('Image already exists!!')</script>";
			}
			return $ok;
		}
		
		function InsertToDatabase(){
			$scheduleLevel = $_POST['level'];
			$studentId = $_POST['id'];
			
			move_uploaded_file($_FILES['source']['tmp_name'],"../images/schedule/".$_FILES['source']['name']);
			$file = $_FILES['source']['name'];
			require_once("connection.php");
			$r = $con->query("INSERT INTO addschedule VALUES('','$studentId','$scheduleLevel','$file')");
			
			return $r;
		}

		function CheckConditions(){
			$alertCondition = 0;
			if( $this->checkImageSize() == true && $this->CheckExistBooklet() == true){
				$alertCondition = $this->InsertToDatabase();
			}
			return $alertCondition;
		}
		
	}
?>