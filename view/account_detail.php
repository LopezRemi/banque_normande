<?php
include('../template/Header.php');
include_once('../Model/Login.php');
?>

<?php if (isset($_SESSION['LOGGED_USER'])) : ?>   



<?php
require('../Model/connexionBDD.php');

?>

<?php
if (!empty($_GET) && isset($_GET['id'])) {
    
    require('../Model/userAccountSQL2.php');
   
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

require('../Model/useAccountOperationSQL.php');
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

<form method="post" action="../Model/new_operation.php?id=<?php echo $id ?>" class="row g-3 m-2">
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

<?php include('../template/Footer.php');?>
<?php endif; ?>