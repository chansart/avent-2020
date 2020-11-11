<main class="h-100">
      <div class="calendar-container w-100 h-100" id="calendar-container-preview">
            <h2 class='title-calendar h-10' ><a class = "retour" href="?section=moncompte"><i  style='color:<?= $colorMenu; ?>' class="fas fa-angle-left"></i></a><p style='color:<?= $colorMenu; ?>'><?= $calendarTitle; ?></p></h2>
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