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
$db_user = 'SELECT first_name, last_name from User INNER JOIN Account ON user.id = Account.owner_id';
$userStatement = $db->prepare($db_user);
$userStatement->execute();
$user = $userStatement->fetchAll();

// print_r($user);
// exit();

// On affiche chaque compte
for ($i=0;$i < count($Account); $i++) {
    ?>
      <div class='col-xl-3 col-md-6'>
        <div class='card bg-primary text-white mb-4'>
          <div class='card-body '>
            <p class='card-text'>Type de compte : <?php echo $Account[$i]['account_type']; ?></p>
            <p class='card-text'>N° : <?php echo $Account[$i]['account_number']; ?></p>
            <p class='card-text'>Solde : <?php echo $Account[$i]['amount']; ?> €</p>
            <p class='card-text'>Date de création : <?php echo $Account[$i]['account_creation_date']; ?></p>
            <p class='card-text'>Propriétaire : <?php echo $user[$i]['last_name']; ?> <?php echo $user[$i]['first_name']; ?> </p>
            <p class='card-text'>Dernière opération : ...</p>
            <button class="btn btn-warning ">Voir détails</button>
          </div>
        </div>
      </div>
    
    
    <?php
    }
    ?>
    </div>