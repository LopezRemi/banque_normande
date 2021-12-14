<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=banque_normande', "BanquePHP", "banque76");
} catch (\Exception $e) {
    echo "Erreur lors de la connexion à la base de données: " . $e->getMessage() . "<br/>";
    die();
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table Accounts
$sqlQuery = 'SELECT * FROM Account WHERE owner_id = :usr_id';
$AccountStatement = $db->prepare($sqlQuery);
$AccountStatement->execute(["usr_id" => $_SESSION['user_id']]);
$Account = $AccountStatement->fetchAll();

// On affiche chaque compte
foreach ($Account as $Accounts) {
    ?>
      <div class='col-xl-3 col-md-6'>
        <div class='card bg-primary text-white mb-4'>
          <div class='card-body'>
            <p class='card-text'>Type de compte : <?php echo $Accounts['account_type']; ?></p>
            <p class='card-text'>N° : <?php echo $Accounts['account_number']; ?></p>
            <p class='card-text'>Solde : <?php echo $Accounts['amount']; ?> €</p>
            <p class='card-text'>Date de création : <?php echo $Accounts['account_creation_date']; ?></p>
            <p class='card-text'>Propriétaire : <?php echo $Accounts['owner_id']; ?></p>
            <p class='card-text'>Dernière opération : ...</p>
          </div>
        </div>
      </div>
    
    
    <?php
    }
    ?>
    </div>