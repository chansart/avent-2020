<?php 

// initialiser les variables et enregistrer le calendrier dans la db
if(isset($_POST["layout"]))
{ 

        $layout = $_POST["layout"];

        $_SESSION["layout"] = $_POST["layout"];
        header("Location:?section=fillCalendar");

        $_day1="";
        $_day1_type="";
        $_day2="";
        $_day2_type="";
        $_day3="";
        $_day3_type="";
        $_day4="";
        $_day4_type="";
        $_day5="";
        $_day5_type="";
        $_day6="";
        $_day6_type="";
        $_day7="";
        $_day7_type="";
        $_day8="";
        $_day8_type="";
        $_day9="";
        $_day9_type="";
        $_day10="";
        $_day10_type="";
        $_day11="";
        $_day11_type="";
        $_day12="";
        $_day12_type="";
        $_day13="";
        $_day13_type="";
        $_day14="";
        $_day14_type="";
        $_day15="";
        $_day15_type="";
        $_day16="";
        $_day16_type="";
        $_day17="";
        $_day17_type="";
        $_day18="";
        $_day18_type="";
        $_day19="";
        $_day19_type="";
        $_day20="";
        $_day20_type="";
        $_day21="";
        $_day21_type="";
        $_day22="";
        $_day22_type="";
        $_day23="";
        $_day23_type="";
        $_day24="";
        $_day24_type="";
        $j = new Personne();
        $userId = $j->userId($_SESSION['email']);
        $_userId = $userId[0]['user_id'];
        $_calendardate = date("Y-m-d");
       
       $p = new Calendar();
       $p->createCalendar($_userId,$_SESSION["nbrofcalendar"],$_calendardate, $_SESSION["layout"], $_SESSION["background"],$_SESSION["color"], $_SESSION["title"], $_day1,$_day1_type,$_day2,$_day2_type,$_day3,$_day3_type,$_day4,$_day4_type,$_day5,$_day5_type,$_day6,$_day6_type,$_day7,$_day7_type,$_day8,$_day8_type,$_day9,$_day9_type,$_day10,$_day10_type,$_day11,$_day11_type,$_day12,$_day12_type,$_day13,$_day13_type,$_day14,$_day14_type,$_day15,$_day15_type,$_day16,$_day16_type,$_day17,$_day17_type,$_day18,$_day18_type,$_day19,$_day19_type,$_day20,$_day20_type,$_day21,$_day21_type,$_day22,$_day22_type,$_day23,$_day23_type,$_day24,$_day24_type
       );
       $c = new Calendar();
       $tablastId = $c->lastInsert();
       $_SESSION['calendrier_a_afficher'] = (int)$tablastId[0]['dernier_id'];
}

// appeler la vue
require_once("view/page/calendarDesign/layoutChoice.php"); 
?>