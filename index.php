<?php 
    session_start();
    ob_start();
    require_once("model/Personne.php");
    require_once("model/Calendar.php");
    require_once("view/html/head.php");

    require_once("controller/router.php");


    require_once("view/html/footer.php");
?>