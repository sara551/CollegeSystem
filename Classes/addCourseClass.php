<?php
	include("textsInterface.php");
	class addCourseClass implements TextInterface{
		function InsertToDatabase(){
			$courseName = $_POST['name'];
			$courseTerm = $_POST['term'];
			$courseMajor = $_POST['major'];
			$courseLevel = $_POST['level'];
			$studentId = $_POST['id'];
			require_once("connection.php");
			$r = $con->query("INSERT INTO addcourse VALUES('','$studentId','$courseName','$courseTerm','$courseMajor','$courseLevel')");
			
			return $r;
		}
	}
	
?>