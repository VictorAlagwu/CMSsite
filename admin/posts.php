<?php require_once 'inc/top.php';
?>
<title>Posts |Victor</title>
<link rel="stylesheet" type="text/css" href="css/users.css">


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
					<a href="categories.php" class="list-group-item"><span class="badge">4</span><i class="fa fa-folder-open"></i>Categories</a>
					<a href="#" class="list-group-item"><span class="badge">10</span><i class="fa fa-users"></i>Users</a>
				</div>
			</div>
		<!--Ending Section-->
		<!--bEGINNING OF sECOND sECTION-->
			<div class="col-xs-9">
				<!--BEGINNING OF hEADING-->
				<h1><a href="#"><i class="fa fa-users" aria-hidden="true"> All Posts</i></a><small>View All Posts</small></h1>
				<!--END HEADING-->
				<div class="row header">
					<ol class="breadcrumb">
					<li class="active"><a href="index.php"><i class="glyphicon glyphicon-dashboard"></i>  Dashboard</a></li>
					<li class="active"><i class="fa fa-users"></i>Post</li>
					</ol>
				</div>

				<!--Third Row-->
			</div>

				<!--Ending of Row-->

				<div class="row table">
					<div class="col-xs-12">
					<table class="table table-hover ">
						<thead>
							<tr>

								<th>Sr #</th>
								<th>Date</th>
								<th>Name</th>
								<th>Posts</th>
								<th>Category</th>
								<th>Edit</th>
								<th>Del</th>
							</tr>
						</thead>
						<tbody>
						<?php
?>
							<tr>

								<td>1</td>
								<td>19 Sep 2016</td>
								<td>Victor Alagwu</td>

								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
								<td>Football</td>
								<td><a href="#"><i class="fa fa-pencil"></i></a></td>
								<td><a href="#"><i class="fa fa-times"></i></a></td>
							</tr>
						<?php

?>
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