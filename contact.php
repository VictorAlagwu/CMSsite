<?php require_once 'inc/top.php';?>
</head>
<body>
<?php require_once 'inc/navbar.php';?>
<hr>
<hr>
<section>
<div class="container">
	<div class="row">
		<div class="col-xs-8">
			<div class="row">
			<h4 id="contactform">Contact Form</h4>
				<form class="form-size" role="form">
				<label for="name">Name:*</label>
					<input type="text" id="name" name="name" placeholder="Enter your name" class="form-control">
					<hr>
				<label for="email">Email:*</label>
					<input type="enail" id="email" name="email" placeholder="Enter your email" class="form-control">
					<hr>
				 <label for="comment">Comment:*</label>
  					<textarea class="form-control" rows="9" id="comment">
  					</textarea>
					<hr>
					<button class="btn btn-default" type="submit" name="submit" id="submit">Submit</button>
				</form>
			</div>
		</div>

		<div class="col-xs-4">
		<?php require_once 'inc/rightside.php'
?>
				<!--Ending of social icon-->
				</div>

		<!--SS-->
	</div>
</div>
</section>
<?php require_once 'inc/footer.php';
?>

	<script src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>