<?php 
$xmltest = "https://www.01net.com/rss/info/flux-rss/flux-toutes-les-actualites/";
$actu = simplexml_load_file($xmltest);
var_dump($actu);
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
  <header class="container-fluid">
    <div>
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
        <a class="nav-link" href="#">Sujet 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sujet 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sujet 3</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-white my-2 my-sm-0" type="submit"><img class="mr-2" src="assets/img/gear.svg">Paramètres</button>
    </form>
  </div>
</nav>

  <!-- =========================================== main -->
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
  <footer>

  </footer>


  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  <script type="text/javascript" src="assets/script.js"></script>

</body>

</html>