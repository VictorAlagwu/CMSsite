<?php require_once 'inc/top.php';
?>
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<div id="wrapper">
<?php require_once 'inc/navbar.php';
?>

	<div class="container-fluid body-section">
		<div class="row">

		<!--First Section-->
			<div class="col-xs-3">
				<?php require_once 'inc/leftside.php';
?>
			</div>
		<!--Ending Section-->
		<!--bEGINNING OF sECOND sECTION-->
			<div class="col-xs-9">
				<!--BEGINNING OF hEADING-->
				<h1><i class="glyphicon glyphicon-dashboard" aria-hidden="true"></i>Dashboard<small>Statistics Overview</small></h1>
				<ol class="breadcrumb">
					<li class="active"><a href="index.php">Dashboard</a></li>

				</ol>
				<!--END HEADING-->

				<div class="row tag-boxes">
				<!--Begin 1 Comment-->
					<div class="col-md-6 col-lg-3">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-comments fa-5x"></i>
									</div>
									<div class="col-xs-9">
										<div class="text-right huge">11</div>
										<div class="text-right"> New Comments</div>

									</div>
								</div>
							</div>
							<a href="#">
								<div class="panel-footer">
									<span class="pull-left">View All Comments</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div>

					<!--Second Panel-->
					<div class="col-md-6 col-lg-3">
						<div class="panel panel-red">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-file-text fa-5x"></i>
									</div>
									<div class="col-xs-9">
										<div class="text-right huge">20</div>
										<div class="text-right">All Posts</div>

									</div>
								</div>
							</div>
							<a href="#">
								<div class="panel-footer">
									<span class="pull-left">View All Posts</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div>

					<!--End Panel-->

					<!--Third Panel-->
					<div class="col-md-6 col-lg-3">
						<div class="panel panel-yellow">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-users fa-5x"></i>
									</div>
									<div class="col-xs-9">
										<div class="text-right huge">30</div>
										<div class="text-right">All Users</div>

									</div>
								</div>
							</div>
							<a href="#">
								<div class="panel-footer">
									<span class="pull-left">View All Users</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div>
					<!--End Panel-->

					<!--Fourth Panel-->
					<div class="col-md-6 col-lg-3">
						<div class="panel panel-green">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-folder-open fa-5x"></i>
									</div>
									<div class="col-xs-9">
										<div class="text-right huge">12</div>
										<div class="text-right">All Categories</div>

									</div>
								</div>
							</div>
							<a href="#">
								<div class="panel-footer">
									<span class="pull-left">View All Categories</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div>
					<!--End Panel-->

				</div>
				<div class="row">
					<h3>New Users</h3>
					<table class="table table-hover">
					<thead>
						<tr>
						<b>
							<td>Sr #</td>
							<td>Date</td>
							<td>Name</td>
							<td>Username</td>
							<td>Role</td>
						</b>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>19 Sep 2016</td>
							<td>Victor Alagwu</td>
							<td>Victor</td>
							<td>Admin</td>
						</tr>

						<tr>
							<td>1</td>
							<td>19 Sep 2016</td>
							<td>Victor Alagwu</td>
							<td>Victor</td>
							<td>Admin</td>
						</tr>

						<tr>
							<td>1</td>
							<td>19 Sep 2016</td>
							<td>Victor Alagwu</td>
							<td>Victor</td>
							<td>Admin</td>
						</tr>

						<tr>
							<td>1</td>
							<td>19 Sep 2016</td>
							<td>Victor Alagwu</td>
							<td>Victor</td>
							<td>Admin</td>
						</tr>

						<tr>
							<td>1</td>
							<td>19 Sep 2016</td>
							<td>Victor Alagwu</td>
							<td>Victor</td>
							<td>Admin</td>
						</tr>

						<tr>
							<td>1</td>
							<td>19 Sep 2016</td>
							<td>Victor Alagwu</td>
							<td>Victor</td>
							<td>Admin</td>
						</tr>

						<tr>
							<td>1</td>
							<td>19 Sep 2016</td>
							<td>Victor Alagwu</td>
							<td>Victor</td>
							<td>Admin</td>
						</tr>
					</tbody>
					</table>
					<a href="#" class="btn btn-primary">View All Users</a>
				</div>

				<div class="row new-posts">
					<table class="table table-hover">
						<h3>New Posts</h3>
						<thead>
							<tr>
								<td>Sr #</td>
								<td>Date</td>
								<td>Post Title</td>
								<td>Category</td>
								<td>Views</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>25 Sep 2016</td>
								<td>Introduction to Cyper Hacking</td>
								<td>Tutorial</td>
								<td><i class="fa fa-eye"></i>21</td>
							</tr>

							<tr>
								<td>1</td>
								<td>25 Sep 2016</td>
								<td>Introduction to Cyper Hacking</td>
								<td>Tutorial</td>
								<td><i class="fa fa-eye"></i>21</td>
							</tr>

							<tr>
								<td>1</td>
								<td>25 Sep 2016</td>
								<td>Introduction to Cyper Hacking</td>
								<td>Tutorial</td>
								<td><i class="fa fa-eye"></i>21</td>
							</tr>

							<tr>
								<td>1</td>
								<td>25 Sep 2016</td>
								<td>Introduction to Cyper Hacking</td>
								<td>Tutorial</td>
								<td><i class="fa fa-eye"></i>21</td>
							</tr>

							<tr>
								<td>1</td>
								<td>25 Sep 2016</td>
								<td>Introduction to Cyper Hacking</td>
								<td>Tutorial</td>
								<td><i class="fa fa-eye"></i>21</td>
							</tr>
						</tbody>
					</table>
					<a href="#" class="btn btn-primary">View Posts</a>
				</div>
			</div>
		</div>
	</div>
	<?php require_once 'inc/footer.php';
?>

<script src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</div>
</body>
</html>