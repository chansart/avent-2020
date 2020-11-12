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
        if( mois == 12 ){
          if( jour < currentDay){
            $(this).css({'pointer-events':'none'})
          }
        }else{
          $(this).css({'pointer-events':'none'})
          
        }
      })
      $('body').on('click', '.cell', function(){
          if($(this).children('.day').css('pointer-events') =='none'){
              alert("Encore un peu de patience ! :D");
          }
      })