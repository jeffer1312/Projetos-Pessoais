    <?php
        include('header.php')
    ?>


        

          


      <?php


          $pagina = $_GET['area'];

          switch($pagina){
          case "sobre": $pagina = "sobre.php"; break;
          case "locutores": $pagina = "locutores.php"; break;
          case "programacao": $pagina = "programacao.php"; break;
          default: $pagina = "home.php"; break;}

          include($pagina);
         
       
      ?>



   <?php

      include('footer.php')

   ?>