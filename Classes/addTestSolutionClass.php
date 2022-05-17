<?php
	include("classInterface.php");
	class addTestSolutionClass implements Images{
		function checkImageSize(){
			$ok = true;
			if( ($_FILES['source']['size']>10*1000*1000) ){
				$ok = false;
				echo"<script>alert('File size is very large!!')</script>";
			}
			return $ok;
		}

		function CheckExistBooklet(){
			$ok = true;
			if( (file_exists("../images/testSolutions/".$_FILES['source']['name'])) ){
				$ok = false;
				echo"<script>alert('File already exists!!')</script>";
			}
			return $ok;
		}
		
		function InsertToDatabase(){
			$studentId = $_POST['id'];
			$courseName = $_POST['name'];

			move_uploaded_file($_FILES['source']['tmp_name'],"../images/testSolutions/".$_FILES['source']['name']);
			$file = $_FILES['source']['name'];
			require_once("connection.php");
			$r = $con->query("INSERT INTO testsolutions VALUES('','$studentId','$courseName','$file')");

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