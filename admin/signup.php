<?php require_once 'inc/top.php';
?>
<title>Sign Up|Victor</title>
<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<script type="text/javascript" href="js/materialize.min.js"></script>
<link rel="stylesheet" href="css/signup.css" type="text/css" />
	<meta charset="utf-8" view="viewport" content="width=device-width, initial scale=1.0" />
	<title>Victor | Sign-Up</title>
</head>
<body>
<div class="container signup">
	<div class="row">
		<div class="col s12 m6 l6">
			<form class="col s12" role="form">
			<div class="row">
				<div class="col s12 m6 l6">
					<input type="text" name="f_name" required="required" class="validate" placeholder="First Name"/>
				</div>
				<div class="col s12 m6 l6">
					<input type="text" name="l_name" required="required" class="validate" placeholder="Last Name"/>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<input type="email" name="email" class="validate" placeholder="Email">
				</div>
			</div>
			<div class="row">
				<div class="col s12 m6 l6">
					<input type="password" name="password" required="required" class="validate" placeholder="Password"/>
				</div>
				<div class="col s12 m6 l6">
					<input type="password" name="password" required="required" class="validate" placeholder="Re-Enter Password"/>
				</div>
			</div>
			<div class="row">
				<div class="col s12 input-field">
					<select multiple>
						<option value="1" name ="male">Male</option>
						<option value="2" name ="female">Female</option>
					</select>
				</div>
			</div>
			</form>
		</div>
		<div class="col s12 m6 l6">
			<div class="row"><h5>Sign-Up via Facebook,Google and Twitter</h5>
			<hr>
			Sign-up with facebook
			<hr>
			Sign-up with Google
			<hr>
			Sign-up with Twitter
			</div>

		</div>
	</div>

</div>
</body>
</html>