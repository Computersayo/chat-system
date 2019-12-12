<!DOCTYPE html>
<html>
<head>
	<title>my webchat </title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="body">
	<div class="container">
		<div class="col-md-6">
		<h2 class="home">..online</h2>
		<div class="output">
		

		</div>
		<form action="send.php" method="post">
			<div class="form-group">
			<textarea class="form-control" name="msg">
			</textarea>
			</div>
			<button class="btn btn-primary">send</button><form action="logout.php">
			<button class="btn btn-primary logout">logout</button>
		</form>	
		</form>
		
		</div>
	</div>

</body>
</html>