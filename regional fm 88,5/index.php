    <?php
        include('header.php')
    ?>


        

          


      <?php
       
       $url = isset($_GET['url']) ? $_GET['url'] :'home';
       if (file_exists(''.$url.'.php')) {
           include(''.$url.'.php');
       } else {
           include("404.php");
       }
        //  $pagina = isset($_GET['area']) ? $_GET['url'] :'home';
        
        

        //   switch($pagina){
        //   case "sobre": $pagina = "sobre.php"; break;
        //   case "locutores": $pagina = "locutores.php"; break;
        //   case "programacao": $pagina = "programacao.php"; break;
        //   default: $pagina = "home.php"; break;}
        //   include($pagina);
          
                
       
      ?>



   <?php

      include('footer.php')

   ?>