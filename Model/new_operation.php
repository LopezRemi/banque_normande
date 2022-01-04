<?php
require('../Model/connexionBDD.php')
?>

<?php
require('../Model/Statement_new_operation.php');

if (isset($_POST['operation_type']) && isset($_POST['operation_amount'])) {
    $operation_type =  htmlspecialchars($_REQUEST['operation_type']);
    $operation_amount =  htmlspecialchars($_REQUEST['operation_amount']);
    $operation_status =  "Terminé";
    $operation_date = date("Y-m-d");
    $account_id = $_GET['id'];
}


require('../Model/operationREQUEST.php');


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

include('../Template/Header.php');
include('../view/user_account.php');
echo "<div class='alert alert-success m-3 text-center' role='alert'>L'opération a bien été effectuée !</div>";
include('../Template/Footer.php');
exit();
