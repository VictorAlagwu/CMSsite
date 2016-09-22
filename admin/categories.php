<?php require_once 'inc/top.php';
?>
<link rel="stylesheet" type="text/css" href="css/categories.css">
</head>
<body>
<div id="wrapper">
<?php require_once 'inc/navbar.php';
?>

	<div class="container-fluid body-section">
		<div class="row">

		<!--First Section-->
			<div class="col-xs-3">
				<div class="list-group">
					<a href="#" class="list-group-item active">Dashboard</a>
					<a href="#" class="list-group-item">
					<span class="badge">14</span><i class="fa fa-file-text"></i>All Posts</a>
					<a href="#" class="list-group-item"><span class="badge">9</span><i class="fa fa-comment"></i>Comments</a>
					<a href="#" class="list-group-item"><span class="badge">4</span><i class="fa fa-folder-open"></i>Categories</a>
					<a href="users.php" class="list-group-item"><span class="badge">10</span><i class="fa fa-users"></i>Users</a>
				</div>
			</div>
		<!--Ending Section-->
		<!--bEGINNING OF sECOND sECTION-->
			<div class="col-xs-9">
				<!--BEGINNING OF hEADING-->
				<h1><a href="#"><i class="fa fa-folder-open" aria-hidden="true">Categories</i></a><small>Different Categories</small></h1>
				<!--END HEADING-->
				<div class="row header">
					<ol class="breadcrumb">
					<li class="active"><a href="index.php"><i class="glyphicon glyphicon-dashboard"></i>  Dashboard</a></li>
					<li class="active"><i class="fa fa-folder-open"></i>Categories</li>
					</ol>
				</div>

				<div class="row">
					<div class="col-xs-6">
					<form role="form" action="">
						<label for="category-name">Category Name:</label>
						<input type="text" name="category-name" placeholder="Category Name" class="form-control">
						<button type="submit" name="submit" class="btn btn-info">Add Category</button>
					</form>
					</div>
					<div class="col-xs-6">
						<table class="table table-hover table-bordered table-striped">
							<thead>
								<tr>
									<th>Sr #</th>
									<th>Category Name</th>
									<th>Posts</th>
									<th>Edit</th>
									<th>Del</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Tech</td>
									<td>12</td>
									<td><a href="#"><i class="fa fa-pencil"></i></a></td>
									<td><a href="#"><i class="fa fa-times"></i></a></td>
								</tr>

								<tr>
									<td>1</td>
									<td>Tech</td>
									<td>12</td>
									<td><a href="#"><i class="fa fa-pencil"></i></a></td>
									<td><a href="#"><i class="fa fa-times"></i></a></td>
								</tr>

								<tr>
									<td>1</td>
									<td>Tech</td>
									<td>12</td>
									<td><a href="#"><i class="fa fa-pencil"></i></a></td>
									<td><a href="#"><i class="fa fa-times"></i></a></td>
								</tr>

								<tr>
									<td>1</td>
									<td>Tech</td>
									<td>12</td>
									<td><a href="#"><i class="fa fa-pencil"></i></a></td>
									<td><a href="#"><i class="fa fa-times"></i></a></td>
								</tr>
							</tbody>
						</table>
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