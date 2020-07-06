<?php

require_once '../controllers/pages-controller.php';

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
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/mdb.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet"
        href="../assets/theme<?= isset($_POST['colors'])?$_POST['colors']:(isset($_COOKIE['colorsCookie'])?$_COOKIE['colorsCookie']:'grey') ?>.css">
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
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark color-dark ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="../accueil.html" class="btn btn-outline-white my-2 my-sm-0">Accueil</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container">

    <div class="row text-center m-5">
        <div class="col-sm text-dark mx-2 p-0">
          <h1><?= $titleFluxRSS[isset($_GET['subjectCookie'])?$_GET['subjectCookie']:0] ?></h2>
        </div>
      </div>

    <?php
        for ($row = 0; $row < count($fluxRSS[(isset($_GET['subjectCookie'])?$_GET['subjectCookie']:0)]->channel->item); $row++) {
    ?>

            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-1 bg-<?= $colorFluxRSS[isset($_GET['subjectCookie'])?$_GET['subjectCookie']:0] ?>">
                    </div>
                    <div class="col-sm-11">
                        <div class="card-body col-md-11">
                            <h5 class="card-title text-center"><?= $fluxRSS[isset($_GET['subjectCookie'])?$_GET['subjectCookie']:0]->channel->item[$row]->title ?></h5>
                            <p class="mb-0 text-center"><i class="fas fa-calendar mr-2"></i><?= strftime('%d/%m/%y à %Hh%M', strtotime(($fluxRSS[isset($_GET['subjectCookie'])?$_GET['subjectCookie']:0]->channel->item[$row])->pubDate)) ?></p>
                            <p class="card-text text-center"><?= $fluxRSS[isset($_GET['subjectCookie'])?$_GET['subjectCookie']:0]->channel->item[$row]->description ?>
<<<<<<< HEAD
                            <div class="text-right"><button class="<?= $colorFluxRSS[isset($_GET['subjectCookie'])?$_GET['subjectCookie']:0] ?>"><a href="<?= $fluxRSS[isset($_GET['subjectCookie'])?$_GET['subjectCookie']:0]->channel->item[$row]->link ?>"
                                target="_blank" class="text-body h6 mr-1"></a><i class="fas fa-arrow-right"></i> </button></div>
=======
                            <div class="text-right"><button class="bg-<?= $colorFluxRSS[isset($_GET['subjectCookie'])?$_GET['subjectCookie']:0] ?>"><a href="<?= $fluxRSS[isset($_GET['subjectCookie'])?$_GET['subjectCookie']:0]->channel->item[$row]->link ?>"
                                target="_blank" class="text-body h6 mr-1">Article complet</a><i class="fas fa-arrow-right"></i> </button></div>
>>>>>>> d4dc46854aaf8ddeb9c29ad45ab53af984403143
                            </p>

                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
        ?>
      </div>

        <footer class="container-fluid color-dark text-white">
            <div class="container">
                <div class="row justify-content-center text-center py-3">
                    <div class="col-4">
                        <b>Super RSS Reader</b>
                        <ul class="list-unstyled text-light">
                            <li><a class="text-decoration-none text-light" href="">Cookies</a></li>
                            <li><a class="text-decoration-none text-light" href="">Terms & Conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-12 text-light">© Copyright 2020 Super RSS Reader. Tristan && Pauline && Anthony. All
                        rights
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

</body>