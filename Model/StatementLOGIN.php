
<?php
// On récupère tout le contenu de la table user
$sqlQuery = 'SELECT email, password, id FROM User';
$userStatement = $db->prepare($sqlQuery);
$userStatement->execute();
$users = $userStatement->fetchAll();