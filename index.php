<?php
include("Template/Header.php");
require("Model/Login.php")
?>
 
 <div class="row mt-4 p-3">
<?php

if(isset($_SESSION['LOGGED_USER'])):
include("view\user_account.php");
endif; ?>



</div>
<?php include("Template/Footer.php") ?>
 