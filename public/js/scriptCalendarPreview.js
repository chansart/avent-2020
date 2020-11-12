var h = window.innerHeight;
var style = document.createElement('style');
document.head.appendChild(style);
style.sheet.insertRule(`body {height: ${h}px}`);

// ajouter l'overlay et le mettre en display none
$('body').prepend(`<div class="overlay h-100 w-100"></div>`);
$('.overlay').css({'display':'none'});


// modifier le css du container en fonction du layout
if($('.layout-carre')){
    $("#calendar-container").css({
      display: "flex",
      "flex-wrap": "wrap",
    });
  }
  var today = new Date();
  var mois    = today.getMonth() + 1;
  var jour    = today.getDate();
  today = jour + '/' + mois 
  var currentDay;
    // ajouter la porte à chaque case
    $(".day").each(function (j) {
      var dayDate = j+1;
        $(this).prepend(`<div class="porte">${dayDate}</div>`);
        
        if(((j+1).toString()).length === 1 ){
          currentDay = `0${j+1}`
        }else{
          currentDay=(j+1).toString();
        }
        // if( mois == 12 ){
        //   console.log(mois);
        //   if( jour < currentDay){
        //     $(this).css({'pointer-events':'none'})
        //   }
        // }else{
        //   $(this).css({'pointer-events':'none'})
        // }
      })

        //au clic, actions !
        $('body').on('click','.day', function(){
          if($(this).children('.porte').hasClass('open')){
                $('body').append(`<div class="getbigger">${$(this).children('.content-day').html()}<i class="fas fa-times closed"></i></div>`);
                $('.overlay').css({'display':'block'});
            
          }else{
            $('.open').removeClass('open');
          }
          $('.closed').on('click', function(){
              $('.getbigger').remove();
              $('.overlay').css({'display':'none'});
              $('.open').removeClass('open');
          })
            $(this).children('.porte').addClass('open');
          });

