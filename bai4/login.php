<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Login Bootstrap4</h2>
			</div>
			<div class="panel-body">
				<div class="form-group">
                <form method="POST" name="form1" action="login_a.php">
				  <label for="usr">Name:</label>
				  <input required="true" name="username" type="text" class="form-control" id="usr">
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input required="true" type="password" name="password" class="form-control" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
				</div>
				<button class="btn btn-success" type="submit" name="login" >Login</button>
                </form>
			</div>
		</div>
	</div>
</body>
</html>