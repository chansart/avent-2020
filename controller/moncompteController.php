<?php 

// modifier le background en background de base
if($_SESSION['background']!=="background"){
    $_SESSION['background']="background";
    $_SESSION['color']="#601632";
    header("Location:?section=moncompte");  
}
// récuperer l'utilisateur 
$p = new Personne();
$userId = $p->userId($_SESSION["email"]);

// récupérer tous ses calendriers
$c = new Calendar();
$tabCalendars = $c->infosCalendar($userId[0]['user_id']);
$_SESSION['nbrofcalendar']= count($tabCalendars);
$myCalendars="";

//  afficher chaque calendrier
foreach ($tabCalendars as $calendar){
    $myCalendars .="<div class='calendar-moncompte w-100'><div class='".$calendar['calendar_layout']."-moncompte w-20' style='background-image:url(public/image/".$calendar['calendar_background'].".jpg)'></div><div class='calendar-info w-80'><div class='title-calendar-moncompte w-100'><div><p class='calendar-title'>". $calendar['calendar_title']."</p><p class='calendar-date'>". $calendar['calendar_date']."</p></div><form action='#' method='post'>
    <input type='hidden' name='name' value='". $calendar['calendar_id']."'>
    <button type='submit' ><i class='fas fa-share-alt'></i></button></form></div><div class='buttons-action'><form action='#' method='post'>
    <input type='hidden' name='delete-calendar' value='". $calendar['calendar_id']."'>
    <button type='submit' class='delete-calendar'>Supprimer <i class='fas fa-trash-alt'></i></button></form><form action='#' method='post'>
    <input type='hidden' name='update-calendar' value='". $calendar['calendar_id']."'>
    <button  type='submit' class='update-calendar'>Modifier</button></form><form action='#' method='post'>
    <input type='hidden' name='preview-calendar' value='". $calendar['calendar_id']."'>
    <button  type='submit' class='preview-calendar'>Aperçu</button></form></div></div></div>";
}

// créer un nouveau calendrier- titre du calendrier
if(isset($_POST["calendar-title"])){
    $_SESSION["title"]=$_POST["calendar-title"];
    $_SESSION["nbrofcalendar"]++;
    header("Location:?section=backgroundChoice");
}

// supprimer un calendrier
if(isset($_POST['delete-calendar']))       
         {            
            $id = trim($_POST['delete-calendar']);
            $p = new Calendar();
            $p->deleteCalendar($id);          

            
        header("Location:?section=moncompte");        
        }
// clic sur le bouton update
if(isset($_POST['update-calendar']))       
{            
    $_SESSION['calendrier_a_afficher'] = trim($_POST['update-calendar']);       
    
header("Location:?section=fillCalendar");        
}
// clic sur le bouton preview
if(isset($_POST['preview-calendar']))       
{            
    $_SESSION['calendrier_a_afficher'] = trim($_POST['preview-calendar']);       
    
header("Location:?section=myCalendar");        
}
require_once("view/page/personne/moncompte.php");
               

?>