<?php require_once 'inc/top.php';
?>
<link rel="stylesheet" href="css/login.css" type="text/css" />

</head>
<body>
<div class="container">
	<div class="row">
		<div class="login">
			<h4>Victor Admin Login Page</h4>
			<hr>
				<form class="" role="form">

					<input type="email" class="form-control" name="email" placeholder="Email Address">
					<hr>
					<input type="password" class="form-control" name="password" placeholder="Password">
					<hr>
					<span ><input type="checkbox" class="form-control" name="remember">Remember me</span>
					<hr>
					<button type="submit" name="submit" class="btn btn-success">Sign In</button>
				</form>
		</div>
	</div>

</div>
<?php require_once 'inc/footer.php';
?>
</body>
</html>