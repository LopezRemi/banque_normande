<?php
include("../Template/Header.php");
session_destroy();
echo 'Vous avez été déconnecté =). <a href="/index.php">Retour</a>';
include("../Template/Footer.php")
?>
