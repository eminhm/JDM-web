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
            <img src="img/placeholder.png" class="img-fluid">
        </a>
        <a href="##" class="lightbox" id="img1">
            <img src="img/placeholder.png" class="img-fluid">
        </a>

        <!-- Image 2
        =============================================!-->
        <a href="#img2">
            <img class="img-fluid" src="img/placeholder.png">
        </a>
        <a href="##" class="lightbox" id="img2">
            <img src="img/placeholder.png" class="img-fluid">
        </a>

        <!-- Image 3
        =============================================!-->
        <a href="#img3">
            <img class="img-fluid" src="img/placeholder.png">
        </a>
        <a href="##" class="lightbox" id="img3">
            <img src="img/placeholder.png" class="img-fluid">
        </a>

        <!-- Image 4
        =============================================!-->
        <a href="#img4">
            <img class="img-fluid" src="img/placeholder.png">
        </a>
        <a href="##" class="lightbox" id="img4">
            <img src="img/placeholder.png" class="img-fluid">
        </a>

        <!-- Image 5
        =============================================!-->
        <a href="#img5">
            <img class="img-fluid" src="img/placeholder.png">
        </a>
        <a href="##" class="lightbox" id="img5">
            <img src="img/placeholder.png" class="img-fluid">
        </a>

        <!-- Image 6
        =============================================!-->
        <a href="#img6">
            <img class="img-fluid" src="img/placeholder.png">
        </a>
        <a href="##" class="lightbox" id="img6">
            <img src="img/placeholder.png" class="img-fluid">
        </a>

        <!-- Image 7
        =============================================!-->
        <a href="#img7">
            <img class="img-fluid" src="img/placeholder.png">
        </a>
        <a href="##" class="lightbox" id="img7">
            <img src="img/placeholder.png" class="img-fluid">
        </a>

        <!-- Image 8
        =============================================!-->
        <a href="#img8">
            <img class="img-fluid" src="img/placeholder.png">
        </a>
        <a href="##" class="lightbox" id="img8">
            <img src="img/placeholder.png" class="img-fluid">
        </a>
    </div>
</div>

<div class="divider-5"></div>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <h4 class="inline">Nissan Skyline&nbsp;</h4>
            <h2 class="font-jap c-red inline"><strong>[ 日産・スカイライン ]</strong></h2>
            <p class="text-center">
                <?php echo $lang['intro-skyline-r34'] ?>
            </p>
        </div>
    </div>
</div>

<div class="divider-5"></div>

<script>
    function home() {
        document.getElementById("home").style.color = "#ff0162"; //#575757
    }

    home();
</script>

<?php include ("data/foot.php"); ?>
<?php include ("data/footer.php"); ?>