
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/login.css">
</head>
<body>

	<div class="container">
		<h1>Login</h1>
		<?php
			session_start();
			if (isset($_SESSION['error_message'])) {
			echo '<p>' . $_SESSION['error_message'] . '</p>';
			unset($_SESSION['error_message']);
			}
			?>
		

		<form id="login-form" action="loginprocess.php" method="POST">
			<div class="form-group">
				<label for="emailphone">Email or Phone</label>
				<input type="text" id="emailphone" name="emailphone" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" id="password" name="password" required>
				<button type="button" id="toggle-password">Show</button>
			</div>
			<div class="form-group">
				<input type="checkbox" id="remember-me" name="remember-me">
				<label for="remember-me">Remember me</label>
			</div>
			<div class="form-group">
				<button type="submit">Login</button>
			</div>
			<p>Don't have an account? <a href="register.php">Register here</a></p>
		</form>
	</div>



	<script src="login.js"></script>
</body>
</html>




