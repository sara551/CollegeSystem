<?php
	include("textsInterface.php");
	class addVideoClass implements TextInterface{
		function InsertToDatabase(){
			$studentId = $_POST['id'];
			$url = $_POST['url'];
			$split = explode("=",$url);//https://www.youtube.com/embed/
			$split = "https://www.youtube.com/embed/".$split[1];
			
			require_once("connection.php");
			$r = $con->query("INSERT INTO videos VALUES('','$studentId','$split')");
			
			return $r;
		}
	}
	
?>