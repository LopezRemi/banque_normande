<?php
$id = htmlspecialchars($_GET['id']);
$sqlQuery = "SELECT * FROM Account WHERE id = '$id'";
    $AccountStatement = $db->prepare($sqlQuery);
    $AccountStatement->execute();
    $Account = $AccountStatement->fetchAll();

    $db_user = 'SELECT first_name, last_name from User INNER JOIN Account ON user.id = Account.owner_id';
    $userStatement = $db->prepare($db_user);
    $userStatement->execute();
    $user = $userStatement->fetchAll();