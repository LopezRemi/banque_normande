<?php
// On récupère tout le contenu de la table Account et User
$sqlQuery = 'SELECT * FROM Account WHERE owner_id = :usr_id';
$AccountStatement = $db->prepare($sqlQuery);
$AccountStatement->execute(["usr_id" => $_SESSION['user_id']]);
$Account = $AccountStatement->fetchAll();

$db_user = 'SELECT first_name, last_name from User INNER JOIN Account ON user.id = Account.owner_id';
$userStatement = $db->prepare($db_user);
$userStatement->execute();
$user = $userStatement->fetchAll();

$operation_db = 'SELECT operation_amount, operation_date, operation_type from operation INNER JOIN Account ON operation.id = operation.account_id';
$operationStatement = $db->prepare($operation_db);
$operationStatement->execute();
$operation = $operationStatement->fetchAll();
