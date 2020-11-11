<?php 

// Mettre le background choisi et la couleur du header dans des $_SESSION
if(isset($_POST["background"]))
{ 

        $background = explode("-",$_POST["background"])[0];
        $color = explode("-",$_POST["background"])[1];

        $_SESSION["background"] = $background;
        $_SESSION["color"] = $color;
         header("Location:?section=layoutChoice");

    
}


// appeler la vue
require_once("view/page/calendarDesign/backgroundChoice.php"); 
?>