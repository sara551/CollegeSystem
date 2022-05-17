<html>
	<?php session_start();?>
	<head>
		<title>Login</title>
		<link href="css/generalFormStyle.css" rel="stylesheet">
		<link href="css/login.css" rel="stylesheet">
		<script src="js/jquery-3.6.0.js"></script>
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/pageHeader.js"></script>
		<script src="js/validation.js"></script>
	</head>
	<body>
		<?php include("loginHeader.html")?>
		
		<div class="pageContent">
			<form action="php/login.php" method="post" enctype="multipart/form-data" id="myForm">
				<div class="space">
					<div class="content">
						<div class="formData">
							<div class="dataCentering"><h1>Login</h1></div>
							<div class="formFields">
								<div class="fieldInfo userEmail">
									<span>User Type:</span>
									<select name="type">
										<option>Admin</option>
										<option>User</option>
									</select>
								</div>
								<div class="fieldInfo userEmail">
									<span>User Email:</span>
									<input type="text" placeholder="Enter Your Email" name="email" id="mail">
									<div class="error" id="validate_email"></div>
								</div>
								<div class="fieldInfo userPassword">
									<span>User Password:</span>
									<input type="password" placeholder="Enter Your Password" name="password" id="password">
									<div class="error" id="validate_pass"></div>
								</div>
							</div>
							<div class="submitButton">
								<div class="dataCentering"><input type="button" value="Login" onClick="ValidateLoginForm()"></div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<?php include("footer.php")?>
	</body>
</html>