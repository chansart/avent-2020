<?php 
    $c = new Calendar();
    $x="";
    $tabCalendarAAfficher = $c->readCalendar($_SESSION['calendrier_a_afficher']);

    for ($i = 1; $i <= 24; $i++) {
        if($tabCalendarAAfficher[0]['calendar_'.$i.''] ===""){
            $x = 'Vous n\'avez encore rien rentré';
        }else if($tabCalendarAAfficher[0]['calendar_'.$i.'_type'] === "url-image" ||$tabCalendarAAfficher[0]['calendar_'.$i.'_type'] === "image"){
            $x = '<img src="uploads/'.$tabCalendarAAfficher[0]['calendar_'.$i.''].'">';
        }else if($tabCalendarAAfficher[0]['calendar_'.$i.'_type'] === "url-video"){
            $x = '<iframe width="150" height="100"
            src="'.$tabCalendarAAfficher[0]['calendar_'.$i.''].'">
            </iframe>';
        }else if($tabCalendarAAfficher[0]['calendar_'.$i.'_type'] === "video"){
            $x = '<video width="320" height="240" controls>
            <source src="uploads/'.$tabCalendarAAfficher[0]['calendar_'.$i.''].'">
        </video>';
        }else if($tabCalendarAAfficher[0]['calendar_'.$dayOfDecember.'_type'] === "hyperlien"){
            $x = '<a href="'.$tabCalendarAAfficher[0]['calendar_'.$dayOfDecember.''].'">Votre surprise du jour ici !</a>';
        }else{
            $x = $tabCalendarAAfficher[0]['calendar_'.$i.''];
        }
    echo '<div style ="height:25%;
    width:16.64%;" class="cell"><div class="day" id="day-'.$i.'"><div class="content-day">'.$x.'</div></div></div>';
} ?> 
