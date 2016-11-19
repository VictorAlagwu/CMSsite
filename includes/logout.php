<?php
// @author 'Victor Alagwu';
// @project 'Simple Content Management System';
// @date    '0ctober 2016';
session_start();?>

<?php

session_destroy();

header('Location: ../index.php');

?>