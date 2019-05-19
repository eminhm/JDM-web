<?php include("../config.php"); ?>
<?php include("../data/head.php"); ?>
<?php include("../data/header.php"); ?>

    <div class="parallax" style="background-image: url(/img/cars/t_supra_mk3/t_supra_mk3.jpg);">
        <div class="container-fluid">
            <div class="supermodule supermodule-center text-center">
                <h1>
                    Toyota Supra
                </h1>
                <h4>MK3</h4>
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
                <img src="/img/cars/t_supra_mk3/1_s.jpg" class="img-fluid">
            </a>
            <a href="##" class="lightbox" id="img1">
                <img src="/img/cars/t_supra_mk3/1.jpg" class="img-fluid">
            </a>

            <!-- Image 2
            =============================================!-->
            <a href="#img2">
                <img src="/img/cars/t_supra_mk3/2_s.jpg" class="img-fluid">
            </a>
            <a href="##" class="lightbox" id="img2">
                <img src="/img/cars/t_supra_mk3/2.jpg" class="img-fluid">
            </a>

            <!-- Image 3
            =============================================!-->
            <a href="#img3">
                <img src="/img/cars/t_supra_mk3/3_s.jpg" class="img-fluid">
            </a>
            <a href="##" class="lightbox" id="img3">
                <img src="/img/cars/t_supra_mk3/3.jpg" class="img-fluid">
            </a>

            <!-- Image 4
            =============================================!-->
            <a href="#img4">
                <img src="/img/cars/t_supra_mk3/4_s.jpg" class="img-fluid">
            </a>
            <a href="##" class="lightbox" id="img4">
                <img src="/img/cars/t_supra_mk3/4.jpg" class="img-fluid">
            </a>

            <!-- Image 5
            =============================================!-->
            <a href="#img5">
                <img src="/img/cars/t_supra_mk3/5_s.jpg" class="img-fluid">
            </a>
            <a href="##" class="lightbox" id="img5">
                <img src="/img/cars/t_supra_mk3/5.jpg" class="img-fluid">
            </a>

            <!-- Image 6
            =============================================!-->
            <a href="#img6">
                <img src="/img/cars/t_supra_mk3/6_s.jpg" class="img-fluid">
            </a>
            <a href="##" class="lightbox" id="img6">
                <img src="/img/cars/t_supra_mk3/6.jpg" class="img-fluid">
            </a>

            <!-- Image 7
            =============================================!-->
            <a href="#img7">
                <img src="/img/cars/t_supra_mk3/7_s.jpg" class="img-fluid">
            </a>
            <a href="##" class="lightbox" id="img7">
                <img src="/img/cars/t_supra_mk3/7.jpg" class="img-fluid">
            </a>

            <!-- Image 8
            =============================================!-->
            <a href="#img8">
                <img src="/img/cars/t_supra_mk3/8_s.jpg" class="img-fluid">
            </a>
            <a href="##" class="lightbox" id="img8">
                <img src="/img/cars/t_supra_mk3/8_s.jpg" class="img-fluid">
            </a>
        </div>
    </div>

    <div class="divider-5"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="inline">Toyota Supra&nbsp;</h3>
                <h2 class="font-jap c-red inline"><strong>[ トヨタ・スープラ ]</strong></h2>
                <p class="c-white">
                    <strong>
                        <?php echo $lang['intro-supra-mk3'] ?>
                    </strong>
                </p>

                <div class="divider-1"></div>

                <div class="embed-responsive embed-responsive-16by9">
                    <video src="../video/supra_mk3.mp4" poster="/img/cars/t_supra_mk3/t_supra_mk3.jpg" class="border" controls></video>
                </div>

                <div class="divider-2"></div>
            </div>

            <div class="col-md-4">
                <table class="table">
                    <h3 class="table-header">
                        Toyota Supra MK3 <?php echo $lang['specs'] ?>
                    </h3>
                    <tr>
                        <th><?php echo $lang['production'] ?></th>
                        <td>1986–1993</td>
                    </tr>
                    <tr>
                        <th><?php echo $lang['body_style'] ?></th>
                        <td>Kombicoupé</td>
                    </tr>
                    <tr>
                        <th><?php echo $lang['gearing_type'] ?></th>
                        <td><?php echo $lang['automatic'] ?> & <?php echo $lang['manual'] ?></td>
                    </tr>
                    <tr>
                        <th><?php echo $lang['wheel_drive'] ?></th>
                        <td><?php echo $lang['rear_wheel'] ?></td>
                    </tr>
                    <tr>
                        <th><?php echo $lang['propellant'] ?></th>
                        <td><?php echo $lang['gasoline'] ?></td>
                    </tr>
                    <tr>
                        <th><?php echo $lang['consumption'] ?></th>
                        <td>10,86 l/100 km</td>
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
                        <td>235 PS</td>
                    </tr>
                    <tr>
                        <th><?php echo $lang['kerb_weight'] ?></th>
                        <td>1'610 kg</td>
                    </tr>
                    <tr>
                        <th><?php echo $lang['cubic_capacity'] ?></th>
                        <td>2'953 cm3</td>
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