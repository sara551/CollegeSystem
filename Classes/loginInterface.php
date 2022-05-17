<?php
	interface Login{
		function CheckUserLogin();
		function CheckAdminLogin();
		function SendUserData();
		function SendAdminData();
	}
?>