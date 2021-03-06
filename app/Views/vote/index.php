<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <title>
        E-Vote
    </title><!-- Behavioral Meta Data -->
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"><!-- Core Meta Data -->
    <link href="favicon.png" rel="shortcut icon" type="image/png">

    <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    <!-- CSS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,900' rel='stylesheet' type='text/css'><!-- Styles -->
    <link href="<?= base_url('Imminent'); ?>/css/loader.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('Imminent'); ?>/css/normalize.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url('Imminent'); ?>/css/font-awesome.min.css">
    <link href="<?= base_url('Imminent'); ?>/css/style.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <![endif]-->
    <!-- Javascript -->

    <script src="<?= base_url('Imminent'); ?>/js/jquery.js"></script>
</head>

<body>
    <div class="preloader">
        <div class="loading">
            <h2>
                Loading...
            </h2>
            <span class="progress"></span>
        </div>
    </div>

    <div class="wrapper">
        <ul class="scene unselectable" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15" id="scene">
            <li class="layer" data-depth="0.00">
            </li>
            <!-- BG -->

            <li class="layer" data-depth="0.10">
                <div class="background">
                </div>
            </li>

            <!-- Hero -->

            <li class="layer" data-depth="0.20">
                <div class="title">
                    <h2>
                        E-Vote Permira
                    </h2>
                    <span class="line"></span>
                </div>
            </li>

            <!-- <li class="layer" data-depth="0.25">
                <div class="sphere">
                    <img alt="sphere" src="/images/sphere.png">
                </div>
            </li> -->

            <li class="layer" data-depth="0.30">
                <div class="hero">
                    <h1 id="countdown">
                        Coming Soon Pemilihan E-Vote PEMIRA
                    </h1>

                    <p class="sub-title">
                      Jangan Lupa Tanggal 23 !
                    </p>
                </div>
            </li>
            <!-- Flakes -->

            <li class="layer" data-depth="0.40">
                <div class="depth-1 flake1">
                    <img alt="flake" src="<?= base_url('Imminent'); ?>/images/flakes/depth1/flakes1.png">
                </div>

                <div class="depth-1 flake2">
                    <img alt="flake" src="<?= base_url('Imminent'); ?>/images/flakes/depth1/flakes2.png">
                </div>

                <div class="depth-1 flake3">
                    <img alt="flake" src="<?= base_url('Imminent'); ?>/images/flakes/depth1/flakes3.png">
                </div>

                <div class="depth-1 flake4">
                    <img alt="flake" src="<?= base_url('Imminent'); ?>/images/flakes/depth1/flakes4.png">
                </div>
            </li>

            <li class="layer" data-depth="0.50">
                <div class="depth-2 flake1">
                    <img alt="flake" src="<?= base_url('Imminent'); ?>/images/flakes/depth2/flakes1.png">
                </div>

                <div class="depth-2 flake2">
                    <img alt="flake" src="<?= base_url('Imminent'); ?>/images/flakes/depth2/flakes2.png">
                </div>
            </li>

            <li class="layer" data-depth="0.60">
                <div class="depth-3 flake1">
                    <img alt="flake" src="<?= base_url('Imminent'); ?>/images/flakes/depth3/flakes1.png">
                </div>

                <div class="depth-3 flake2">
                    <img alt="flake" src="<?= base_url('Imminent'); ?>/images/flakes/depth3/flakes2.png">
                </div>

                <div class="depth-3 flake3">
                    <img alt="flake" src="<?= base_url('Imminent'); ?>/images/flakes/depth3/flakes3.png">
                </div>

                <div class="depth-3 flake4">
                    <img alt="flake" src="<?= base_url('Imminent'); ?>/images/flakes/depth3/flakes4.png">
                </div>
            </li>

            <li class="layer" data-depth="0.80">
                <div class="depth-4">
                    <img alt="flake" src="<?= base_url('Imminent'); ?>/images/flakes/depth4/flakes.png">
                </div>
            </li>

            <li class="layer" data-depth="1.00">
                <div class="depth-5">
                    <img alt="flake" src="<?= base_url('Imminent'); ?>/images/flakes/depth5/flakes.png">
                </div>
            </li>
            <!-- Contact -->

            <li class="layer" data-depth="0.20">
                <div class="contact">
                    <ul class="icons">
                        <li>
                            <a class="twitter" href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                    More <a href="<?= base_url('home/index'); ?>">Tentang PEMIRA</a>
                    <br>
                    <a class="mail" href="mailto:pemira2020@gmail.com?subject=tanya%20pemira">Help pemira2020@gmail.com</a>
                </div>
            </li>
        </ul>
    </div>

    <!-- Javascript -->
    <script src="<?= base_url('Imminent'); ?>/js/plugins.js"></script>
    <script src="<?= base_url('Imminent'); ?>/js/jquery.countdown.min.js"></script>
    <script src="<?= base_url('Imminent'); ?>/js/main.js"></script>

</body>

</html>