<!DOCTYPE html>
<html>
<head>
	<title>webchat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="body">
	<div class="container">
		<div class="col-md-6 ">
			<h2>login here</h2>
			<form action="login.php" method="post">
				<div class="form-group">
				<label>username:</label><br>
				<input type="text" name="username" class="form-control" required>
			</div>
				<div class="form-group">
				<label>password:</label>
				<input type="password" name="password" class="form-control"  required>
				</div>
				<button class="btn btn-primary">login</button>
				<a href="reg.php">click here to register</a>
			</form>
			
		</div>
		

	</div>

</body>
</html>