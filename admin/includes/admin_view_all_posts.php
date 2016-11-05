<!-- @author 'Victor Alagwu';
//   @project 'Simple Content Management System';
//   @date    '0ctober 2016'; -->
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">

        <?php

if (isset($_POST['checkBoxArray'])) {
	$checkBoxArray = $_POST['checkBoxArray'];
	foreach ($_POST['checkBoxArray'] as $checkboxvalue) {

		$bulk_options = $_POST['bulk_options'];
		if ($_SESSION['role'] !== 'Admin') {
			header('Location: ./user_error.php');
		} else {
			switch ($bulk_options) {

			case 'publish':
				$p_query = "UPDATE posts SET post_status='{$bulk_options}' WHERE post_id={$checkboxvalue}";
				$run_p_query = mysqli_query($con, $p_query);
				break;
			case 'draft':
				$d_query = "UPDATE posts SET post_status='{$bulk_options}' WHERE post_id={$checkboxvalue}";
				$run_d_query = mysqli_query($con, $d_query);
				break;
			case 'delete':
				$del_query = "DELETE FROM posts WHERE post_id={$checkboxvalue}";
				$run_del_query = mysqli_query($con, $del_query);

				break;
			default:
				echo "Error";
				break;
			}
		}
	}

}
?>
        <form action="" method="post">
            <table class="table table-bordered table-striped table-hover">
            <div class="col-xs-4">
            	<div id="manyOptions" class="form-group">
            	<select class="form-control" name="bulk_options">
            		<option value="">Select Option</option>
            		<option value="publish">Publish</option>
            		<option value="draft">Draft</option>
            		<option value="delete">Delete</option>
            	</select>
            	</div>
            </div>
            <div class="col-xs-4">
            <div class="form-group">
            <input type="submit" name="submit" class="btn btn-success" value="Apply">
            <a href="?source=add_post" class="btn btn-primary">Add New</a>
            </div>
            </div>
                <thead>
                    <tr>
                        <th><input type="checkbox" name="checkBoxArra"  class='checkBoxes'></th>
                        <th>ID</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Tags</th>
                        <th>Comment</th>
                        <th>Date</th>
                        <th>View Post</th>

                        <th>Delete</th>
                        <th>Edit</th>

                    </tr>
                </thead>
                <tbody>

                    <?php

$query = "SELECT * FROM posts";
$run_query = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($run_query)) {
	$post_id = $row['post_id'];
	$post_category_id = $row['post_category_id'];
	$post_title = $row['post_title'];
	$post_author = $row['post_author'];
	$post_date = $row['post_date'];
	$post_image = $row['post_image'];
	$post_content = $row['post_content'];
	$post_tags = $row['post_tags'];
	$post_comment_count = $row['post_comment_count'];
	$post_status = $row['post_status'];

	$cat_query = "SELECT * FROM categories WHERE cat_id=$post_category_id";
	$run_cat_query = mysqli_query($con, $cat_query);
	while ($cat_row = mysqli_fetch_array($run_cat_query)) {
		$cat_title = $cat_row['cat_title'];
		$cat_id = $cat_row['cat_id'];
	}

	echo "<tr>";
	?>
	<td><input type='checkbox' name='checkBoxArray[]' class='form-control checkbox' value='<?php echo $post_id; ?>'></td>
	<?php
echo "<td>{$post_id}</td>";
	echo "<td>{$post_author}</td>";
	echo "<td>{$post_title}</td>";
	echo "<td>{$cat_title}</td>";
	echo "<td>{$post_status}</td>";
	echo "<td><img  width='100' src='../img/{$post_image}' alt='Post Image' ></td>";
	echo "<td>{$post_tags}</td>";
	echo "<td>{$post_comment_count}</td>";
	echo "<td>{$post_date}</td>";
	echo "<td><a href='../post.php?post={$post_id}' style='color:green'>Link Post</a></td>";
	echo "<td><a href='?del={$post_id}'><i class='fa fa-times' style='color: red;''></i></a></td>";
	echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'><span class='glyphicon glyphicon-edit' style='color: #265a88;'></span></a></td>";

	echo "</tr>";

}

?>


                </tbody>
            </table>
</form>





            <?php
if (isset($_SESSION['role'])) {
	if (isset($_GET['del'])) {
		$post_del = $_GET['del'];
		if ($_SESSION['role'] !== 'Admin') {
			header('Location: ./user_error.php');
		} else {
			$del_query = "DELETE FROM posts WHERE post_id={$post_del}";
			$run_del_query = mysqli_query($con, $del_query);
			header('Location:posts.php');
		}
	}
}
?>
        </div>
    </div>
</div>


