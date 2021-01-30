<html>
<head>
	   <title>Регистрация</title>
	   <link rel="stylesheet" type="text/css" href="style.css">
	   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>

<body>

	<div class="container">
	<div class="login-box">
	<div class="row">
		<div class="col-md-6 login-left">
		<h2> Login here </h2>
		<form action="validation.php" method="post">
			<div class="form-group">
				<label>UserName</label>
				<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<button type="submit" class="brn btp-primary">Login</button>
		</form>
	</div>
	   <div class="col-md-6 login-right">
		<h2>Register here </h2>
		<form action="validation.php" method="post">
			<div class="form-group">
				<label>UserName</label>
				<input type="text" name="user" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
