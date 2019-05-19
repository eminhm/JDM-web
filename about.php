<?php include("config.php"); ?>
<?php include ("data/head.php"); ?>
<?php include ("data/header.php"); ?>

    <div class="divider-8"></div>

    <div class="container">
        <div class="row">
            <div class="line-trough"></div>

            <div class="col-md-4 offset-md-4">
                <div class="text-center supermodule">
                    <h5 class="text-uppercase c-grey ls"><?php echo $lang['about'] ?></h5>
                    <h1 class="about-title">
                        Japanese<br>Domestic<br>Market
                    </h1>
                    <div class="divider-2"></div>
                    <h5>
                        <a href="#about-introduction" class="c-white arrow-container">
                            <i class="fas fa-arrow-down"></i>
                        </a>
                    </h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12" id="about-introduction">
                <div class="divider-4"></div>
                <hr>
                <div class="divider-2"></div>
                <h2 class="text-center ls text-uppercase line"><?php echo $lang['about'] ?></h2>
                <p class="text-justify column-3">
                    <?php echo $lang['about_text_1'] ?>

                    <span class="c-grey">
                        <?php echo $lang['about_text_2'] ?>
                    </span>
                </p>
                <div class="divider-2"></div>
                <hr>
            </div>
        </div>

        <div class="row" id="c-form">
            <div class="col-md-12">
                <div class="divider-3"></div>
            </div>
            <div class="col-md-4 well">
                <img src="img/placeholder/portrait.gif" class="img-fluid portrait">

                <div class="divider-2"></div>

                <h1 class="text-center">Emin Can Homalioglu&nbsp;
                    <a href="mailto:eh@onekksu.com">
                        <i class="fas fa-envelope"></i>
                    </a>
                </h1>

                <hr>


                <ul class="list-unstyled list-horz text-center">
                    <small><?php echo $lang['sm_msg'] ?></small><br>

                    <li>
                        <a rel="nofollow" target="_blank" href="https://www.instagram.com">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" target="_blank" href="https://twitter.com">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" target="_blank" href="https://www.facebook.com">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" target="_blank" href="https://www.youtube.com">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
                <form id="contact" action="" method="post">
                    <h3><?php echo $lang['contactform'] ?></h3>
                    <p><?php echo $lang['contactform_desc'] ?></p>
                    <hr>
                    <fieldset class="input_50">
                        <input placeholder="* <?php echo $lang['first_name'] ?>" type="text" tabindex="1" required>
                        <input placeholder="* <?php echo $lang['last_name'] ?>" type="text" tabindex="2" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="* <?php echo $lang['email'] ?>" type="email" tabindex="3" required>
                    </fieldset>
                    <fieldset>
                        <textarea placeholder="* <?php echo $lang['message'] ?>" tabindex="5" rows="6" required></textarea>
                    </fieldset>
                    <fieldset>
                        <button class="btn-submit" name="submit" type="submit" id="contact-submit" data-submit="...Sending"><?php echo $lang['submit'] ?></button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <div class="divider-5"></div>

    <!--=============================================
    Nav Active Script
    =============================================!-->
    <script>
        function active() {
            document.getElementById("about").style.color = "#ff0162"; //#575757
        }

        active();
    </script>

<?php include ("data/footer.php"); ?>
<?php include ("data/foot.php"); ?>

