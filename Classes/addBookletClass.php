<?php
	include("classInterface.php");
	class addBookletClass implements Images{
		function checkImageSize(){
			$ok = true;
			if(("../images/booklets/".$_FILES['source']['size']>10*1000*1000) ){
				$ok = false;
				echo"<script>alert('Booklet file size is very large!!')</script>";
			}
			return $ok;
		}

		function CheckExistBooklet(){
			$ok = true;
			if((file_exists("../images/booklets/".$_FILES['source']['name']))){
				$ok = false;
				echo"<script>alert('Booklet file already exists!!')</script>";
			}
			return $ok;
		}
		
		function InsertToDatabase(){
			$studentId = $_POST['id'];
			$bookletName = $_POST['name'];
			$bookletCourse = $_POST['bCourse'];
			$image = $_FILES['source']['size'];

			move_uploaded_file($_FILES['source']['tmp_name'],"../images/booklets/".$_FILES['source']['name']);
			$file = $_FILES['source']['name'];	
			require_once("connection.php");
			$r = $con->query("INSERT INTO addbooklet VALUES('','$studentId','$bookletName','$bookletCourse','$file')");
			
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