<?php session_start();?>
<?php
	if(isset($_POST['email'])){
		$userEmail = $_POST['email'];
		$userPassword = $_POST['password'];
		$type = $_POST['type'];//admin or user

		require_once("connection.php");
		if($type == "User"){
			$r = $con->query("SELECT * FROM user WHERE email='$userEmail';");
			while($x = $r->fetch_array(MYSQLI_ASSOC)){
				if($x['password'] == $userPassword){
					$_SESSION['email'] = $userEmail;
					$_SESSION['id'] = $x['id'];
					$_SESSION['name'] = $x['name'];
					$_SESSION['major'] = $x['major'];
					$_SESSION['level'] = $x['level'];
					$_SESSION['type'] = $type;

					echo"<script>alert('Login Successfully')</script>";
					echo"<script>window.open('../studentHome.php','_self')</script>";//same as header
				}
				else{
					echo"<script>alert('User not Found Try to Check Your Email and Password')</script>";
				}
			}
		}
		else if($type == "Admin"){
			$r = $con->query("SELECT * FROM adminsemail WHERE email='$userEmail';");
			while($x = $r->fetch_array(MYSQLI_ASSOC)){
				if($x['password'] == $userPassword){
					$_SESSION['email'] = $x['email'];
					$_SESSION['type'] = $type;

					echo"<script>alert('Login Successfully')</script>";
					echo"<script>window.open('../adminHome.php','_self')</script>";
				}
				else{
					echo"<script>alert('Admin not Found Try to Check Your Email and Password')</script>";
				}
			}
		}
		else{
			echo"<script>window.location.href='../login.php';</script>";
		}
	}
?>