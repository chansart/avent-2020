<?php 
// trouver le calendrier à afficher
    $c = new Calendar();
    $tabCalendarAAfficher = $c->readCalendar($_SESSION['calendrier_a_afficher']);
        
    $calendarPreview="";
    if($_SESSION['background']!== $tabCalendarAAfficher[0]['calendar_background']){
        $_SESSION['background']=$tabCalendarAAfficher[0]['calendar_background'];
        $_SESSION['color']=$tabCalendarAAfficher[0]['calendar_menu'];
        header("Location:?section=myCalendar");  
    }
    // mettre les infos dans chaque variables(elles sont dans le html)
    $colorMenu = $tabCalendarAAfficher[0]['calendar_menu'];
    $calendarTitle = $tabCalendarAAfficher[0]['calendar_title'];
    $layoutCalendar = $tabCalendarAAfficher[0]['calendar_layout'];


    require_once("view/page/calendarDesign/myCalendar.php");
?>