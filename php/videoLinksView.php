<?php 
	$id = $_SESSION['id'];
?>
<?php
	echo"<div class=\"VideosConatiner\">
			<div class=\"row1\">";
	require_once("connection.php");
	$r = $con->query("SELECT * FROM videos WHERE studentid = '$id' ");

	if($r){
		while($x = $r->fetch_array(MYSQLI_ASSOC)){
			echo"<iframe width=\"420\" height=\"315\" src=".$x['url']."></iframe><div class=\"frameSpace\"></div>";
		}
	}
	echo"</div></div>";
?>