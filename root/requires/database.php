<?php
   ini_set("session.hash_function","sha512");
   session_start();

   ini_set("max_execution_time",500);



   $db_hosti = "localhost";
   $db_useri = "088681";
   $db_passi = "T3q1o2^9s";
   $db_datai = "DBPortfolio";


   $con = new mysqli($db_hosti,$db_useri,$db_passi,$db_datai);
?>