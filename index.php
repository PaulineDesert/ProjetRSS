<?php

require_once 'controllers/index-controller.php';

var_dump($_POST);

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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#"><?= $titleFluxRSS[$_COOKIE['subjectCookie1']] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><?= $titleFluxRSS[$_COOKIE['subjectCookie2']] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><?= $titleFluxRSS[$_COOKIE['subjectCookie3']] ?></a>
        </li>
      </ul>
      <form action="" method="post" class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-white my-2 my-sm-0" name="gear" type="submit"><img class="mr-2"
            src="assets/img/gear.svg">Paramètres</button>
      </form>
    </div>
  </nav>

  <!-- =========================================== main -->
  <main class="mainarea py-4">
<a href="pages/pages?php">Ici</a>
    <?php

if (isset($_POST['gear']) || $_SERVER["REQUEST_METHOD"] == "POST") {

?>

    <section id="gear">

      <div class="container">

        <form action="" method="post" class="p-5 bg-light">
          <h1 class="text-center mb-5">Paramètres</h1>
          <div class="form-group row  justify-content-center">
            <label for="colors" class="col-sm-5 text-right pr-5">Choix du design du site :</label>
            <select id="colors" class="form-control col-sm-5" name="colors">
              <option value="color1" selected>Couleurs 1 / 2 / 3</option>
              <option value="color2">Couleurs 1 / 2 / 3</option>
              <option value="color3">Couleurs 1 / 2 / 3</option>
            </select>
            <span class="text-danger"><?= isset($errorMessage['colors']) ? $errorMessage['colors'] : '' ?></span>
          </div>
          <div class="form-group row  justify-content-left">
            <label for="aricles" class="col-sm-6 text-right pr-5">Nombre d’articles affichés par sujet sur
              la page d’accueil :</label>
            <select class="form-control col-sm-5" id="aricles" name="articles">
              <option value="3" selected>3</option>
              <option value="5">5</option>
              <option value="8">8</option>
            </select>
            <span class="text-danger"><?= isset($errorMessage['articles']) ? $errorMessage['articles'] : '' ?></span>
          </div>
          <div class="form-group row  justify-content-center">
            <div class="col-sm-5 text-right pr-5">Choisissez trois sujets :</div>
            <div class="col-sm-5">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="actuality" name="subject[]" value="0"
                  <?= (!isset($_POST['subject'])) ? 'checked' : ((in_array('0', $_POST['subject'])) ? 'checked' : '') ?>>
                <label class="form-check-label" for="actuality">Actualité</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="file" name="subject[]" value="1"
                  <?= (!isset($_POST['subject'])) ? 'checked' : ((in_array('1', $_POST['subject'])) ? 'checked' : '') ?>>
                <label class="form-check-label" for="file">Dossier</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="apps" name="subject[]" value="2"
                  <?= (!isset($_POST['subject'])) ? 'checked' : ((in_array('2', $_POST['subject'])) ? 'checked' : '') ?>>
                <label class="form-check-label" for="apps">Appli logiciel</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="security" name="subject[]" value="3"
                  <?= (!isset($_POST['subject'])) ? '' : ((in_array('3', $_POST['subject'])) ? 'checked' : '') ?>>
                <label class="form-check-label" for="security">Sécurité</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="pc" name="subject[]" value="4"
                  <?= (!isset($_POST['subject'])) ? '' : ((in_array('4', $_POST['subject'])) ? 'checked' : '') ?>>
                <label class="form-check-label" for="pc">Pc périphériques</label>
              </div>
            </div>
            </select>
            <span class="text-danger"><?= isset($errorMessage['subject']) ? $errorMessage['subject'] : '' ?></span>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-dark mb-2 mt-5" name="changeGear">Modifier</button>
            <span><a href="index.php" class="btn btn-dark mt-5 mb-2">Retour</a></span>
          </div>
        </form>
      </div>

    </section>

    <?php

} else {

?>

    <div class="container-fluid">

<?php
  for ($row = 0; $row < 3; $row++) {
?>

      <div class="row">
        
      <?php
        for ($col = 0; $col < 3; $col++) {
          $article = $col + 1;
      ?>

        <div class="col-sm bg-secondary mx-2 p-0">
          <div class="card m-2 bg-white">
            <div class="row">
              <div class="col-2 col-md-1 align-self-center">
                <div class="rounded d-block view view-cascade gradient-card-header peach-gradient" style="width:3rem; height: 6rem"></div>
              </div>
              <div class="col align-self-center">
                <p class="card-title m-0 p-0 ml-2"><?= $fluxRSS[$_COOKIE['subjectCookie' . $article]]->channel->item->title ?></p>
              </div>
              <div class="col-1 p-0 align-self-center">
                <img src="assets/img/loup.svg" style="width:2rem" alt="Voir plus" title="Voir plus" data-toggle="modal" data-target="#exampleModal">
              </div>
              <div class="col-1 p-0 align-self-center">
                <img src="assets/img/arrow.svg" style="width:2rem" alt="Aller vers l'article" title="Aller vers l'article">
              </div>
            </div>
          </div>
        </div>

        <?php
          }
        ?>

      </div>

<?php
  }
?>
    </div>

    <section class="mainarea">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-sm-4 text-center">
            <!-- Card -->
            <div class="card card-cascade narrower">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header peach-gradient">

                <!-- Title -->
                <h2 class="card-header-title mb-3"><?= $titleFluxRSS[$_COOKIE['subjectCookie1']] ?></h2>
                <!-- Text -->
                <p class="mb-0"><i class="fas fa-calendar mr-2"></i>26.07.2017</p>

              </div>

              <!-- Card content -->
              <div class="card-body card-body-cascade text-center">

                <!-- Text -->
                <p class="font-weight-bold"><?= $fluxRSS[$_COOKIE['subjectCookie1']]->channel->item->title ?></p>
                <p class="card-text"><?= $fluxRSS[$_COOKIE['subjectCookie1']]->channel->item->description ?></p>
                <!-- Link -->
                <a href="#!" class="orange-text d-flex flex-row-reverse p-2">
                  <h5 class="waves-effect waves-light">Read more<i class="fas fa-angle-double-right ml-2"></i></h5>
                </a>

              </div>
              <!-- Card content -->

            </div>
            <?= $actuRSS->channel->title  ?>
          </div>
          <div class="col-sm-4 text-center">
            <!-- Card -->
            <div class="card card-cascade narrower">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header peach-gradient">

                <!-- Title -->
                <h2 class="card-header-title mb-3"><?= $titleFluxRSS[$_COOKIE['subjectCookie2']] ?></h2>
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
          <div class="col-sm-4 text-center">
            <!-- Card -->
            <div class="card card-cascade narrower">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header peach-gradient">

                <!-- Title -->
                <h2 class="card-header-title mb-3"><?= $titleFluxRSS[$_COOKIE['subjectCookie2']] ?></h2>
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

    <?php } ?>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  </main>

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
        <div class="col-12 text-light">© Copyright 2020 Super RSS Reader. Tristan && Pauline && Anthony. All rights
          reserved.</div>
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