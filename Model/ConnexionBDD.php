<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=banque_normande', "BanquePHP", "banque76");
} catch (\Exception $e) {
    echo "Erreur lors de la connexion à la base de données: " . $e->getMessage() . "<br/>";
    die();
}