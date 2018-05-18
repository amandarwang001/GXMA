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
</head>
<body>


<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="coding">CODING</a></li>
    <li><a href="blog">BLOG</a></li>
</ul>

<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper grey darken-3">
            <div class="row">
                <div class="col m3">
                    <a href="Home" class="brand-logo"><img src="<?= IMAGE_URL ?>logo.png" class="img-responsive" id="logo1"></a>

                </div>
                <div class="col m2 hide-on-med-and-down">
                    <ul>
                        <li>company slogan.</li>
                    </ul>
                </div>
                <div class="col m7">
                    <ul class="right hide-on-med-and-down">
                        <li><a href="tel:4072737027"><span
                                    class="green-text"><b>CALL US TODAY!</b></span> 407.123.4567</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

