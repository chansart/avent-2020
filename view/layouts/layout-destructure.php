<?php 


function messageType($jour){
  $c = new Calendar();
  $x="";
  $tabCalendarAAfficher = $c->readCalendar($_SESSION['calendrier_a_afficher']);
    $donneejour = $tabCalendarAAfficher[0]['calendar_'.$jour.''];
    $donneetype = $tabCalendarAAfficher[0]['calendar_'.$jour.'_type'];
    if($donneejour ===""){
      $x = 'Vous n\'avez encore rien rentré';
    }else if($donneetype === "url-image" ||$donneetype === "image"){
        $x = '<img src="uploads/'.$donneejour.'">';
    }else if($donneetype === "url-video"){
        $x = '<iframe width="150" height="100"
        src="'.$donneejour.'">
        </iframe>';
    }else if($donneetype === "video"){
        $x = '<video width="320" height="240" controls>
        <source src="uploads/'.$donneejour.'">
    </video>';
    }else if($donneetype === "hyperlien"){
      $x = '<a href="'.$donneejour.'">Votre surprise du jour ici !</a>';
    }else{
        $x = $donneejour;
    }
    return $x;
}
        
?>

<div class="col-container h-100 w-100">
          <div class="h-100 w-60">
            <div class="col-container h-40 w-100">
              <div class="h-100 w-15 cell"><div class="day"><div class="content-day"><?= messageType(1); ?></div></div></div>
              <div class="row-container h-100 w-85">
                <div class="row w-100 h-50">
                  <div class="h-100 w-20 cell"><div class="day"><div class="content-day"><?= messageType(2); ?></div></div></div>
                  <div class="h-100 w-50 cell"><div class="day"><div class="content-day"><?= messageType(3); ?></div></div></div>
                  <div class="h-100 w-30 cell"><div class="day"><div class="content-day"><?= messageType(4); ?></div></div></div>
                </div>
                <div class="row w-100 h-50">
                  <div class="h-100 w-60 cell"><div class="day"><div class="content-day"><?= messageType(5); ?></div></div></div>
                  <div class="h-100 w-25 cell"><div class="day"><div class="content-day"><?= messageType(6); ?></div></div></div>
                  <div class="h-100 w-15 cell"><div class="day"><div class="content-day"><?= messageType(7); ?></div></div></div>
                </div>
              </div>
            </div>
            <div class="col-container h-60 w-100">
              <div class="h-100 w-60">
                <div class="col-container h-30 w-100">
                  <div class="cell h-100 w-60"><div class="day"><div class="content-day"><?= messageType(8); ?></div></div></div>
                  <div class="cell h-100 w-40"><div class="day"><div class="content-day"><?= messageType(9); ?></div></div></div>
                </div>
                <div class="col-container h-70 w-100">
                  <div class="cell h-100 w-40"><div class="day"><div class="content-day"><?= messageType(10); ?></div></div></div>
                  <div class="h-100 w-60">
                    <div class="cell h-30 w-100"><div class="day"><div class="content-day"><?= messageType(11); ?></div></div></div>
                    <div class="cell h-70 w-100"><div class="day"><div class="content-day"><?= messageType(12); ?></div></div></div>
                  </div>
                </div>
              </div>
              <div class="h-100 w-40">
                <div class="col-container h-70 w-100">
                  <div class="h-100 w-40">
                    <div class="cell h-60 w-100"><div class="day"><div class="content-day"><?= messageType(13); ?></div></div></div>
                    <div class="cell h-40 w-100"><div class="day"><div class="content-day"><?= messageType(14); ?></div></div></div>
                  </div>
                  <div class="cell h-100 w-60"><div class="day"><div class="content-day"><?= messageType(15); ?></div></div></div>
                </div>
                <div class="col-container h-30 w-100">
                  <div class="cell h-100 w-60"><div class="day"><div class="content-day"><?= messageType(16); ?></div></div></div>
                  <div class="cell h-100 w-40"><div class="day"><div class="content-day"><?= messageType(17); ?></div></div></div>
                </div>
              </div>
            </div>
          </div>
          <div class="h-100 w-40">
            <div class="col-container h-60 w-100">
              <div class="w-60 h-100">
                <div class="col-container h-50 w-100">
                  <div class="cell h-100 w-30"><div class="day"><div class="content-day"><?= messageType(18); ?></div></div></div>
                  <div class="cell h-100 w-70"><div class="day"><div class="content-day"><?= messageType(19); ?></div></div></div>
                </div>
                <div class="cell h-50 w-100"><div class="day"><div class="content-day"><?= messageType(20); ?></div></div></div>
              </div>
              <div class="w-40 h-100">
                <div class="cell h-70 w-100"><div class="day"><div class="content-day"><?= messageType(21); ?></div></div></div>
                <div class="cell h-30 w-100"><div class="day"><div class="content-day"><?= messageType(22); ?></div></div></div>
              </div>
            </div>
            <div class="col-container h-40">
              <div class="w-40 h-100 cell"><div class="day"><div class="content-day"><?= messageType(23); ?></div></div></div>
              <div class="w-60 h-100 cell"><div class="day"><div class="content-day"><?= messageType(24); ?></div></div></div>
            </div>
          </div>
          </div>