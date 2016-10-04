<?php require_once 'inc/top.php';
include 'inc/db.php';
?>
<title>Add Post |Victor</title>
<link rel="stylesheet" type="text/css" href="css/categories.css">
<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<script type="text/javascript" href="js/materialize.min.js"></script>
<link rel="stylesheet" href="css/login.css" type="text/css" />
	<meta charset="utf-8" view="viewport" content="width=device-width, initial scale=1.0" />
</head>
<body>
<div id="wrapper">
<?php require_once 'inc/navbar.php';
?>
<div class="container-fluid body-section">
		<div class="row">


		<!--bEGINNING OF sECOND sECTION-->
			<div class="col-xs-12">
				<!--BEGINNING OF hEADING-->
				<h1><a href="#"><i class="fa fa-users" aria-hidden="true"> Add post</i></a><small>View All Posts</small></h1>
				<!--END HEADING-->
				<div class="row header">
					<ol class="breadcrumb">
					<li class="active"><a href="index.php"><i class="glyphicon glyphicon-dashboard"></i>  Dashboard</a></li>
					<li class="active"><i class="fa fa-users"></i>Add Post</li>
					</ol>
				</div>

				<!--Third Row-->

				<div class="row post_section">
					<div class="col s12">


				<?php

error_reporting(0);
$date = $_POST['date'];
$title = $_POST['title'];
$author = $_POST['author'];
$author_image = $_POST['author_image'];
$image = $_POST['image'];
$category = $_POST['category'];
$tags = $_POST['tags'];
$post_data = $_POST['post_data'];
$views = $_POST['views'];
$status = $_POST['status'];
$uploadDir = 'img/';
$target_file = $uploadDir . basename($_FILES['author_image']['name']);

if (!isset($_POST['submit'])) {
	echo "Enter Entries";

	?>
						<form role="form" method="post" action="">
							<div clas="input-field file-field">
						<input type="text" name="author" class="validate" placeholder="Author Name" required="required" />
						<label for="author"></label>
						<hr>
						<input type="text" name="title" class="form-control" placeholder="Title of Post" required="required" />
						<label for="title"></label>
						<hr>
							<span>Author Image<input type="file" name="author_image" class="btn" accept="image/*" required="required" /></span>
							<hr>
							<span>Post Image<input type="file" name="image" class="btn" accept="image/*" required="required" /></span>
							<hr>
							<label for="category">Category</label>
							<input type="text" name="category" placeholder="Category" required="required">
							<hr>
							<label for="tags">Tags</label>
							<input type="text" name="tags" placeholder="Tags" required="required">
							<hr>
							<label for="post_data">Enter Post</label>
							<textarea name="post_data" class="form-control " required="required"></textarea>

							<input type="text" name="views" placeholder="Views" required="required">
							<input type="date" name="date" class="datepicker" placeholder="Date" required="required">
							<input type=text name="publish" class="validate" required="required" placeholder="Enter Publish">
							<button class="btn btn-success" type="submit" name="submit" >Submit</button>
							</div>
						</form>
						<?php
} else {
	$query = "INSERT INTO posts (date_data,title,author,author_image,image,category,tags,post_data,views,status) VALUES ('$date','$title','$author','$author_image','$image','$category','$tags','$post_data','$views','$status')";
	$run_query = mysqli_query($con, $query);
	move_uploaded_file($_FILES["author_image"]["tmp_name"], $target_file);
	echo "Wow, Entries enter";
}
?>
					</div>

				</div>


			</div>
		</div>
	</div>

<?php require_once 'inc/footer.php';
?>

</div>
<script src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>