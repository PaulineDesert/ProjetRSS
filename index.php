<?php 
$actuRSS = simplexml_load_file("https://www.01net.com/rss/info/flux-rss/flux-toutes-les-actualites/");
$fileRSS = simplexml_load_file("https://www.01net.com/rss/actualite/");
$appsRSS = simplexml_load_file("https://www.01net.com/rss/actualites/applis-logiciels/");
$securityRSS = simplexml_load_file("https://www.01net.com/rss/actualites/securite/");
$pcRSS = simplexml_load_file("https://www.01net.com/rss/pc-peripheriques/");
var_dump($actuRSS);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TP Flux RSS</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/mdb.min.css">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
  <!-- =========================================== header -->
  <header class="container-fluid" id="img-accueil">
    <div class="row justify-content-center text-center">
      <div class="col-12 py-5">
        <h1 class="title-accueil"><b>Super RSS Reader</b></h1>
      </div>
    </div>
  </header>
  <!-- =========================================== navbar -->
  
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Actualités</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Dossiers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Appli logiciel</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-white my-2 my-sm-0" type="submit"><img class="mr-2" src="assets/img/gear.svg">Paramètres</button>
    </form>
  </div>
</nav>

  <!-- =========================================== main -->
  <main>

<section id="gear">

<form action="" method="post">
  <div class="form-group">
    <label for="colors">Choix du design du site :</label>
      <select id="colors" class="form-control">
        <option selected>-</option>
        <option value="">Couleurs 1 / 2 / 3</option>
        <option value="">Couleurs 1 / 2 / 3</option>
        <option value="">Couleurs 1 / 2 / 3</option>
      </select>
  </div>
  <div class="form-group">
    <label for="aricles">Nombre d’articles affichés par sujet sur la page d’accueil :</label>
    <select class="form-control" id="aricles">
      <option>-</option>
      <option value="">3</option>
      <option value="">5</option>
      <option value="">8</option>
    </select>
  </div>
  <div class="form-group">
    <label for="subjects">Choix des sujets sous forme de checkbox (proposer 5 choix) :</label>
    <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="choice1">
  <label class="custom-control-label" for="choice1">choice1</label>
  <input type="checkbox" class="custom-control-input" id="choice1">
  <label class="custom-control-label" for="choice1">choice1</label>
  <input type="checkbox" class="custom-control-input" id="choice1">
  <label class="custom-control-label" for="choice1">choice1</label>
  <input type="checkbox" class="custom-control-input" id="choice1">
  <label class="custom-control-label" for="choice1">choice1</label>
  <input type="checkbox" class="custom-control-input" id="choice1">
  <label class="custom-control-label" for="choice1">choice1</label>
</div>
    </select>
  </div>
</form>
</section>

    <p>Contenu here</p>
  <main class="mainarea">
      <div class="container">
          <div class="row justify-content-around">
              <div class="col-4 text-center"><?= $actu -> channel -> title  ?></div>
              <div class="col-4 text-center"><?= $actu -> channel -> pubDate ?></div>
              <div class="col-4 text-center"><?= $actu -> channel -> description ?></div>
          </div>
      </div>
 

  </main>
    
  <!-- =========================================== footer -->
  <footer class="container-fluid bg-dark text-white">
    <div class="row justify-content-center text-center">
      <div class="col-4">pouet1</div>
      <div class="col-4">pouet2</div>
      <div class="col-4">pouet3</div>
      <div class="col-12">© Copyright Tristan && Pauline && Anthony</div>
    </div>

  </footer>


  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  <script type="text/javascript" src="assets/script.js"></script>

</body>

</html>