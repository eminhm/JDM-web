<?php include("config.php"); ?>
<?php include ("data/head.php"); ?>
<?php include ("data/header.php"); ?>

    <!--=============================================
    Carousel
    =============================================!-->
    <div class="container-fluid">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide center-block" data-ride="carousel">
                <!-- Indicators
                =============================================!-->
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <!-- Images
                =============================================!-->
                <div class="carousel-inner grayscale">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/img/gallery/nissan_gtr_r34.jpg" alt="Nissan Skyline GT-R R34">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="/img/gallery/supra_mk3.jpg" alt="Toyota Supra MK3">
                    </div>
                </div>
                <!-- Controls
                =============================================!-->
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="fas fa-arrow-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="fas fa-arrow-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!-- Supermodule
                =============================================!-->
                <div class="supermodule supermodule-center text-center">
                    <h1>
                        Japanese Domestic Market
                    </h1>
                    <h2>
                        <?php echo $lang['intro_home'] ?>
                        <span class="c-red"><?php echo $lang['intro_home_more'] ?></span>
                    </h2>
                    <div class="divider-2"></div>
                    <h5>
                        <a href="#introduction" class="c-white arrow-container">
                            <i class="c-red fas fa-arrow-down"></i>
                        </a>
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="divider-5"></div>

    <!--=============================================
    Content
    =============================================!-->
    <div class="container" id="introduction">

        <!-- Cars
        =============================================!-->
        <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-4 col-3">
                <h1><?php echo $lang['cars'] ?></h1>
                <a href="/cars.php" class="more-container">
                    <span class="c-red">
                        <?php echo $lang['more'] ?>
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </a>
            </div>
            <div class="col-md-4 col-sm-8 col-9">
                <p class="text-right">
                    Erfahren Sie mehr über die Spezifikationen und Kenndaten von japanischen Autos.
                </p>
            </div>

            <div class="col-md-8">
                <hr>
            </div>
        </div>

        <div class="divider-2"></div>

        <!-- Gallery
        =============================================!-->
        <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-4 col-3">
                <h1><?php echo $lang['gallery'] ?></h1>
                <a href="/gallery.php" class="more-container">
                    <span class="c-red">
                        <?php echo $lang['more'] ?>
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </a>
            </div>
            <div class="col-md-4 col-sm-8 col-9">
                <p class="text-right">
                    Unsere Galerie bietet Ihnen eine Bilder-Kollektion von japanischen Autos an.
                </p>
            </div>

            <div class="col-md-8">
                <hr>
            </div>
        </div>

        <div class="divider-2"></div>

        <!-- About
        =============================================!-->
        <div class="row">
            <div class="col-lg-1 col-md-2 col-sm-4 col-3">
                <h1><?php echo $lang['about'] ?></h1>
                <a href="/about.php" class="more-container">
                    <span class="c-red">
                        <?php echo $lang['more'] ?>
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </a>
            </div>
            <div class="col-md-4 col-sm-8 col-9">
                <p class="text-right">
                    Was ist <b>Japanese Domestic Market [JDM]</b>? Erfahren Sie mehr und kontaktieren Sie uns gerne über
                    das Kontaktforumular.
                </p>
            </div>
        </div>
    </div>

    <div class="divider-4"></div>

    <!--=============================================
    Nav Active Script
    =============================================!-->
    <script>
        function active() {
            document.getElementById("home").style.color = "#ff0162"; //#575757
        }

        active();
    </script>

<?php include ("data/footer.php"); ?>
<?php include ("data/foot.php"); ?>

