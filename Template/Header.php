<?php session_start() ?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <title>Banque Normande</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="../css/main.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>




</head>


<body>

  <!--################### Départ du header ################### -->
  <!--######################################################## -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <h2 class="text-warning">La Banque Normande</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mob-navbar" aria-label="Toggle">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mob-navbar">
          <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php">Accueil</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Nos Services</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="view/blog.php">Blog</a></li>
                <li><a class="dropdown-item" href="statistiques.php">Statistiques</a></li>
                <li><a class="dropdown-item" href="../Controller/creation.php">Ouvrir un compte</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" target="blank" href="https://github.com/LopezRemi/banque_normande">GitHub</a></li>
              </ul>
            </li>
          </ul>
          <a id="logout" class="btn btn-warning" href="../Model/../view/logout.php">déconnexion</a>
        </div>
      </div>
    </nav>
  </header>
  <section id="banner">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/business-meeting-over-coffee.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>Nous sommes la pour vous !</h3>
            <p>Favoriser la créativité de votre entreprise grace à notre pilotage financier en ligne</p>
            <a href="https://www.lenouveleconomiste.fr/les-crypto-monnaies-pour-les-nuls-89045/" target="_blank" class="btn btn-warning">En savoir plus</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/bitcoin-into-piggy-bank.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>les crypto monnaies à l'honneur</h3>
            <p>Découvrer les solutions épargnes novatrices grace aux crypto monnaies</p>
            <a href="#" class="btn btn-warning">En savoir plus</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/payphone.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>Appli Banque Normande</h3>
            <p>Gerer vos comptes et payer avec votre téléphone grace a l'appli Banque Normande</p>
            <a href="#" class="btn btn-warning">En savoir plus</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </section>
  <!--###################  fin du carousel   ################# -->
  <!--######################################################## -->

  <main class="row my-3 mx-3">