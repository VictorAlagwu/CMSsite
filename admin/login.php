<?php require_once 'inc/top.php';
?>
<title>Login |Victor</title>
<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<script type="text/javascript" href="js/materialize.min.js"></script>
<link rel="stylesheet" href="css/login.css" type="text/css" />
	<meta charset="utf-8" view="viewport" content="width=device-width, initial scale=1.0" />
</head>
<body>
<div class="container">
<?php
$email = $_POST['email'];
$password =pass_hash($_POST['password']);
$ask_query="INSERT INTO "
if (!isset($_POST['submit'])) {

	?>
	<div class="row">
		<div class="login">
			<h4>Victor Admin Login Page</h4>
			<hr>
				<form class="col s12" role="form" method="POST"  action="">

					<input type="email" class="validate" name="email" placeholder="Enter Email Address" required>
					<input type="password" class="validate" name="password" placeholder="Password" required>
					<label class="checkbox-inline"><input type="checkbox"  name="remember">Remember me</label>
					<hr>
					<button type="submit" name="submit" class="btn btn-success">Sign In</button>
				</form>
		</div>
	</div>
<?php

} else {
	
	echo $email;
	echo $password;
}
?>
</div>
<?php require_once 'inc/footer.php';
?>
</body>
</html>