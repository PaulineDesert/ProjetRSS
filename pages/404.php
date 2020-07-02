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
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/mdb.min.css">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <!-- =========================================== header -->
    <!-- <header class="container-fluid" id="img-accueil">
        <div class="row justify-content-center text-center">
            <div class="col-12 py-5">
                <h1 class="title-accueil"><b>Super RSS Reader</b></h1>
            </div>
        </div>
    </header> -->

    <!-- =========================================== main -->
    <main class="mainarea main404 py-4">

        <div class="text-center">
            <h1 class="font-weight-bold">Erreur 404</h1>
            <p class="font-weight-bold">Page non trouvée</p>
            <div>
                <img id="img404" src="../assets/img/404.png" alt="Erreur 404">
            </div>
            <a href="../index.php" class="btn btn-dark my-5">Retour</a>
        </div>

    </main>

    <!-- =========================================== footer -->
    <!-- <footer class="container-fluid bg-dark text-white">
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
                <div class="col-12 text-light">© Copyright 2020 Super RSS Reader. Tristan && Pauline && Anthony. All
                    rights
                    reserved.</div>
            </div>
        </div>
    </footer> -->


    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/popper.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="../assets/script.js"></script>

</body>

</html>