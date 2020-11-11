var h = window.innerHeight;
var style = document.createElement('style');
document.head.appendChild(style);
style.sheet.insertRule(`body {height: ${h}px}`);

// afficher les deux layouts dans le container
$('#calendar-container-layout').append(`<form method="POST" action="#" class="h-100 formBackground" ><h2>Choisissez l'agencement de votre calendrier</h2><div id="background-container" class="h-80"></div><button class="layout-choisi" type="submit">Suivant</button></form>`);
    $('#background-container').html(`
    <input type="radio" id="layout-carre" class="inputBackground" name="layout" value="layout-carre">
    <label for="layout-carre" class="choice-background w-45"><img class="choice-layout-picture w-100" src="public/image/layout-carre.png"/></label><input type="radio" id="layout-destructure" class="inputBackground" name="layout" value="layout-destructure">
    <label for="layout-destructure" class="choice-background w-45"><img class="choice-layout-picture w-100" src="public/image/layout-destructure.png"/></label>`);
    $('.choice-layout-picture').each(function(){
      $(this).on('click', function(){
        $('.choice-layout-picture').each(function(){
          $(this).css({'border':'2px solid transparent'});
        })
        $(this).css({'border':'2px solid green'});
      })  
    })