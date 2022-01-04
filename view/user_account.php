<?php

$url = ($_SERVER["REQUEST_URI"]);
if (str_contains($url, "index")) {
  require('Model/connexionBDD.php');
  require('Model/userAccountSQL.php');
} else {
  require('../Model/connexionBDD.php');
  require('../Model/userAccountSQL.php');
};


// On affiche chaque compte
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
        <p class='card-text'>Dernière opération : <br> <?php echo $operation[$i]['operation_type']; ?> - <?php echo $operation[$i]['operation_date']; ?> - <?php echo $operation[$i]['operation_amount']; ?> € </p>
        <a href="../view/account_detail.php?id=<?php echo $Account[$i]['id'] ?>"><button class="btn btn-warning">Voir détails</button></a>
      </div>
    </div>
  </div>


<?php
}
?>
</div>