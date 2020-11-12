<?php 
$daysOfDecember = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24);
// Trouver le calendrier à modifier
$c = new Calendar();
$insideCalendar="";
$x="";
$tabCalendarAAfficher = $c->readCalendar($_SESSION['calendrier_a_afficher']);



// modifier le background
if($_SESSION['background']!== $tabCalendarAAfficher[0]['calendar_background']){
    $_SESSION['background']=$tabCalendarAAfficher[0]['calendar_background'];
    $_SESSION['color']=$tabCalendarAAfficher[0]['calendar_menu'];
    header("Location:?section=fillCalendar");  
};

// mettre le contenu dans les variables correspondantes
$colorMenu = $tabCalendarAAfficher[0]['calendar_menu'];
$calendarTitle = $tabCalendarAAfficher[0]['calendar_title'];
$layoutCalendar = $tabCalendarAAfficher[0]['calendar_layout'];

// Mettre en forme le contenu en fonction du type
foreach ($daysOfDecember as $dayOfDecember){
    if($tabCalendarAAfficher[0]['calendar_'.$dayOfDecember.''] ===""){
        $x = 'Vous n\'avez encore rien rentré';
    }else if($tabCalendarAAfficher[0]['calendar_'.$dayOfDecember.'_type'] === "image"){
        $x = '<img src="uploads/'.$tabCalendarAAfficher[0]['calendar_'.$dayOfDecember.''].'">';
    }else if($tabCalendarAAfficher[0]['calendar_'.$dayOfDecember.'_type'] === "url-image"){
        $x = '<img src="'.$tabCalendarAAfficher[0]['calendar_'.$dayOfDecember.''].'">';
    }else if($tabCalendarAAfficher[0]['calendar_'.$dayOfDecember.'_type'] === "url-vidéo"){
        $x = '<iframe width="150" height="100"
        src="'.$tabCalendarAAfficher[0]['calendar_'.$dayOfDecember.''].'">
        </iframe>';
    }else if($tabCalendarAAfficher[0]['calendar_'.$dayOfDecember.'_type'] === "vidéo"){
        $x = '<video width="320" height="240" controls>
        <source src="uploads/'.$tabCalendarAAfficher[0]['calendar_'.$dayOfDecember.''].'">
      </video>';
    }else if($tabCalendarAAfficher[0]['calendar_'.$dayOfDecember.'_type'] === "hyperlien"){
        $x = '<a href="'.$tabCalendarAAfficher[0]['calendar_'.$dayOfDecember.''].'">Votre surprise du jour ici !</a>';
    }else{
        $x = $tabCalendarAAfficher[0]['calendar_'.$dayOfDecember.''];
    }
    $insideCalendar.='<div class="message-day"><div class="jour-date h-100"><p class="date-jour">'.$dayOfDecember.'</p><p>Dec</p></div><div class="jour-message"><p>Votre message:</p><div class="votre-message">'.$x.'</div></div></div>';

// update le contenu dans la db
    if(isset($_POST['message-'.$dayOfDecember.''],$_POST['select-'.$dayOfDecember.''],$_POST['update'])){
        if($_POST['message-'.$dayOfDecember.''] !== ""){
        $message = $_POST["message-".$dayOfDecember.""];
        $typemessage = $_POST["select-".$dayOfDecember.""];
        $idDay = $_POST['update'];
        $p = new Calendar();
        $p->updateDay($idDay,$message,$typemessage,$_SESSION['calendrier_a_afficher']);
        header("Location:?section=fillCalendar");
        }
    }
    if(isset($_FILES["file-".$dayOfDecember.""], $_POST['update'], $_POST['select-'.$dayOfDecember.''] )) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["file-".$dayOfDecember.""]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $check = filesize($_FILES["file-".$dayOfDecember.""]["tmp_name"]);
        
        if($check !== false) {
        $uploadOk = 1;
        } else {
        $uploadOk = 0;
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "mp4" && $imageFileType != "mp3" && $imageFileType != "avi" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["file-".$dayOfDecember.""]["tmp_name"], $target_file)) {
    
          }
        }
        $message = $_FILES["file-".$dayOfDecember.""]["name"];
        $typemessage = $_POST["select-".$dayOfDecember.""];
        $idDay = $_POST['update'];
        $p = new Calendar();
        $p->updateDay($idDay,$message,$typemessage,$_SESSION['calendrier_a_afficher']);
        header("Location:?section=fillCalendar");
        }
}



require_once("view/page/calendarDesign/fillCalendar.php");

               

?>
