<?php
require_once 'controllers/index-controller.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Super RSS Reader TP</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/mdb.min.css">
  <link rel="stylesheet" href="../assets/style.css">
  <link rel="stylesheet" href="../assets/theme<?= isset($_POST['colors']) ? $_POST['colors'] : (isset($_COOKIE['colorsCookie']) ? $_COOKIE['colorsCookie'] : 'grey') ?>.css">

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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a href="index.php" class="btn btn-outline-white my-2 my-sm-0">Accueil</a></button>
        </li>
        <li class="nav-item active">
          <a href="<?= $hrefPage[isset($_POST['subject'])?$_POST['subject'][0]:(isset($_COOKIE['subjectCookie1']) ? $_COOKIE['subjectCookie1'] : 0)] ?>" class="btn btn-outline-white my-2 my-sm-0"><?= $titleFluxRSS[isset($_POST['subject'])?$_POST['subject'][0]:(isset($_COOKIE['subjectCookie1']) ? $_COOKIE['subjectCookie1'] : "0")] ?></a>
        </li>
        <li class="nav-item">
        <a href="<?= $hrefPage[isset($_POST['subject'])?$_POST['subject'][1]:(isset($_COOKIE['subjectCookie2']) ? $_COOKIE['subjectCookie2'] : 1)] ?>" class="btn btn-outline-white my-2 my-sm-0"><?= $titleFluxRSS[isset($_POST['subject'])?$_POST['subject'][1]:(isset($_COOKIE['subjectCookie2']) ? $_COOKIE['subjectCookie2'] : "1")] ?></a>
        </li>
        <li class="nav-item">
        <a href="<?= $hrefPage[isset($_POST['subject'])?$_POST['subject'][2]:(isset($_COOKIE['subjectCookie3']) ? $_COOKIE['subjectCookie3'] : 2)] ?>" class="btn btn-outline-white my-2 my-sm-0"><?= $titleFluxRSS[isset($_POST['subject'])?$_POST['subject'][2]:(isset($_COOKIE['subjectCookie3']) ? $_COOKIE['subjectCookie3'] : "2")] ?></a>
        </li>
      </ul>
      <form action="" method="post" class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-white my-2 my-sm-0" name="gear" type="submit"><img class="mr-2" src="assets/img/gear.svg">Paramètres</button>
      </form>
    </div>
  </nav>
  <!-- =========================================== main -->
  <main class="color-light  py-4">
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
                <option value="grey" <?= (isset($_POST['colors'])) ? (($_POST['colors'] == 'grey') ? 'selected' : '') : (isset($_COOKIE['colorsCookie']) ? (($_COOKIE['colorsCookie'] == 'grey') ? 'selected' : 'selected') : '') ?>>
                  Thème gris</option>
                <option value="blue" <?= (isset($_POST['colors'])) ? (($_POST['colors'] == 'blue') ? 'selected' : '') : (isset($_COOKIE['colorsCookie']) ? (($_COOKIE['colorsCookie'] == 'blue') ? 'selected' : '') : '') ?>>
                  Thème Bleu</option>
                <option value="red" <?= (isset($_POST['colors'])) ? (($_POST['colors'] == 'red') ? 'selected' : '') : (isset($_COOKIE['colorsCookie']) ? (($_COOKIE['colorsCookie'] == 'red') ? 'selected' : '') : '') ?>>
                  Thème Rouge</option>
              </select>
              <span class="text-danger"><?= isset($errorMessage['colors']) ? $errorMessage['colors'] : '' ?></span>
            </div>
            <div class="form-group row  justify-content-left">
              <label for="aricles" class="col-sm-6 text-right pr-5">Nombre d’articles affichés par sujet sur
                la page d’accueil :</label>
              <select class="form-control col-sm-5" id="aricles" name="articles">
                <option value="3" <?= (isset($_POST['articles'])) ? (($_POST['articles'] == '3') ? 'selected' : '') : (isset($_COOKIE['articlesCookie']) ? (($_COOKIE['articlesCookie'] == '3') ? 'selected' : 'selected') : '') ?>>3</option>
                <option value="5" <?= (isset($_POST['articles'])) ? (($_POST['articles'] == '5') ? 'selected' : '') : (isset($_COOKIE['articlesCookie']) ? (($_COOKIE['articlesCookie'] == '5') ? 'selected' : '') : '') ?>>5</option>
                <option value="8" <?= (isset($_POST['articles'])) ? (($_POST['articles'] == '8') ? 'selected' : '') : (isset($_COOKIE['articlesCookie']) ? (($_COOKIE['articlesCookie'] == '8') ? 'selected' : '') : '') ?>>8</option>
              </select>
              <span class="text-danger"><?= isset($errorMessage['articles']) ? $errorMessage['articles'] : '' ?></span>
            </div>
            <div class="form-group row  justify-content-center">
              <div class="col-sm-5 text-right pr-5">Choisissez trois sujets :</div>
              <div class="col-sm-5">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="actuality" name="subject[]" value="0" <?= (isset($_POST['subject'])) ? ((in_array('0', $_POST['subject'])) ? 'checked' : '') : ((isset($_COOKIE['subjectCookie1']) || isset($_COOKIE['subjectCookie2']) || isset($_COOKIE['subjectCookie3'])) ? (($_COOKIE['subjectCookie1'] == '0' || $_COOKIE['subjectCookie2'] == '0' || $_COOKIE['subjectCookie3'] == '0') ? 'checked' : '') : '') ?>>
                  <label class="form-check-label" for="actuality">Actualité</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="file" name="subject[]" value="1" <?= (isset($_POST['subject'])) ? ((in_array('1', $_POST['subject'])) ? 'checked' : '') : ((isset($_COOKIE['subjectCookie1']) || isset($_COOKIE['subjectCookie2']) || isset($_COOKIE['subjectCookie3'])) ? (($_COOKIE['subjectCookie1'] == '1' || $_COOKIE['subjectCookie2'] == '1' || $_COOKIE['subjectCookie3'] == '1') ? 'checked' : '') : '') ?>>
                  <label class="form-check-label" for="file">Dossier</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="apps" name="subject[]" value="2" <?= (isset($_POST['subject'])) ? ((in_array('2', $_POST['subject'])) ? 'checked' : '') : ((isset($_COOKIE['subjectCookie1']) || isset($_COOKIE['subjectCookie2']) || isset($_COOKIE['subjectCookie3'])) ? (($_COOKIE['subjectCookie1'] == '2' || $_COOKIE['subjectCookie2'] == '2' || $_COOKIE['subjectCookie3'] == '2') ? 'checked' : '') : '') ?>>
                  <label class="form-check-label" for="apps">Appli logiciel</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="security" name="subject[]" value="3" <?= (isset($_POST['subject'])) ? ((in_array('3', $_POST['subject'])) ? 'checked' : '') : ((isset($_COOKIE['subjectCookie1']) || isset($_COOKIE['subjectCookie2']) || isset($_COOKIE['subjectCookie3'])) ? (($_COOKIE['subjectCookie1'] == '3' || $_COOKIE['subjectCookie2'] == '3' || $_COOKIE['subjectCookie3'] == '3') ? 'checked' : '') : '') ?>>
                  <label class="form-check-label" for="security">Sécurité</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="pc" name="subject[]" value="4" <?= (isset($_POST['subject'])) ? ((in_array('4', $_POST['subject'])) ? 'checked' : '') : ((isset($_COOKIE['subjectCookie1']) || isset($_COOKIE['subjectCookie2']) || isset($_COOKIE['subjectCookie3'])) ? (($_COOKIE['subjectCookie1'] == '4' || $_COOKIE['subjectCookie2'] == '4' || $_COOKIE['subjectCookie3'] == '4') ? 'checked' : '') : '') ?>>
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
    } else if ($starterCookie == false) {
      $starterCookie = true;
    ?>

      <div class="container-fluid">
        <div class="row text-center">
          <div class="col-md color-dark mx-2 p-0">
            <h2><?= $titleFluxRSS['0'] ?></h2>
          </div>
          <div class="col-md color-dark mx-2 p-0">
            <h2><?= $titleFluxRSS['1'] ?></h2>
          </div>
          <div class="col-md color-dark mx-2 p-0">
            <h2><?= $titleFluxRSS['2'] ?></h2>
          </div>
        </div>
        <?php
        for ($row = 0; $row < $numberArticles; $row++) {
        ?>
          <div class="row">
            <?php
            for ($col = 0; $col < 3; $col++) {
              $article = $col + 1;
            ?>
              <div class="col-sm color-dark mx-2 p-0">
                <div class="card m-2 bg-white">
                  <div class="row">
                    <div class="col-2 col-md-1 align-self-center">
                      <div class="rounded-left d-block <?= $colorFluxRSS[$col] ?>" style="width:3rem; height: 6rem"></div>
                    </div>
                    <div class="col-8 align-self-center">
                      <p class="card-title m-0 p-0 ml-2">
                        <?= $fluxRSS[$col]->channel->item[$row]->title ?></p>
                    </div>
                    <div class="col-1 p-0 align-self-center">
                      <img src="assets/img/loup.svg" style="width:2rem" alt="Voir plus" title="Voir plus" data-toggle="modal" data-target="#<?= 'id' . $col . $row ?>">
                    </div>
                    <div class="col-1 p-0 align-self-center">
                      <a href="<?= $fluxRSS[$col]->channel->item[$row]->link ?>" target="_blank">
                        <img src="assets/img/arrow.svg" style="width:2rem" alt="Aller vers l'article" title="Aller vers l'article">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="<?= 'id' . $col . $row ?>" tabindex="-1" role="dialog" aria-labelledby="<?= 'id' . $col . $row ?>" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header d-block p-0 text-center">
                      <div class="<?= $colorFluxRSS[$col] ?>">
                        <h2 class="card-header-title mb-3"><?= $titleFluxRSS[$col] ?></h2>
                        <p class="mb-0"><i class="fas fa-calendar mr-2"></i><?= strftime('%d/%m/%y à %Hh%M', strtotime(($fluxRSS[$col]->channel->item[$row])->pubDate)) ?></p>
                      </div>
                    </div>
                    <div class="modal-body text-center">
                      <!-- Text -->
                      <p class="font-weight-bold">
                        <?= $fluxRSS[$col]->channel->item[$row]->title ?></p>
                      <p class="card-text">
                        <?= $fluxRSS[$col]->channel->item[$row]->description ?></p>
                    </div>
                    <div class="modal-footer">
                      <a class="orange-text d-flex flex-row-reverse p-2" data-dismiss="modal">
                        <h5 class="waves-effect waves-light text-dark">Fermer</h5>
                      </a>
                      <a href="<?= $fluxRSS[$col]->channel->item[$row]->link ?>" target="_blank" class="orange-text d-flex flex-row-reverse p-2">
                        <h5 class="waves-effect waves-light">Read more<i class="fas fa-angle-double-right ml-2"></i></h5>
                      </a>

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
    <?php
    } else {
    ?>
      <div class="container-fluid">
        <div class="row text-center">

          <?php
          for ($col = 0; $col < 3; $col++) {
            $article = $col + 1;
          ?>

            <div class="col-lg rounded shadow color-dark m-2 py-2 px-0">
              <h2 class="font-weight-bold"><?= $titleFluxRSS[$_COOKIE['subjectCookie' . $article]] ?></h2>
              <div class="row mx-2">

                <?php
                for ($row = 0; $row < $numberArticles; $row++) {
                ?>
                  <div class="col-md-12 p-0">
                    <div class="card m-2 bg-white">
                      <div class="row m-0">
                        <div class="col-2 col-md-1 p-0 align-self-center">
                          <div class="rounded d-block <?= $colorFluxRSS[$_COOKIE['subjectCookie' . $article]] ?>" style="width:3rem; height: 6rem"></div>
                        </div>
                        <div class="col p-0 align-self-center">
                          <p class="card-title textcolor-dark m-0 p-0">
                            <?= $fluxRSS[$_COOKIE['subjectCookie' . $article]]->channel->item[$row]->title ?></p>
                        </div>
                        <div class="col-1 p-0 align-self-center">
                          <img src="assets/img/loup.svg" style="width:2rem" alt="Voir plus" title="Voir plus" data-toggle="modal" data-target="#<?= 'id' . $col . $row ?>">
                        </div>
                        <div class="col-1 p-0 align-self-center">
                          <a href="<?= $fluxRSS[$_COOKIE['subjectCookie' . $article]]->channel->item[$row]->link ?>" target="_blank">
                            <img src="assets/img/arrow.svg" style="width:2rem" alt="Aller vers l'article" title="Aller vers l'article">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="<?= 'id' . $col . $row ?>" tabindex="-1" role="dialog" aria-labelledby="<?= 'id' . $col . $row ?>" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content rounded">
                        <div class="modal-header d-block p-0 text-center">
                          <div class="<?= $colorFluxRSS[$_COOKIE['subjectCookie' . $article]] ?> shadow">
                            <h2 class="card-header-title textcolor-dark font-weight-bold mb-3"><?= $titleFluxRSS[$_COOKIE['subjectCookie' . $article]] ?></h2>
                            <p class="mb-0 textcolor-dark"><i class="fas fa-calendar  mr-2"></i><?= strftime('%d/%m/%y à %Hh%M', strtotime(($fluxRSS[$_COOKIE['subjectCookie' . $article]]->channel->item[$row])->pubDate)) ?></p>
                          </div>
                        </div>
                        <div class="modal-body textcolor-dark text-center">
                          <!-- Text -->
                          <p class="font-weight-bold">
                            <?= $fluxRSS[$_COOKIE['subjectCookie' . $article]]->channel->item[$row]->title ?></p>
                          <p class="card-text">
                            <?= $fluxRSS[$_COOKIE['subjectCookie' . $article]]->channel->item[$row]->description ?></p>
                        </div>
                        <div class="modal-footer">
                          <a class="orange-text d-flex flex-row-reverse p-2" data-dismiss="modal">
                            <h5 class="waves-effect waves-light text-dark">Fermer</h5>
                          </a>
                          <a href="<?= $fluxRSS[$_COOKIE['subjectCookie' . $article]]->channel->item[$row]->link ?>" target="_blank" class="orange-text d-flex flex-row-reverse p-2">
                            <h5 class="waves-effect waves-light">Read more<i class="fas fa-angle-double-right ml-2"></i></h5>
                          </a>

                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                }
                ?>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    <?php } ?>
  </main>
  <!-- =========================================== footer -->
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