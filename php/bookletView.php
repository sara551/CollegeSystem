<?php
	require_once("connection.php");
	$r = $con->query("SELECT * FROM addbooklet WHERE studentid = '$id'");
	echo"<div class=\"container BookletsConatiner\">
			<div class=\"row1\">";
	if($r){
		while($x = $r->fetch_array(MYSQLI_ASSOC)){
			echo"<div class=\"pdfData booklet\">
					<iframe src=".'images/booklets/'.$x['source']." width=\"500px\" height=\"300px\">
					</iframe>
					<a class=\"downloadLink\" href=".'images/booklets/'.$x['source']." >Download Pdf</a>
				</div>";
		}
		echo"</div></div>";
	}
?>