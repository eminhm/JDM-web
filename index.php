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
    Cars Gallery
    =============================================!-->
    <div class="container" id="image-gallery">

        <!-- Head Title
        =============================================!-->
        <div class="row">
            <div class="col-md-11">
                <div class="text-uppercase">
                    <h1 class="content-title"><?php echo $lang['cars'] ?></h1>
                </div>
            </div>

            <div class="col-md-1">
                <a href="/cars.php" class="more-container">
                    <span class="c-red"><?php echo $lang['more'] ?>
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </a>
            </div>

            <div class="col-md-12">
                <hr class="no-margin">
                <div class="divider-1"></div>
            </div>
        </div>

        <!-- Image Gallery
        =============================================!-->
        <div class="image-gallery">
            <div class="content">
                <a href="cars/n_skyline_r34.php">
                    <div class="content-overlay"></div>
                    <img class="content-image img-fluid" src="/img/cars/cover/nissan_skyline_cover.png">
                    <div class="content-details fadeIn-bottom">
                        <h3 class="content-title">Nissan Skyline</h3>
                        <p class="content-text">GT-R R34</p>
                    </div>
                </a>
            </div>
            <div class="content">
                <a href="cars/t_supra_mk3.php">
                    <div class="content-overlay"></div>
                    <img class="content-image img-fluid" src="/img/cars/cover/toyota_supra_mk3_cover.png">
                    <div class="content-details fadeIn-bottom">
                        <h3 class="content-title">Toyota Supra</h3>
                        <p class="content-text">MK3</p>
                    </div>
                </a>
            </div>
            <div class="content">
                <a class="disabled">
                    <div class="content-overlay"></div>
                    <div class="cs-module">
                        <?php echo $lang['coming_soon'] ?>
                    </div>
                    <img class="content-image img-fluid" src="/img/cars/cover/toyota_supra_cover.png">
                    <div class="content-details fadeIn-bottom">
                        <h3 class="content-title">Toyota Supra</h3>
                        <p class="content-text">MK4</p>
                    </div>
                </a>
            </div>
            <div class="content">
                <a class="disabled">
                    <div class="content-overlay"></div>
                    <div class="cs-module">
                        <?php echo $lang['coming_soon'] ?>
                    </div>
                    <img class="content-image img-fluid" src="/img/cars/cover/subaru_impreza_wrx_sti_2_cover.png">
                    <div class="content-details fadeIn-bottom">
                        <h3 class="content-title">Subaru Impreza</h3>
                        <p class="content-text">WRX STI</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="divider-3"></div>
    </div>

    <!--=============================================
    Content
    =============================================!-->
    <div class="container" id="introduction">

        <hr>
        <div class="divider-1"></div>

        <!-- Gallery
        =============================================!-->
        <div class="row">
            <div class="col-md-1">
                <h1><?php echo $lang['gallery'] ?></h1>
                <a href="/gallery.php" class="more-container">
                    <span class="c-red">
                        <?php echo $lang['more'] ?>
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </a>
            </div>
            <div class="col-md-4">
                <p class="text-right">
                    <?php echo $lang['gallery_text'] ?>
                </p>
            </div>


            <div class="divider-2"></div>

            <!-- About
            =============================================!-->
            <div class="col-md-1 offset-md-2">
                <h1><?php echo $lang['about'] ?></h1>
                <a href="/about.php" class="more-container">
                    <span class="c-red">
                        <?php echo $lang['more'] ?>
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </a>
            </div>
            <div class="col-md-4">
                <p class="text-right">
                    <?php echo $lang['cars_text'] ?>
                </p>
            </div>
        </div>
    </div>

    <div class="divider-5"></div>

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

