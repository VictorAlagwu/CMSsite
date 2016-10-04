<?php require_once 'inc/top.php';
?>
<title>Users |Victor</title>
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
				<h1><a href="#"><i class="fa fa-users" aria-hidden="true"> Users</i></a><small>View All Users</small></h1>
				<!--END HEADING-->
				<div class="row header">
					<ol class="breadcrumb">
					<li class="active"><a href="index.php"><i class="glyphicon glyphicon-dashboard"></i>  Dashboard</a></li>
					<li class="active"><i class="fa fa-users"></i>Users</li>
					</ol>
				</div>

				<!--Third Row-->
				<div class="row">
					<form role="form" action="">
						<div class="row">
						<div class="col-xs-3">
							<select name="" id="" class="form-control">
								<option value="delete">Delete</option>
								<option value="author">Change to Author</option>
								<option value="admin">Change to Admin</option>
							</select>
						</div>
						<div class="col-xs-9">
					<button type="apply" class="btn btn-success">Apply</button>


					<button type="addnow" class="btn btn-info">Add Now</button>
					</div>
					</form>
					</div>
				</div>
				<!--Ending of Row-->

				<div class="row table">
					<table class="table table-hover">
						<thead>
							<tr>
								<th><input type="checkbox" name="checkbox"></th>
								<th>Sr #</th>
								<th>Date</th>
								<th>Name</th>
								<th>Username</th>
								<th>Email</th>
								<th>Image</th>
								<th>Password</th>
								<th>Role</th>
								<th>Posts</th>
								<th>Edit</th>
								<th>Del</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="checkbox" name="checkbox"></td>
								<td>1</td>
								<td>19 Sep 2016</td>
								<td>Victor Alagwu</td>
								<td>Victor</td>
								<td>victoralagwu@gmail.com</td>
								<td><i class="glyphicon glyphicon-user"></i></td>
								<td>78907</td>
								<td>Admin</td>
								<td>2</td>
								<td><a href="#"><i class="fa fa-pencil"></i></a></td>
								<td><a href="#"><i class="fa fa-times"></i></a></td>
							</tr>

							<tr>
								<td><input type="checkbox" name="checkbox"></td>
								<td>1</td>
								<td>19 Sep 2016</td>
								<td>Victor Alagwu</td>
								<td>Victor</td>
								<td>victoralagwu@gmail.com</td>
								<td><i class="glyphicon glyphicon-user"></i></td>
								<td>78907</td>
								<td>Admin</td>
								<td>2</td>
								<td><a href="#"><i class="fa fa-pencil"></i></a></td>
								<td><a href="#"><i class="fa fa-times"></i></a></td>
							</tr>

							<tr>
								<td><input type="checkbox" name="checkbox"></td>
								<td>1</td>
								<td>19 Sep 2016</td>
								<td>Victor Alagwu</td>
								<td>Victor</td>
								<td>victoralagwu@gmail.com</td>
								<td><i class="glyphicon glyphicon-user"></i></td>
								<td>78907</td>
								<td>Admin</td>
								<td>2</td>
								<td><a href="#"><i class="fa fa-pencil"></i></a></td>
								<td><a href="#"><i class="fa fa-times"></i></a></td>
							</tr>

							<tr>
								<td><input type="checkbox" name="checkbox"></td>
								<td>1</td>
								<td>19 Sep 2016</td>
								<td>Victor Alagwu</td>
								<td>Victor</td>
								<td>victoralagwu@gmail.com</td>
								<td><i class="glyphicon glyphicon-user"></i></td>
								<td>78907</td>
								<td>Admin</td>
								<td>2</td>
								<td><a href="#"><i class="fa fa-pencil"></i></a></td>
								<td><a href="#"><i class="fa fa-times"></i></a></td>
							</tr>

							<tr>
								<td><input type="checkbox" name="checkbox"></td>
								<td>1</td>
								<td>19 Sep 2016</td>
								<td>Victor Alagwu</td>
								<td>Victor</td>
								<td>victoralagwu@gmail.com</td>
								<td><i class="glyphicon glyphicon-user"></i></td>
								<td>78907</td>
								<td>Admin</td>
								<td>2</td>
								<td><a href="#"><i class="fa fa-pencil"></i></a></td>
								<td><a href="#"><i class="fa fa-times"></i></a></td>
							</tr>
						</tbody>
					</table>
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