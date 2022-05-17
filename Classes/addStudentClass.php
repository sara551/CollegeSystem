<?php
	include("textsInterface.php");
	class addStudentClass implements TextInterface{
		function InsertToDatabase(){
			$studentId = $_POST['id'];
			$studentName = $_POST['name'];
			$studentMajor = $_POST['major'];
			$studentLevel = $_POST['level'];
			$studentAddress = $_POST['address'];
			$studentMail = $_POST['email'];
			$studentPassword = $_POST['password'];

			require_once("connection.php");
			$r = $con->query("INSERT INTO user VALUES('$studentId','$studentName','$studentMajor','$studentLevel','$studentAddress','$studentMail','$studentPassword')");
			
			return $r;
		}
	}
	
?>