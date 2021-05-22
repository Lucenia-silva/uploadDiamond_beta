
/*SCRIPT DA HOME */
     /*AQUI ESTA A FUNCAO DO MENU */
     const nav = document.getElementsByClassName("menu_bar")[0];
     const topoNav = nav.offsetTop;
     window.onscroll = function(){
         fixarMenuNoTopo();
     }
     function fixarMenuNoTopo(){
         if(window.pageYOffset >= topoNav){
             nav.classList.add("FixoNoTopo");
         }else{
             nav.classList.remove("FixoNoTopo");
         }
     }

/* SCRIPT DO SLIDER*/
$('.brand-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1000:{
        items:5
      }
    }
  })





/*AQUI ESTA O CARROCEL */


$('#recipeCarousel').carousel({
    interval :2500
  })

  $('.carousel .carousel-item').each(function(){
      var next = $(this).next();
      if (!next.length) {
      next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));

      for (var i=0;i<2;i++) {
          next=next.next();
          if (!next.length) {
              next = $(this).siblings(':first');
            }

          next.children(':first-child').clone().appendTo($(this));
        }
  });



  /*AQUI AS ESTRELAS DE AVALIACAO*/

  var $star_rating = $('.star-rating .fa');

  var SetRatingStar = function() {
    return $star_rating.each(function() {
      if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
        return $(this).removeClass('fa-star-o').addClass('fa-star');
      } else {
        return $(this).removeClass('fa-star').addClass('fa-star-o');
      }
    });
  };

  $star_rating.on('click', function() {
    $star_rating.siblings('input.rating-value').val($(this).data('rating'));
    return SetRatingStar();
  });

  SetRatingStar();
  $(document).ready(function() {

  });
