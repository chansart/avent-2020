var h = window.innerHeight;
var style = document.createElement('style');
document.head.appendChild(style);
style.sheet.insertRule(`body {height: ${h}px}`);

var backgroundChristmas = [{image: 'background1' ,color:'#a20f04',},{image: 'background2' ,color:'#1D314A',},{image: 'background3' ,color:'#0C1F18',},{image: 'background4' ,color:'#CD2829',},{image: 'background5' ,color:'#101720',},{image: 'background6' ,color:'#10162C',}];
//  afficher les différents backgrounds
$('#calendar-container').html(`<form method="POST" action="#" class="h-100 formBackground" ><h2>Choisissez l'image de fond de votre calendrier</h2><div id="background-container" class="h-80"></div><button class="background-choisi" type="submit">Suivant</button></form>`);
$('#background-container').css({'flex-wrap':'wrap'});
backgroundChristmas.forEach((picture)=>{
    $('#background-container').append(`<div class="w-40 h-30 choice-background-div">
    <input type="radio" id="${picture.image}" class="inputBackground" name="background" value="${picture.image}-${picture.color}">
    <label for="${picture.image}" class="choice-background w-100 h-100"><img class="choice-background-picture w-100" src="public/image/${picture.image}.jpg"/></label></div>`)
  });
  //  a chaque clic sur un background
  $('.choice-background-picture').each(function(){
    $(this).on('click', function(){
      var indexBackground = $('.choice-background-picture').index($(this));
      $('body').css({'background-image':`url("public/image/${backgroundChristmas[indexBackground].image}.jpg")`});
      $('header').css({'background-color' : `${backgroundChristmas[indexBackground].color}`});
      $('.choice-background-div').each(function(){
        $(this).css({'border':'5px solid white'});
      })
      $(this).parent('label').parent('.choice-background-div').css({'border':'5px solid #8ac926'});
    })
      
  })
  
  