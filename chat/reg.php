<!DOCTYPE html>
<html>
<head>
	<title>webchat</title>
	<link rel="stylesheet" type="text/css" href="reg.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="body">
	<div class="container">
		<div class="col-md-6 ">
			<h2 class="head">Register here</h2>
			<form action="signup.php" method="post">
				<div class="form-group">
				<label>username:</label><br>
				<input type="text" name="username" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Email:</label><br>
				<input type="text" name="Email" class="form-control" required>
			</div>
				<div class="form-group">
				<label>password:</label>
				<input type="password" name="password" class="form-control"  required>
				</div>
				<button class="btn btn-primary">register</button>
				<a href="index.php">click here to login</a>


			</form>
			
		</div>
		

	</div>

</body>
</html>