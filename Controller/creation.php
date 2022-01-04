<?php
include('../Template/Header.php');
include_once('../Model/Login.php');
?>

<?php if (isset($_SESSION['LOGGED_USER'])) : ?>   
<?php include('../view/form.php'); ?>
<?php endif; ?>
<?php include("../Template/Footer.php") ?>
