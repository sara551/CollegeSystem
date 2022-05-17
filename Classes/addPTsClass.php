<?php
	include("textsInterface.php");
	class addPTsClass implements TextInterface{
		function InsertToDatabase(){
			$studentId = $_POST['id'];
			$pt1Grade = $_POST['pt1'];
			$pt2Grade = $_POST['pt2'];

			require_once("connection.php");
			$r = $con->query("INSERT INTO pts VALUES('','$studentId','$pt1Grade','$pt2Grade')");
			
			return $r;
		}
	}
?>