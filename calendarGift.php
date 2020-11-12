<?php 
session_start();
ob_start();
require_once("model/Personne.php");
require_once("model/Calendar.php");

// trouver le calendrier à afficher
    $c = new Calendar();
    $tabCalendarAAfficher = $c->readCalendar((int)$_GET['icfu']); 
    $_SESSION['calendrier_a_afficher']=(int)$_GET['icfu'];
    // var_dump($_GET['view']);  
    // var_dump($tabCalendarAAfficher);

    if($_SESSION['background']!== $tabCalendarAAfficher[0]['calendar_background']){
        $_SESSION['background']=$tabCalendarAAfficher[0]['calendar_background'];
        $_SESSION['color']=$tabCalendarAAfficher[0]['calendar_menu'];
    }
    require_once("view/html/head.php");
    require_once("view/html/footer.php");
    
    // mettre les infos dans chaque variables(elles sont dans le html)
    $colorMenu = $tabCalendarAAfficher[0]['calendar_menu'];
    $calendarTitle = $tabCalendarAAfficher[0]['calendar_title'];
    $layoutCalendar = $tabCalendarAAfficher[0]['calendar_layout'];


    // require_once("view/page/calendarDesign/myCalendar.php");
?>
<main class="h-100">
      <div class="calendar-container w-100 h-100" id="calendar-container-preview">
            <h2 class='title-calendar h-10' ><p style='color:<?= $colorMenu; ?>'><?= $calendarTitle; ?></p></h2>
            <div class='calendar-container w-80 h-90 <?= $layoutCalendar; ?>' id='calendar-container'>
             <?php 
                if($layoutCalendar === "layout-destructure"){
                    include("view/layouts/layout-destructure.php");
                }else{
                    include("view/layouts/layout-carre.php");
                }; 
            ?> 
    </div>
</main>
<script src="public/js/scriptCalendarPreview.js"></script>
<script src="public/js/giftCalendar.js"></script>