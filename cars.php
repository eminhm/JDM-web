<?php include("config.php"); ?>
<?php include ("data/head.php"); ?>
<?php include ("data/header.php"); ?>

    <div class="divider-6"></div>

    <div class="container" id="image-gallery">
        <div class="text-uppercase">
            <h1 class="content-title no-margin"><?php echo $lang['cars'] ?></h1>
            <hr>
        </div>
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
                    <img class="content-image img-fluid" src="/img/cars/cover/subaru_impreza_wrx_sti_2_cover.png">
                    <div class="content-details fadeIn-bottom">
                        <h3 class="content-title">Subaru Impreza</h3>
                        <p class="content-text">WRX STI</p>
                    </div>
                </a>
            </div>
            <div class="content">
                <a class="disabled">
                    <div class="content-overlay"></div>
                    <div class="cs-module">
                        <?php echo $lang['coming_soon'] ?>
                    </div>
                    <img class="content-image img-fluid" src="/img/cars/cover/toyota_ae86_cover.png">
                    <div class="content-details fadeIn-bottom">
                        <h4 class="content-title">Toyota Corolla/Sprinter</h4>
                        <p class="content-text">AE86</p>
                    </div>
                </a>
            </div>
            <div class="content">
                <a class="disabled">
                    <div class="content-overlay"></div>
                    <div class="cs-module">
                        <?php echo $lang['coming_soon'] ?>
                    </div>
                    <img class="content-image img-fluid" src="/img/cars/cover/honda_nsx_cover.png">
                    <div class="content-details fadeIn-bottom">
                        <h4 class="content-title">Honda ACURA NSX</h4>
                        <p class="content-text">NA1 (1990–1997)</p>
                    </div>
                </a>
            </div>
            <div class="content">
                <a class="disabled">
                    <div class="content-overlay"></div>
                    <div class="cs-module">
                        <?php echo $lang['coming_soon'] ?>
                    </div>
                    <img class="content-image img-fluid" src="/img/cars/cover/nissan_silvia_cover.png">
                    <div class="content-details fadeIn-bottom">
                        <h3 class="content-title">Nissan Silvia</h3>
                        <p class="content-text">-</p>
                    </div>
                </a>
            </div>
            <div class="content">
                <a class="disabled">
                    <div class="content-overlay"></div>
                    <div class="cs-module">
                        <?php echo $lang['coming_soon'] ?>
                    </div>
                    <img class="content-image img-fluid" src="/img/cars/cover/mazda_rx7_cover.png">
                    <div class="content-details fadeIn-bottom">
                        <h3 class="content-title">Mazda RX7</h3>
                        <p class="content-text">2. Generation</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="divider-4"></div>

    <script>
        function active() {
            document.getElementById("cars").style.color = "#ff0162"; //#575757
        }

        active();
    </script>

<?php include ("data/foot.php"); ?>
<?php include ("data/footer.php"); ?>