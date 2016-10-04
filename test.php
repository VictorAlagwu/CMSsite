<?php include 'inc/top.php';
?>

</head>
<body>
<?php require_once 'inc/navbar.php';
if (isset($_GET['del_id'])) {
	$del_sql = "DELETE FROM posts WHERE id='$_GET[del_id]'";
	$run_sql = mysqli_query($con, $del_sql);
}

?>
<hr>
<table class="table table-hover table-bordered table-striped">
	<thead>
		<tr>
		<th>SR#</th>
		<th>Title</th>
		<th>Author Name</th>
		<th>Category</th>
		<th>Delete<th>
		</tr>
	</thead>
	<tbody>


<?php
$query = "SELECT * FROM posts";
$run_query = mysqli_query($con, $query);
$num_row = mysqli_num_rows($run_query);
if ($con) {
	while ($rows = mysqli_fetch_array($run_query)) {
		$id = $rows['id'];
		$title = $rows['title'];
		$author = $rows['author'];
		$category = $rows['category'];

		echo '<tr>';
		echo '<td>' . $id . '</td>';
		echo '<td>' . $author . '</td>';
		echo '<td>' . $title . '</td>';
		echo '<td>' . $category . '</td>';
		echo '<td><a href="test.php?del_id=' . $id . ' "><i class="fa fa-pencil"></i></a></td>';

	}} else {
	echo "No Connection";
}
?>


	</tbody>
</table>
</body>
</html>