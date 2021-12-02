<!-- <div class="mainIndex d-flex justify-content-evenly">
  <div class="card" style="width: 20vw;">
    <div class="card-body">
    <h5 class="card-title">Compte courant</h5>
    <p class="card-text">N:0132520024 fr 45</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Proprietaire : Lopez Rémi</li>
      <li class="list-group-item">Solde : 12000€</li>
      <li class="list-group-item">dernière operation : bidule -2.99</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link btn bg-warning">clôturer</a>
      <a href="#" class="card-link btn bg-warning">Dépot/retrait</a>
      <a href="#" class="card-link btn bg-warning">Voir</a>
    </div>
  </div>
  <div class="card" style="width: 20vw;">
    <div class="card-body">
    <h5 class="card-title">Livret A</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Proprietaire : Lopez Rémi</li>
      <li class="list-group-item">Solde : 34000€</li>
      <li class="list-group-item">dernière operation : truc -12.99</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link btn bg-warning">clôturer</a>
      <a href="#" class="card-link btn bg-warning">Dépot/retrait</a>
      <a href="#" class="card-link btn bg-warning">Voir</a>
    </div>
  </div>
  <div class="card" style="width: 20vw;">
    <div class="card-body">
    <h5 class="card-title">PEL</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Proprietaire : Lopez Rémi</li>
      <li class="list-group-item">Solde : 102000€</li>
      <li class="list-group-item">dernière operation : chouette -2000.99</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link btn bg-warning">clôturer</a>
      <a href="#" class="card-link btn bg-warning">Dépot/retrait</a>
      <a href="#" class="card-link btn bg-warning">Voir</a>
    </div>
  </div>
</div> -->

<?php
function get_accounts() {
    return [
      [
        "name" => "Compte courant",
        "number" => "N:0132520024 fr 45",
        "owner" => "Mr Gossart Thomas",
        "amount" => 250,
        "last_operation" => "auchan -97.36€"
      ],
      [
        "name" => "Livret A",
        "number" => "N:0132520024 fr 45",
        "owner" => "Mr Gossart Thomas",
        "amount" => 1500,
        "last_operation" => "depot +45€"
      ],
      [
        "name" => "PEL",
        "number" => "N:0132520024 fr 45",
        "owner" => "Mr Gossart Thomas",
        "amount" => 480,
        "last_operation" => "depot +150€"
      ],
    ];
}

$accounts = get_accounts();

?>