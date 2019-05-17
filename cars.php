<?php include("config.php"); ?>
<?php include ("data/head.php"); ?>
<?php include ("data/header.php"); ?>

<div class="container-fluid">
    <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide center-block" data-ride="carousel">
            <!-- Indicators
=============================================!-->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            </ol>
            <!-- Images
            =============================================!-->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/wallpaper/nissan_gtr_r34_1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/wallpaper/nissan_gtr_r34_1.jpg" alt="Second slide">
                    <img class="d-block w-100" src="img/wallpaper/nissan_gtr_r34_1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/wallpaper/nissan_gtr_r34_1.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/wallpaper/nissan_gtr_r34_1.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/wallpaper/nissan_gtr_r34_1.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/wallpaper/nissan_gtr_r34_1.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/wallpaper/nissan_gtr_r34_1.jpg" alt="Third slide">
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
        </div>
    </div>
</div>

<div class="divider-2"></div>

<div class="container" id="image-gallery">
    <div class="text-uppercase">
        <h1 class="content-title no-margin"><?php echo $lang['cars'] ?></h1>
        <hr>
    </div>
    <div class="image-gallery">
        <div class="content">
            <a href="nissan.php">
                <div class="content-overlay"></div>
                <img class="content-image img-fluid" src="img/cover/nissan_skyline_cover.png">
                <div class="content-details fadeIn-bottom">
                    <h3 class="content-title">Nissan Skyline</h3>
                    <p class="content-text">GT-R R34</p>
                </div>
            </a>
        </div>
        <div class="content">
            <a href="nissan.php">
                <div class="content-overlay"></div>
                <img class="content-image img-fluid" src="img/cover/toyota_supra_cover.png">
                <div class="content-details fadeIn-bottom">
                    <h3 class="content-title">Toyota Supra</h3>
                    <p class="content-text">MK4</p>
                </div>
            </a>
        </div>
        <div class="content">
            <a href="nissan.php">
                <div class="content-overlay"></div>
                <img class="content-image img-fluid" src="img/cover/toyota_supra_mk3_cover.png">
                <div class="content-details fadeIn-bottom">
                    <h3 class="content-title">Toyota Supra</h3>
                    <p class="content-text">MK3</p>
                </div>
            </a>
        </div>
        <div class="content">
            <a href="nissan.php">
                <div class="content-overlay"></div>
                <img class="content-image img-fluid" src="img/cover/subaru_impreza_wrx_sti_2_cover.png">
                <div class="content-details fadeIn-bottom">
                    <h3 class="content-title">Subaru Impreza</h3>
                    <p class="content-text">WRX STI</p>
                </div>
            </a>
        </div>
        <div class="content">
            <a href="nissan.php">
                <div class="content-overlay"></div>
                <img class="content-image img-fluid" src="img/cover/toyota_ae86_cover.png">
                <div class="content-details fadeIn-bottom">
                    <h4 class="content-title">Toyota Corolla/Sprinter</h4>
                    <p class="content-text">AE86</p>
                </div>
            </a>
        </div>
        <div class="content">
            <a href="nissan.php">
                <div class="content-overlay"></div>
                <img class="content-image img-fluid" src="img/cover/honda_nsx_cover.png">
                <div class="content-details fadeIn-bottom">
                    <h3 class="content-title">Honda ACURA NSX</h3>
                    <p class="content-text">NA1 (1990–1997)</p>
                </div>
            </a>
        </div>
        <div class="content">
            <a href="nissan.php">
                <div class="content-overlay"></div>
                <img class="content-image img-fluid" src="img/cover/nissan_silvia_cover.png">
                <div class="content-details fadeIn-bottom">
                    <h3 class="content-title">Nissan Silvia</h3>
                    <p class="content-text">-</p>
                </div>
            </a>
        </div>
        <div class="content">
            <a href="nissan.php">
                <div class="content-overlay"></div>
                <img class="content-image img-fluid" src="img/cover/mazda_rx7_cover.png">
                <div class="content-details fadeIn-bottom">
                    <h3 class="content-title">Mazda RX7</h3>
                    <p class="content-text">2. Generation (1985–1991)</p>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="divider-5"></div>


    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="row-divider"></div>

        </div>

        <div class="col-2">
            <div id="sidebar">
                <div class="row-divider"></div>
                <h3>Fixed Sidebar</h3>
                <ul class="list-unstyled">
                    <li>
                        <a href="#">
                            Placeholder Link
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Placeholder Link
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Placeholder Link
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Placeholder Link
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Placeholder Link
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    function active() {
        document.getElementById("cars").style.color = "#ff0162"; //#575757
    }

    active();
</script>

<?php include ("data/foot.php"); ?>
<?php include ("data/footer.php"); ?>