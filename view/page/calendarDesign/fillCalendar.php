<?php 
    require_once("view/menu/menu.php");
?>

<main>
    <div class='fillcalendar-container h-100 w-100'>
        <div class="calendar-preview w-70 h-100">
            <h2 class='title-calendar' style='color:<?= $colorMenu; ?>'><?= $calendarTitle; ?></h2>
            <div class='calendar-container w-90 <?= $layoutCalendar; ?>' id='calendar-container'>
             <?php 
                if($layoutCalendar === "layout-destructure"){
                    include("view/layouts/layout-destructure.php");
                }else{
                    include("view/layouts/layout-carre.php");
                }; 
            ?> 
        </div>
        </div>
        <div class="inside-calendar w-30 h-100">
            <?= $insideCalendar; ?>
        </div>
    </div>
</main>
<script src="public/js/scriptFillCalendar.js"></script>
