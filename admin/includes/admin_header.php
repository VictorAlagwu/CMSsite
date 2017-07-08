<!-- @author 'Victor Alagwu';
//   @project 'Simple Content Management System';
//   @date    '0ctober 2016'; -->
<?php include '../includes/db.php';?>
<?php include 'crud_cat_function.php';?>
<?php ob_start();?>
<?php session_start();?>
<?php
if (isset($_SESSION['role'])) {

} else {
	header('Location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - <?php echo $_SESSION['firstname']; ?></title>
    <link rel="icon" type="image/png" href="../img/vimeo.png">
    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 <script src="js/tinymce/tinymce.min.js"></script>
    <script src="js/tinymce/script.js"></script>
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
