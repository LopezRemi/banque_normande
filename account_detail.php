<?php
include('template/Header.php');
include_once('Login.php');
?>

<?php if (isset($_SESSION['LOGGED_USER'])) : ?>   


?>
<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=banque_normande', "BanquePHP", "banque76");
} catch (\Exception $e) {
    echo "Erreur lors de la connexion à la base de données: " . $e->getMessage() . "<br/>";
    die();
}

if (!empty($_GET) && isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
    $sqlQuery = "SELECT * FROM Account WHERE id = '$id'";
    $AccountStatement = $db->prepare($sqlQuery);
    $AccountStatement->execute();
    $Account = $AccountStatement->fetchAll();

    $db_user = 'SELECT first_name, last_name from User INNER JOIN Account ON user.id = Account.owner_id';
    $userStatement = $db->prepare($db_user);
    $userStatement->execute();
    $user = $userStatement->fetchAll();
} else {
    $error = 'Compte introuvable !';
}
for ($i = 0; $i < count($Account); $i++) {
?>
    <div class='col-xl-3 col-md-6'>
        <div class='card bg-secondary text-white mb-4'>
            <div class='card-body '>
                <p class='card-text'>Type de compte : <?php echo $Account[$i]['account_type']; ?></p>
                <p class='card-text'>N° : <?php echo $Account[$i]['account_number']; ?></p>
                <p class='card-text'>Solde : <?php echo $Account[$i]['amount']; ?> €</p>
                <p class='card-text'>Date de création : <?php echo $Account[$i]['account_creation_date']; ?></p>
                <p class='card-text'>Propriétaire : <?php echo $user[$i]['last_name']; ?> <?php echo $user[$i]['first_name']; ?> </p>
            </div>
        </div>
    </div>
<?php
}
?>
<?php
$operation_db = "SELECT * from operation WHERE account_id = :page_id";
$operationStatement = $db->prepare($operation_db);
$operationStatement->execute(["page_id" => $id]);
$operation = $operationStatement->fetchAll();

foreach ($operation as $operations) {
?>
    <div class='col-xl-3 col-md-6'>
        <div class='card bg-success text-white mb-4'>
            <div class='card-body '>
                <p class='card-text'>
                <p class='card-text'>
                    Type d'opération : <?php echo $operations['operation_type'] ?> <br>
                    Montant : <?php echo $operations['operation_amount'] ?> € <br>
                    Date : <?php echo $operations['operation_date'] ?> <br>
                    statut : <?php echo $operations['operation_status'] ?> </p>
            </div>
        </div>
    </div>
<?php
}
?>

<form method="post" action="new_operation.php?id=<?php echo $id ?>" class="row g-3 m-2">
    <h3>Effectuer une opération</h3>
    <div class="col-md-3">
        <label for="account_type" class="form-label">Opération à effectuer</label>
        <select class="form-select" name="operation_type" required>
            <option selected disabled value="">Choisir...</option>
            <option>Dépot</option>
            <option>Retrait</option>
        </select>
    </div>
    <div class="col-md-3">
        <label for="account_amount" class="form-label">Montant</label>
        <input type="number" class="form-control" name="operation_amount" min="50" required>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-warning">Effectuer</button>
    </div>
</form>

<?php include('template/Footer.php');?>
<?php endif; ?>