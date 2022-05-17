<?php
	require_once("connection.php");
	$r = $con->query("SELECT * FROM testsolutions WHERE studentid = '$id'");

	echo"<div class=\"container testsConatiner\">
			<div class=\"row1\">";
	if($r){
		while($x = $r->fetch_array(MYSQLI_ASSOC)){
			echo"<div class=\"pdfData test\">
					<iframe src=".'images/testSolutions/'.$x['file'].">
					</iframe>
					<a class=\"downloadLink\" href=".'images/testSolutions/'.$x['file']." >Download Pdf</a>
				</div>";
		}
		echo"</div></div>";
	}
?>