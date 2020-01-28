<?php include('config.php')?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- SEO -->
    <meta name="description" content="Descrição do site">
    <meta name="keywords" content="palavras-chaves,separadas,por,virgula">
    <meta name="author" content="Jefferson Felizardo">
    <meta name="robots" content="">
    <meta name="revisit-after" content="1 day">
    <meta name="language" content="Portuguese">
    <!-- tags do facebook e whatsapp -->
    <meta property="og:title" content="Tituto da pagina">
    <meta property="og:description" content="Descrição da pagina">
    <meta property="og:image" content="thumbnail da pagina">
    <meta property="og:url" content="endereço do site">
    <!-- tags do twitter -->
    <meta name="twitter:title" content="Tituto da pagina ">
    <meta name="twitter:description" content=" Descrição da pagina">
    <meta name="twitter:image" content=" thumbnail da pagina do twitter">
    <meta name="twitter:card" content="summary_large_image">
    <!-- importando meu proprio css e o font-awesome -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>/css/aos.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>/css/fixed.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>./css/style.css">
    <title>Health Club</title>
</head>

<body>
    <div class="grid">
        <header>
            <div class="layer"></div>
            <div class="container">
                <div class="row">
                    <div class="w-sm-12 row">
                        <div class="offset-9"></div>
                        <div class="social w-sm-3 row">
                            <div class="w-sm-2">
                                <div class="facebook">
                                    <img src="./images/Vector.png" alt="">
                                </div>
                            </div>
                            <div class="w-sm-2">
                                <div class="whatsapp">
                                    <img src="./images/whatsapp.png" alt="">
                                </div>
                            </div>
                            <div class="w-sm-2">
                                <div class="instagram">
                                    <img src="./images/instagram.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- social -->

                    </div>
                    <!-- container para a media social -->
                    <div class="logo w-sm-6">
                        <img src="./images/logo.png" alt="">
                    </div>
                    <div class="desktop w-sm-6 right-flex">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">Modalidades</a></li>
                            <li><a href="">Fotos</a></li>
                            <li><a href="">Eventos</a></li>
                        </ul>
                    </div>
                    <!-- menu desktop -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </header>
        <!-- header -->


        <?php
       
       $url = isset($_GET['url']) ? $_GET['url'] :'home';
       if (file_exists(''.$url.'.php')) {
           include(''.$url.'.php');
       } else {
           include("404.php");
       }    
                
       
      ?>





            <footer>
                <div class="container">
                    <div class="row">
                        <div class="w-sm-6">
                            <div class="horarios inline-flex">
                                <img src="./images/relogio.png">
                                <div class="row semana">
                                    <h2 class="w-sm-12">Segunda a sexta, das 5h às 0h.</h2>
                                    <h2 class="w-sm-12"> Sábado, das 8h às 18h.</h2>
                                    <h2 class="w-sm-12">Domingos e Feriados das 9h às 14h.</h2>
                                </div>
                            </div>
                        </div>
                        <div class="w-sm-6"></div>
                    </div>
                </div>
                <div class="subfooter">
                    <div class="container">
                        <div class="desenvolvedor inline-flex">
                            <img src="./images/copyrigth.png">
                            <h2>Desenvolvido por JL developer</h2>
                        </div>

                    </div>

                </div>

            </footer>

    </div>
    <!-- grid -->
    <script src="<?php echo INCLUDE_PATH; ?>/js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>/js/swiper.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>/js/swiper.min.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>/js/aos.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>/js/functions.js"></script>


</body>