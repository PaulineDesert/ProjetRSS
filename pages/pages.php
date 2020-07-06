<?php

require_once '../controllers/index-controller.php';
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
    <div class="container">
        <div class="row">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-1 peach-gradient">
                    </div>
                    <div class="col-md-11">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?= $titleFluxRSS[$_COOKIE['subjectCookie1']] ?></h5>
                            <p class="card-text text-center"><?= $fluxRSS[$_COOKIE['subjectCookie1']]->channel->item->description ?>
                            <div class="text-right"><button class="<?= $colorFluxRSS[$_COOKIE['subjectCookie' . $article]] ?>">Read more <i class="fas fa-arrow-right"></i> </button></div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/popper.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="../assets/script.js"></script>

</body>