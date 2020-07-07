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
    <link rel="stylesheet" href="../assets/theme<?= isset($_POST['colors']) ? $_POST['colors'] : (isset($_COOKIE['colorsCookie']) ? $_COOKIE['colorsCookie'] : 'grey') ?>.css">
</head>
<body>
    <main class="main404 py-4">
        <div class="text-center text-light">
            <h1 class="font-weight-bold">Erreur 404</h1>
            <p class="font-weight-bold">Page non trouvée</p>

            <a href="../index.php" class="btn btn-Color color-light my-2"><b>Retour</b></a>
            <div class="fixed-bottom my-3">
                <img id="img404" src="../assets/img/404.png" alt="Erreur 404">
            </div>
        </div>
    </main>
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/popper.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="../assets/script.js"></script>
</body>
</html>