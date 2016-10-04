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
<?php
error_reporting(0);

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$query = "INSERT INTO contact (name,email,comment) VALUES ('$name','$email','$comment')";

if (!isset($_POST['submit'])) {
	echo "Not submitted";
	?>
			<div class="row">
				<h4 id="contactform">Contact Form</h4>
					<form class="form-size" role="form" action="" method="POST">
					<input type="hidden" name="id">
					<label for="name">Name:*</label>
						<input type="text" id="name" name="name" placeholder="Enter your name" class="form-control" required />
					<hr>
					<label for="email">Email:*</label>
						<input type="email" id="email" name="email" placeholder="Enter your email" class="form-control" required />

					<hr>
				 	<label for="comment">Comment:*</label>
  						<textarea class="form-control" rows="9" name="comment" id="comment" required>

  						</textarea>
					<hr>
					<button class="btn btn-default submit" type="submit" name="submit">Submit</button>
					</form>
			</div>

<!--@query for php contact form-->

	<?php

} else {
	$run_query = mysqli_query($con, $query);
}

?>
<!--Endof @query for contact page-->
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