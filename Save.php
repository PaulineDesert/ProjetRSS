<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>