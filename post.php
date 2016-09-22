<?php require_once 'inc/top.php';?>
</head>
<body>
<?php require_once 'inc/navbar.php';?>

<div class="jumbotron">
	<div class="container">
		<div id="details" class="animated fadeInRight">
			<h1>	Custom <span>	Post</span></h1>
			<p>		Add your post</p>

		</div>
	</div>
	<img src="img/top-image.jpg" alt="Top Image">
</div>

<section>
<div class="container">
	<div class="row">

		<div class="col-xs-8 main-post">
 		<!--Main Posts Area-->
			<div class="row post">
				<!--Date Tag-->
					<div class="col-xs-2">
						<p id="date">12</p>
						<p id="month">September</p>
						<p id="year">2016</p>
					</div>
				<!--End of Date Tag-->


				<!--Start of post-->
					<div class="col-xs-8">
						<p id="post-header"><a href="#">This is the First Post By The Author</a></p>
						<p id="author">Written By:<a href="https://facebook/victor.alagwu"> Victor</a></p>
					</div>
				<!--End of Post-->

				<!--Author image-->
					<div class="col-xs-2">
						<a href="https://facebook.com/victor.alagwu"><img src="img/author.jpg" id="pic"></a>
					</div>
				<!--end of author-->

			</div>
		<!--Ending of posting section-->

		<!--Beginning of post image-->
		<div class="row">
			<div class="col-xs-12">
				<a href="https://facebook.com/victor.alagwu"><img id="post-image" src="img/slider4.jpg" alt="iMage"></a>
			</div>
		</div>
		<hr>
	<!--Ending of post image-->

	<!--Beginning of post section-->
		<div class="row post-content">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<br/>
		<div>
			<span class="glyphicon glyphicon-folder-open"> Category            </span>
			<span>     |    </span>
			<span class="glyphicon glyphicon-comment" id="comment"> Comment</span>
		</div>
		<hr>
		<!--Recent Side -->
		<div class="row recentpost">
			<div class="col-xs-4">
				<div><img src="img/post1.jpg"></div>
				<div>This is First heading for first Post</div>
			</div>
			<div class="col-xs-4">
				<div><img src="img/post2.jpg"></div>
				<div>This is Second heading for second Post</div>
			</div>
			<div class="col-xs-4">
				<div><img src="img/slider2.jpg"></div>
				<div>This is Third heading for third Post</div>
			</div>
		</div>
		<hr>
		<!--Ending of Recent Post Side -->

		<!--About Author Side -->
		<div class="row aboutus">
			<div class="col-xs-3">
				<img src="img/author.jpg">
			</div>
			<div class="col-xs-9">
				<h4>About Us</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
		<!--Ending of about Author Side -->

		<!--Comment section-->
		<div class="row comments">
			<h4>Comments</h4>
		<!--First Comment-->
			<div class="row">
				<div class="col-xs-3">
					<span class="glyphicon glyphicon-user"></span>
				</div>
				<div class="col-xs-9">
					<h5>Victor Alagwu</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
				</div>
			</div>
			<hr>
		<!--ENding of first comment-->

			<div class="row">
				<div class="col-xs-3">
					<span class="glyphicon glyphicon-user"></span>
				</div>
				<div class="col-xs-9">
					<h5>Victor Alagwu</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
				</div>
			</div>
			<hr>
		</div>
		<!--Ending of comment section-->

		<!--Reply Section-->
				<div class="row">
					<h4 id="">Comment Section</h4>
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
						<button class="btn btn-default" type="submit" name="submit" id="submit">Submit Comment</button>
					</form>
				</div>
<!--End reply section-->
</div>






			<!--Search button Section-->
		<div class="col-xs-4">

			<?php require_once 'inc/rightside.php';?>


		</div>
	</div>
</div>
</section>

<?php require_once 'inc/footer.php';
?>


	<script src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>