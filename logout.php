<?php
include("Template/Header.php");
session_destroy();
echo 'You have been logged out. <a href="/">Go back</a>';
include("Template/Footer.php")
?>