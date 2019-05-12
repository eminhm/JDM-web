<!--=============================================
Start of Navigation
=============================================!-->

<nav class="navbar navbar-expand-lg" id="navbar">
    <button class="navbar-toggler pull-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars c-white"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a id="home" class="nav-link" href="./">
                    <?php echo $lang['home'] ?>
                </a>
            </li>
            <li class="nav-item">
                <a id="gallery" class="nav-link" href="cars.php">
                    <?php echo $lang['cars'] ?>
                </a>
            </li>
            <li class="nav-item">
                <a id="gallery" class="nav-link" href="#">
                    <?php echo $lang['gallery'] ?>
                </a>
            </li>
            <li class="nav-item">
                <a id="about" class="nav-link" href="nissan.php">
                    <?php echo $lang['about'] ?>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle pointer" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $lang['language'] ?>
                </a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="?lang=en">English</a>
                    <a class="dropdown-item" href="?lang=de">Deutsch</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="logo-center">
        <a href="./">
            <img src="img/jdm_logo.png" width="40px">
        </a>
    </div>
</nav>

<!--=============================================
End of Navigation
=============================================!-->