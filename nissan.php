<?php include("config.php"); ?>
<?php include ("data/head.php"); ?>
<?php include ("data/header.php"); ?>

<div class="parallax" style="background-image: url(img/skyline.jpg);">
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
            <img src="img/placeholder/placeholder.png" class="img-fluid">
        </a>
        <a href="##" class="lightbox" id="img1">
            <img src="img/placeholder/placeholder.png" class="img-fluid">
        </a>

        <!-- Image 2
        =============================================!-->
        <a href="#img2">
            <img class="img-fluid" src="img/placeholder/placeholder.png">
        </a>
        <a href="##" class="lightbox" id="img2">
            <img src="img/placeholder/placeholder.png" class="img-fluid">
        </a>

        <!-- Image 3
        =============================================!-->
        <a href="#img3">
            <img class="img-fluid" src="img/placeholder/placeholder.png">
        </a>
        <a href="##" class="lightbox" id="img3">
            <img src="img/placeholder/placeholder.png" class="img-fluid">
        </a>

        <!-- Image 4
        =============================================!-->
        <a href="#img4">
            <img class="img-fluid" src="img/placeholder/placeholder.png">
        </a>
        <a href="##" class="lightbox" id="img4">
            <img src="img/placeholder/placeholder.png" class="img-fluid">
        </a>

        <!-- Image 5
        =============================================!-->
        <a href="#img5">
            <img class="img-fluid" src="img/placeholder/placeholder.png">
        </a>
        <a href="##" class="lightbox" id="img5">
            <img src="img/placeholder/placeholder.png" class="img-fluid">
        </a>

        <!-- Image 6
        =============================================!-->
        <a href="#img6">
            <img class="img-fluid" src="img/placeholder/placeholder.png">
        </a>
        <a href="##" class="lightbox" id="img6">
            <img src="img/placeholder/placeholder.png" class="img-fluid">
        </a>

        <!-- Image 7
        =============================================!-->
        <a href="#img7">
            <img class="img-fluid" src="img/placeholder/placeholder.png">
        </a>
        <a href="##" class="lightbox" id="img7">
            <img src="img/placeholder/placeholder.png" class="img-fluid">
        </a>

        <!-- Image 8
        =============================================!-->
        <a href="#img8">
            <img class="img-fluid" src="img/placeholder/placeholder.png">
        </a>
        <a href="##" class="lightbox" id="img8">
            <img src="img/placeholder/placeholder.png" class="img-fluid">
        </a>
    </div>
</div>

<div class="divider-5"></div>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3 text-center">
            <h4 class="inline">Nissan Skyline&nbsp;</h4>
            <h2 class="font-jap c-red inline"><strong>[ 日産・スカイライン ]</strong></h2>
            <p>
                <strong>
                    <?php echo $lang['intro-skyline-r34'] ?>
                </strong>
            </p>

            <div class="divider-5"></div>
        </div>

        <div class="col-md-6">
            <table class="table">
                <h3 class="table-header">
                    Nissan Skyline GT-R R34 <?php echo $lang['specs'] ?>
                </h3>
                <tr>
                    <th>Produktionszeitraum</th>
                    <td>1998–2002</td>
                </tr>
                <tr>
                    <th>Getriebe</th>
                    <td>Schaltgetriebe manuell</td>
                </tr>
                <tr>
                    <th>Rad-Antrieb</th>
                    <td>Allrad</td>
                </tr>
                <tr>
                    <th>Treibstoff</th>
                    <td>Benzin</td>
                </tr>
                <tr>
                    <th>Zylinder</th>
                    <td>6</td>
                </tr>
                <tr>
                    <th>Türen</th>
                    <td>3</td>
                </tr>
                <tr>
                    <th>Motorleistung / PS</th>
                    <td>250 PS</td>
                </tr>
                <tr>
                    <th>Leergewicht</th>
                    <td>1'700 kg</td>
                </tr>
                <tr>
                    <th>Hubraum</th>
                    <td>2'564 cm3</td>
                </tr>
            </table>
        </div>

        <div class="col-6">
            <p class="text-justify">
                <?php echo $lang['intro-skyline-r34'] ?>
            </p>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="border embed-responsive-item" src="video/skyline_r34.mp4" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div class="divider-5"></div>

<script>
    function active() {
        document.getElementById("cars").style.color = "#ff0162"; //#575757
    }

    active();
</script>

<?php include ("data/foot.php"); ?>
<?php include ("data/footer.php"); ?>