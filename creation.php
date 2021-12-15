<?php
include('Template/Header.php');
include_once('Login.php');
?>

<?php if (isset($_SESSION['LOGGED_USER'])) : ?>   
<?php include('form.php'); ?>
<?php endif; ?>
<?php include("Template/Footer.php") ?>
