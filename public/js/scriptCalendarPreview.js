var h = window.innerHeight;
var style = document.createElement('style');
document.head.appendChild(style);
style.sheet.insertRule(`body {height: ${h}px}`);

// ajouter l'overlay et le mettre en display none
$('body').prepend(`<div class="overlay h-100 w-100"></div>`);
$('.overlay').css({'display':'none'});

// modifier le css du container en foncction du layout
if($('.layout-carre')){
    console.log("hello");
    $("#calendar-container").css({
      display: "flex",
      "flex-wrap": "wrap",
    });
  }

    // ajouter la porte à chaque case
    $(".day").each(function (j) {
        $(this).prepend(`<div class="porte">${j+1}</div>`);
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
