<?php
include('config.php')
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- SEO -->
    <meta name="description" content="Radio Regional Fm 88,5">
    <meta name="keywords" content="radio,mineiros,regional,fm,88.5,goias,sertaneja">
    <meta name="author" content="Jefferson Felizardo">
    <meta name="robots" content="">
    <meta name="revisit-after" content="1 day">
    <meta name="language" content="Portuguese">
    <!-- tags do facebook e whatsapp -->
    <meta property="og:title" content="Regional 88,5 FM">
    <meta property="og:description" content="Radio Regional Fm 88,5">
    <meta property="og:image" content="thumbnail da pagina">
    <meta property="og:url" content="endereço do site">
    <!-- tags do twitter -->
    <meta name="twitter:title" content="Regional 88,5 FM ">
    <meta name="twitter:description" content=" Regional 88,5 FM">
    <meta name="twitter:image" content=" thumbnail da pagina do twitter">
    <meta name="twitter:card" content="summary_large_image">
    <!-- importando meu proprio css e o font-awesome -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>./fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>./fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>css/aos.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>css/style.css">


    <title>Regional 88,5 FM </title>
</head>

<body class="black-bg">

    <header>
        <div data-aos="fade-up" data-aos-duration="3000" class="container">
            <div class="row">
                <div class="player w-sm-3 left-flex">
                    <!-- <audio controls="controls">
                                <source src="http://170.81.93.32:9000/stream.aac" type="audio/ogg" />                                
                              Your browser does not support the audio element.
                              </audio> -->
              
                </div>

                <div class="logo w4">
                    <div class="row right-flex">
                        <div class="img">
                            <img src="<?php echo INCLUDE_PATH;?>./images/radiologo1.png">
                        </div>

                    </div>

                </div>
                <nav class="desktop w5">
                    <div class="row right-flex ">
                        <ul>
                            <li>
                                <a class="text-red" href="<?php echo INCLUDE_PATH;?>">Home</a>
                                <a class="text-red" href="<?php echo INCLUDE_PATH;?>sobre">sobre</a>
                                <a class="text-red" href="<?php echo INCLUDE_PATH;?>locutores">Locutores</a>
                                <a class="text-red" href="<?php echo INCLUDE_PATH;?>programacao">Programação</a>
                            </li>
                        </ul>
                    </div>

                </nav>

            </div>
        </div>
        <!-- container -->
        <nav class="mobile w12">
            <div class="row right-flex">
                <i class="fa fa-bars"></i>
                <ul>
                    <li>
                                <a class="text-red" href="<?php echo INCLUDE_PATH;?>">Home</a>
                                <a class="text-red" href="<?php echo INCLUDE_PATH;?>sobre">sobre</a>
                                <a class="text-red" href="<?php echo INCLUDE_PATH;?>locutores">Locutores</a>
                                <a class="text-red" href="<?php echo INCLUDE_PATH;?>programacao">Programação</a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- mobile -->
        <div class="row">
            <div class="w12">
                <div data-aos="fade-up" data-aos-duration="3000" class="container">
                    <div class="header-bg">
                        <div class="header-layer"></div>
                        <img src="<?php echo INCLUDE_PATH;?>./images/header.jpg">

                    </div>
                    <!-- header bg -->
                </div>
            </div>


        </div>
    </header>