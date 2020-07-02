<?php
$actuRSS = simplexml_load_file("https://www.01net.com/rss/info/flux-rss/flux-toutes-les-actualites/");
$fileRSS = simplexml_load_file("https://www.01net.com/rss/actualite/");
$appsRSS = simplexml_load_file("https://www.01net.com/rss/actualites/applis-logiciels/");
$securityRSS = simplexml_load_file("https://www.01net.com/rss/actualites/securite/");
$pcRSS = simplexml_load_file("https://www.01net.com/rss/pc-peripheriques/");
// var_dump($actuRSS);
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

      <div class="container mt-3">

        <form action="" method="post" class="p-5 bg-light">
          <h1 class="text-center mb-5">Paramètres</h1>
          <div class="form-group row  justify-content-center">
            <label for="colors" class="col-sm-5 text-right pr-5">Choix du design du site :</label>
            <select id="colors" class="form-control col-sm-5">
              <option selected>-</option>
              <option value="">Couleurs 1 / 2 / 3</option>
              <option value="">Couleurs 1 / 2 / 3</option>
              <option value="">Couleurs 1 / 2 / 3</option>
            </select>
          </div>
          <div class="form-group row  justify-content-left">
            <label for="aricles" class="col-sm-6 text-right pr-5">Nombre d’articles affichés par sujet sur
              la page d’accueil :</label>
            <select class="form-control col-sm-5" id="aricles">
              <option>-</option>
              <option value="">3</option>
              <option value="">5</option>
              <option value="">8</option>
            </select>
          </div>
          <div class="form-group row  justify-content-center">
            <div class="col-sm-5 text-right pr-5">Choisissez trois sujets :</div>
            <div class="col-sm-5">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="choice1">
                <label class="form-check-label" for="choice1">Actualité</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="choice1">
                <label class="form-check-label" for="choice1">Dossier</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="choice1">
                <label class="form-check-label" for="choice1">Appli logiciel</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="choice1">
                <label class="form-check-label" for="choice1">Sécurité</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="choice1">
                <label class="form-check-label" for="choice1">Pc périphériques</label>
              </div>
            </div>
            </select>
          </div>
          <button type="submit" class="btn btn-dark mb-2 mx-auto d-block mt-5">Modifier</button>
        </form>
      </div>

    </section>
    <section class="mainarea">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-4 text-center">
            <!-- Card -->
            <div class="card card-cascade narrower">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header peach-gradient">

                <!-- Title -->
                <h2 class="card-header-title mb-3">News Title</h2>
                <!-- Text -->
                <p class="mb-0"><i class="fas fa-calendar mr-2"></i>26.07.2017</p>

              </div>

              <!-- Card content -->
              <div class="card-body card-body-cascade text-center">

                <!-- Text -->
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Voluptatibus, ex minis
                  recusandae. Facere modi sunt, quod quibusdam dignissimos neque rem nihil ratione est
                  placeat vel, natus
                  non quos laudantium veritatis sequi.Ut enim ad minima veniam, quis nostrum.</p>
                <!-- Link -->
                <a href="#!" class="orange-text d-flex flex-row-reverse p-2">
                  <h5 class="waves-effect waves-light">Read more<i class="fas fa-angle-double-right ml-2"></i></h5>
                </a>

              </div>
              <!-- Card content -->

            </div>
            <?= $actuRSS->channel->title  ?>
          </div>
          <div class="col-4 text-center">
            <!-- Card -->
            <div class="card card-cascade narrower">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header peach-gradient">

                <!-- Title -->
                <h2 class="card-header-title mb-3">News Title</h2>
                <!-- Text -->
                <p class="mb-0"><i class="fas fa-calendar mr-2"></i>26.07.2017</p>

              </div>

              <!-- Card content -->
              <div class="card-body card-body-cascade text-center">

                <!-- Text -->
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Voluptatibus, ex minis
                  recusandae. Facere modi sunt, quod quibusdam dignissimos neque rem nihil ratione est
                  placeat vel, natus
                  non quos laudantium veritatis sequi.Ut enim ad minima veniam, quis nostrum.</p>
                <!-- Link -->
                <a href="#!" class="orange-text d-flex flex-row-reverse p-2">
                  <h5 class="waves-effect waves-light">Read more<i class="fas fa-angle-double-right ml-2"></i></h5>
                </a>

              </div>
              <!-- Card content -->

            </div>
            <?= $actuRSS->channel->pubDate ?>
          </div>
          <div class="col-4 text-center">
            <!-- Card -->
            <div class="card card-cascade narrower">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header peach-gradient">

                <!-- Title -->
                <h2 class="card-header-title mb-3">News Title</h2>
                <!-- Text -->
                <p class="mb-0"><i class="fas fa-calendar mr-2"></i>26.07.2017</p>

              </div>

              <!-- Card content -->
              <div class="card-body card-body-cascade text-center">

                <!-- Text -->
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Voluptatibus, ex minis
                  recusandae. Facere modi sunt, quod quibusdam dignissimos neque rem nihil ratione est
                  placeat vel, natus
                  non quos laudantium veritatis sequi.Ut enim ad minima veniam, quis nostrum.</p>
                <!-- Link -->
                <a href="#!" class="orange-text d-flex flex-row-reverse p-2">
                  <h5 class="waves-effect waves-light">Read more<i class="fas fa-angle-double-right ml-2"></i></h5>
                </a>

              </div>
              <!-- Card content -->

            </div>
            <?= $actuRSS->channel->description ?>
          </div>
        </div>
      </div>
    </section>

    <!-- =========================================== footer -->
    <footer class="container-fluid bg-dark text-white">
      <div class="container">
        <div class="row justify-content-center text-center py-3">
          <div class="col-4">
            <b>Super RSS Reader</b>
            <ul class="list-unstyled text-light">
              <li><a class="text-decoration-none text-light" href="">Cookies</a></li>
              <li><a class="text-decoration-none text-light" href="">Terms & Conditions</a></li>
            </ul>
          </div>
          <div class="col-4">pouet2</div>
          <div class="col-12 text-light">© Copyright 2020 Super RSS Reader. Tristan && Pauline && Anthony. All rights reserved.</div>
        </div>
      </div>
    </footer>


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="assets/script.js"></script>

</body>

</html>