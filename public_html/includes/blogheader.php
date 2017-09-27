<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <TITLE><?php echo $title; ?></TITLE>
    <meta name="description" content="<?php echo $meta_desc; ?>"/>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS_URL ?>materialize.min.css">
    <link rel="stylesheet" href="<?= CSS_URL ?>style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- <link rel="icon" href="favicon.ico" type="image/jpg" sizes="16x16"> Need favicon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>
    <script src="<?= JS_URL ?>jquery-3.2.1.min.js"></script>
    <script src="<?= JS_URL ?>main.js"></script>
</head>
<body>

<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper grey darken-2">
            <div class="row">
                <div class="col m1">
                    <a href="Home" class="brand-logo"><img src="<?= IMAGE_URL ?>GXMAlogo.png" id="navbarLogo" class="img-responsive"
                                                           id="logo1"></a>

                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
                <div class="col m4 hide-on-med-and-down">
                    <ul>
                        <li>Bagua Zhang &#8226; Xingyi Quan &#8226; Taiji Quan</li>
                    </ul>
                </div>
                <div class="col m7">
                    <ul class="right hide-on-med-and-down">
                        <li><a href="./classes">CLASSES</a></li>
                        <li><a href="./Videos">VIDEOS</a></li>
                        <li><a href="./AboutUs">ABOUT US</a></li>
                        <li><a href="./blog">BLOG</a></li>
                        <li><a href="./ContactUs">CONTACT US</a></li>
                        <!--                        <li class="callNow"><a href="tel:4072737027"><span-->
                        <!--                                        class="green-text"><b>CALL US TODAY</b></span><br>407.123.4567</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

<ul class="side-nav" id="mobile-demo">
    <li><a href="./classes">CLASSES</a></li>
    <li><a href="./blog">BLOG</a></li>
    <li><a href="./AboutUs">ABOUT US</a></li>
    <li><a href="./ContactUs">CONTACT US</a></li>
    <li id="callnowmobile" class="center-align grey darken-3"><a href="tel:4072737027"><span
                    class="grey-text text-lighten-4"><b>CALL NOW</b></span><span
                    class="green-text"> -- 407.123.4567</span></a></li>
</ul>
