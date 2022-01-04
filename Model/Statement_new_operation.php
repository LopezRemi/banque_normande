<?php
$id = htmlspecialchars($_GET['id']);
$sqlQuery = "SELECT amount FROM Account WHERE id = '$id'";
$AccountStatement = $db->prepare($sqlQuery);
$AccountStatement->execute();
$Account = $AccountStatement->fetchAll();