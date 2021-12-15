<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=banque_normande', "BanquePHP", "banque76");
} catch (\Exception $e) {
    echo "Erreur lors de la connexion à la base de données: " . $e->getMessage() . "<br/>";
    die();
}

$id = htmlspecialchars($_GET['id']);
$sqlQuery = "SELECT amount FROM Account WHERE id = '$id'";
$AccountStatement = $db->prepare($sqlQuery);
$AccountStatement->execute();
$Account = $AccountStatement->fetchAll();








if (isset($_POST['operation_type']) && isset($_POST['operation_amount'])) {
    $operation_type =  htmlspecialchars($_REQUEST['operation_type']);
    $operation_amount =  htmlspecialchars($_REQUEST['operation_amount']);
    $operation_status =  "En cours";
    $operation_date = date("Y-m-d");
    $account_id = $_GET['id'];
}


if ($operation_type == "Dépot") {
    $sql = "UPDATE Account SET amount = amount + $operation_amount WHERE id = $id";
} else {
    $sql = "UPDATE Account SET amount = amount - $operation_amount WHERE id = $id";
}


$AccountStatement = $db->prepare($sql);
$AccountStatement->execute();

$req = $db->prepare('INSERT INTO operation(
  operation_type,
  operation_amount,
  operation_date,
  operation_status,
  account_id
) VALUES(
  ?,  
  ?,
  ?,
  ?,
  ?
  )');
$req->execute([$operation_type, $operation_amount, $operation_date, $operation_status, $account_id]);

include('Template/Header.php');
include('Template/user_account.php');
echo "<div class='alert alert-success m-3 text-center' role='alert'>L'opération a bien été effectuée !</div>";
include('Template/Footer.php');
exit();
