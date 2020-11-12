var h = window.innerHeight;
var style = document.createElement('style');
document.head.appendChild(style);
style.sheet.insertRule(`body {height: ${h}px}`);

//  bouton pour ajouter un calendrier
$('.new-calendar').on('click', 'h2', function(){
  $('.new-calendar').css({'background-color': '#aa1c52'});
    $('.new-calendar').html(`<form method="post"><label for="calendar-title">Nom du calendrier:</label><input type="text" name="calendar-title" placeholder="ex: Joyeux Noël Maman,..."/><button type="submit">Créer</button></form> `)
})

//  afficher le petit calendrier
// layotu destructure
if($('.layout-destructure-moncompte')){
    $(".layout-destructure-moncompte").append(`<div class="col-container h-100 w-100">
  <div class="h-100 w-60">
    <div class="col-container h-40 w-100">
      <div class="h-100 w-15 cell"></div>
      <div class="row-container h-100 w-85">
        <div class="row w-100 h-50">
          <div class="h-100 w-20 cell"></div>
          <div class="h-100 w-50 cell"></div>
          <div class="h-100 w-30 cell"></div>
        </div>
        <div class="row w-100 h-50">
          <div class="h-100 w-60 cell"></div>
          <div class="h-100 w-25 cell"></div>
          <div class="h-100 w-15 cell"></div>
        </div>
      </div>
    </div>
    <div class="col-container h-60 w-100">
      <div class="h-100 w-60">
        <div class="col-container h-30 w-100">
          <div class="cell h-100 w-60"></div>
          <div class="cell h-100 w-40"></div>
        </div>
        <div class="col-container h-70 w-100">
          <div class="cell h-100 w-40"></div>
          <div class="h-100 w-60">
            <div class="cell h-30 w-100"></div>
            <div class="cell h-70 w-100"></div>
          </div>
        </div>
      </div>
      <div class="h-100 w-40">
        <div class="col-container h-70 w-100">
          <div class="h-100 w-40">
            <div class="cell h-60 w-100"></div>
            <div class="cell h-40 w-100"></div>
          </div>
          <div class="cell h-100 w-60"></div>
        </div>
        <div class="col-container h-30 w-100">
          <div class="cell h-100 w-60"></div>
          <div class="cell h-100 w-40"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="h-100 w-40">
    <div class="col-container h-60 w-100">
      <div class="w-60 h-100">
        <div class="col-container h-50 w-100">
          <div class="cell h-100 w-30"></div>
          <div class="cell h-100 w-70"></div>
        </div>
        <div class="cell h-50 w-100"></div>
      </div>
      <div class="w-40 h-100">
        <div class="cell h-70 w-100"></div>
        <div class="cell h-30 w-100"></div>
      </div>
    </div>
    <div class="col-container h-40">
      <div class="w-40 h-100 cell"></div>
      <div class="w-60 h-100 cell"></div>
    </div>
  </div>
  </div>`);
  
}
$(".cell").each(function () {
    var indexCell = $(".cell").index($(this));
    $(this).html(`<div class="day">${indexCell + 1}</div>`);
  });
// layout carre
if($('.layout-carre-moncompte')){
    $(".layout-carre-moncompte").css({
        display: "flex",
        "flex-wrap": "wrap",
      });
    for (var i = 0; i < 24; i++) {
        $(".layout-carre-moncompte").append(`<div class="cell-carre"><div class="day">${i + 1}</div></div>`);
      }
      $(".cell-carre").each(function () {
        $(this).css({
          height: "25%",
          width: "16.64%",
        });
      });
}
$('.share-calendar').on('click', function(){
  $(this).siblings('.sharing-link').css({'display':'flex'});
})
$('.closed').on('click', function(){
  $('.sharing-link').css({'display':'none'});
})