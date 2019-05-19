<?php include("../config.php"); ?>
<?php include("../data/head.php"); ?>
<?php include("../data/header.php"); ?>

    <div class="parallax" style="background-image: url(/img/cars/n_skyline_r34/skyline_gtr_r34.jpg);">
        <div class="container-fluid">
            <div class="supermodule supermodule-center text-center">
                <h1>
                    Nissan Skyline
                </h1>
                <h4>GT-R R34</h4>
                <div class="divider-2"></div>
                <h5>
                    <a href="#image-gallery" class="c-white arrow-container">
                        <i class="fas fa-arrow-down"></i>
                    </a>
                </h5>
            </div>
        </div>
    </div>

    <div class="container" id="image-gallery">
        <div class="image-gallery car-gallery">

            <!-- Image 1
            =============================================!-->
            <a href="#img1">
                <img src="/img/cars/n_skyline_r34/1_s.jpg" class="img-fluid">
            </a>
            <a href="##" class="lightbox" id="img1">
                <img src="/img/cars/n_skyline_r34/1.jpg" class="img-fluid">
            </a>

            <!-- Image 2
            =============================================!-->
            <a href="#img2">
                <img src="/img/cars/n_skyline_r34/2_s.jpg" class="img-fluid">
            </a>
            <a href="##" class="lightbox" id="img2">
                <img src="/img/cars/n_skyline_r34/2.jpg" class="img-fluid">
            </a>

            <!-- Image 3
            =============================================!-->
            <a href="#img3">
                <img src="/img/cars/n_skyline_r34/3_s.jpg" class="img-fluid">
            </a>
            <a href="##" class="lightbox" id="img3">
                <img src="/img/cars/n_skyline_r34/3.jpg" class="img-fluid">
            </a>

            <!-- Image 4
            =============================================!-->
            <a href="#img4">
                <img src="/img/cars/n_skyline_r34/4_s.jpg" class="img-fluid">
            </a>
            <a href="##" class="lightbox" id="img4">
                <img src="/img/cars/n_skyline_r34/4.jpg" class="img-fluid">
            </a>

            <!-- Image 5
            =============================================!-->
            <a href="#img5">
                <img src="/img/cars/n_skyline_r34/5_s.jpg" class="img-fluid">
            </a>
            <a href="##" class="lightbox" id="img5">
                <img src="/img/cars/n_skyline_r34/5.jpg" class="img-fluid">
            </a>

            <!-- Image 6
            =============================================!-->
            <a href="#img6">
                <img src="/img/cars/n_skyline_r34/6_s.jpg" class="img-fluid">
            </a>
            <a href="##" class="lightbox" id="img6">
                <img src="/img/cars/n_skyline_r34/6.jpg" class="img-fluid">
            </a>

            <!-- Image 7
            =============================================!-->
            <a href="#img7">
                <img src="/img/cars/n_skyline_r34/7_s.jpg" class="img-fluid">
            </a>
            <a href="##" class="lightbox" id="img7">
                <img src="/img/cars/n_skyline_r34/7.jpg" class="img-fluid">
            </a>

            <!-- Image 8
            =============================================!-->
            <a href="#img8">
                <img src="/img/cars/n_skyline_r34/8_s.jpg" class="img-fluid">
            </a>
            <a href="##" class="lightbox" id="img8">
                <img src="/img/cars/n_skyline_r34/8_s.jpg" class="img-fluid">
            </a>
        </div>
    </div>

    <div class="divider-5"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="inline">Nissan Skyline&nbsp;</h3>
                <h2 class="font-jap c-red inline"><strong>[ 日産・スカイライン ]</strong></h2>
                <p class="c-white">
                    <strong>
                        <?php echo $lang['intro-skyline-r34'] ?>
                    </strong>
                </p>

                <div class="divider-1"></div>

                <div class="embed-responsive embed-responsive-16by9">
                    <video src="../video/skyline_r34.mp4" poster="/img/cars/n_skyline_r34/skyline_gtr_r34.jpg" class="border" controls></video>
                </div>

                <div class="divider-2"></div>
            </div>

            <div class="col-md-4">
                <table class="table">
                    <h3 class="table-header">
                        Nissan Skyline GT-R R34 <?php echo $lang['specs'] ?>
                    </h3>
                    <tr>
                        <th><?php echo $lang['production'] ?></th>
                        <td>1998–2002</td>
                    </tr>
                    <tr>
                        <th><?php echo $lang['body_style'] ?></th>
                        <td>Limousine, Coupé</td>
                    </tr>
                    <tr>
                        <th><?php echo $lang['gearing_type'] ?></th>
                        <td><?php echo $lang['manual'] ?></td>
                    </tr>
                    <tr>
                        <th><?php echo $lang['wheel_drive'] ?></th>
                        <td><?php echo $lang['all_wheel'] ?></td>
                    </tr>
                    <tr>
                        <th><?php echo $lang['propellant'] ?></th>
                        <td><?php echo $lang['gasoline'] ?></td>
                    </tr>
                    <tr>
                        <th><?php echo $lang['consumption'] ?></th>
                        <td>13,03 l/100 km</td>
                    </tr>
                    <tr>
                        <th><?php echo $lang['co2'] ?></th>
                        <td>253 g/km</td>
                    </tr>
                    <tr>
                        <th><?php echo $lang['cylinders'] ?></th>
                        <td>6</td>
                    </tr>
                    <tr>
                        <th><?php echo $lang['doors'] ?></th>
                        <td>3</td>
                    </tr>
                    <tr>
                        <th><?php echo $lang['ps'] ?></th>
                        <td>280 PS</td>
                    </tr>
                    <tr>
                        <th><?php echo $lang['kerb_weight'] ?></th>
                        <td>1'700 kg</td>
                    </tr>
                    <tr>
                        <th><?php echo $lang['cubic_capacity'] ?></th>
                        <td>2'564 cm3</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="divider-3"></div>

    <script>
        function active() {
            document.getElementById("cars").style.color = "#ff0162"; //#575757
        }

        active();
    </script>

<?php include("../data/foot.php"); ?>
<?php include("../data/footer.php"); ?>