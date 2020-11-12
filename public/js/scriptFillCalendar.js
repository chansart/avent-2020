var h = window.innerHeight;
var style = document.createElement('style');
document.head.appendChild(style);
style.sheet.insertRule(`body {height: ${h}px}`);

// ajouter l'overlay et le cacher
$('.calendar-preview').prepend(`<div class="overlay h-100 w-100"></div>`);
$('.overlay').css({'display':'none'});

// modifier le container en fonction du layout
if($('.layout-carre')){
  $("#calendar-container").css({
    display: "flex",
    "flex-wrap": "wrap",
  });
}
$(".cell").each(function () {
    var indexCell = $(".cell").index($(this));
    $(this).html(`<div class="day">${indexCell + 1}</div>`);
  });

// au clic sur un jour, une modal apparait pour rentrer du contenu
  $(".day").each(function () {
    $(this).on('click', function(){
      var idxModal = $(this).html();
      //  si une modal existe déjà -> delete
        if($('.modal')){
            $('.modal').remove();
        }
        $('.calendar-preview').append(`<div class="modal modal-${idxModal}"><i class="fas fa-times closed"></i><form class="form-modal" method="post" enctype="multipart/form-data"><label for="message-type">Type de votre message:</label>
        <select name="select-${idxModal}" class="message-select" id="select-${idxModal}">
            <option value="">Choississez une option</option>
            <option value="texte">Texte</option>
            <option value="image">Image</option>
            <option value="vidéo">Vidéo</option>
            <option value="hyperlien">Hyperlien</option> 
            <option value="url-image">Url de l'image</option> 
            <option value="url-vidéo">Url de la vidéo</option>   
        </select></form></div>`);
        // on peut fermer la modal avec la croix
        $('.closed').on('click', function(){
          $('.modal').remove();
          $('.overlay').css({'display':'none'});
      })
      // une fois le premier choix fait, on a un deuxieme form qui apparait
      $('.form-modal').append(`<div class="form2"></div>`);
        $('.message-select').on('click', function () {
          if($(this).val() !==""){
            $('.form2').html(`<label for="message">Votre ${$(this).val()}<br/> pour le ${idxModal} décembre: </label>`);
            if($(this).val() === "texte" || $(this).val() === "hyperlien" ){
              $('.form2').append(`<textarea class="message-texte" name="message-${idxModal}"></textarea>`);
            }
            if($(this).val() === "url-image" || $(this).val() === "url-vidéo" ){
              $('.form2').append(`<input type="url" class="message-texte" name="message-${idxModal}">`);
            }
            if($(this).val() === "image" || $(this).val() === "vidéo" ){
              $('.form2').append(`<input type="file" class="message-texte" name="file-${idxModal}">`);
            }
            $('.form2').append(`<input type="hidden" name="update" value="${idxModal}"><button class="valider" type="submit">Valider</button>`);
            
          }
          
      });
       
        $('.overlay').css({'display':'block'});
        
    })
    // une fois validé, la modal disparait et la db s'update
    $('.valider').on('click', function(){
      $('.overlay').css({'display':'none'});
      $(`.modal-${$(this).parent('.modal')}`).remove();
    })
  });
