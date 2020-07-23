(function ($)
{

  "use strict";

    // PRE LOADER
    $(window).load(function(){
      $('.preloader').fadeOut(1000); // set duration in brackets
    });


    // MENU
    $('.navbar-collapse a').on('click',function(){
      $(".navbar-collapse").collapse('hide');
    });

    $(window).scroll(function() {
      if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
          } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
          }
    });


    // HOME SLIDER & COURSES & CLIENTS
    $('.home-slider').owlCarousel({
      animateOut: 'fadeOut',
      items:1,
      loop:true,
      dots:false,
      autoplayHoverPause: false,
      autoplay: true,
      smartSpeed: 1000,
    })

    $('.owl-courses').owlCarousel({
      animateOut: 'fadeOut',
      loop: true,
      autoplayHoverPause: false,
      autoplay: true,
      smartSpeed: 1000,
      dots: false,
      nav:true,
      navText: [
          '<i class="fa fa-angle-left"></i>',
          '<i class="fa fa-angle-right"></i>'
      ],
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
        },
        1000: {
          items: 3,
        }
      }
    });

    $('.owl-client').owlCarousel({
      animateOut: 'fadeOut',
      loop: true,
      autoplayHoverPause: false,
      autoplay: true,
      smartSpeed: 1000,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
        },
        1000: {
          items: 3,
        }
      }
    });


    // SMOOTHSCROLL
    $(function() {
      $('.custom-navbar a, #home a').on('click', function(event) {
        var $anchor = $(this);
          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 49
          }, 1000);
            event.preventDefault();
      });
    });

})(jQuery);



function updateOptions()
{
    var idArray = ['ac_option','tv_option','mob_option'];
    var x = document.getElementById("product_cat").value;
    for(var i = 0;i< idArray.length;i++)
    {
        console.log();
        var selectedOption = document.getElementById(idArray[i]);
        selectedOption.style.display = 'none';
    }
    if(x=='tv')
    {
        var selectedOption = document.getElementById("tv_option");
        selectedOption.style.display = "block";
    }
    else if(x=='mob')
    {
        var selectedOption = document.getElementById("mob_option");
        selectedOption.style.display = "block";
    }else if(x=='ac')
    {
        var selectedOption = document.getElementById("ac_option");
        selectedOption.style.display = "block";
    }
}

function placeBid()
{
    var price = document.getElementById("price").value;
    console.log("price =");
    console.log(price);console.log("price =");

    if( price==null || price=="")
    {
        swal("Oops!", "Please enter a price.", "error");
        return;
    }
    var text = "";
    var selectedOption = document.getElementById("product_cat");
    if(selectedOption.value=='tv')
    {

        text = document.getElementById("tv_brand").selectedOptions[0].text;
        text+=" "+ selectedOption.selectedOptions[0].text;;
        text+= " "+  document.getElementById("tv_type").selectedOptions[0].text;;
        text+= " "+  document.getElementById("tv_size").selectedOptions[0].text;+" inch";
    }
    else if(selectedOption.value=='mob')
    {
        text = document.getElementById("mob_brand").selectedOptions[0].text;
        text+=" "+ selectedOption.selectedOptions[0].text;
    }
    else
    {
        text = document.getElementById("ac_brand").selectedOptions[0].text;
        text+= " "+  document.getElementById("ac_type").selectedOptions[0].text;;
        text+=" "+ selectedOption.selectedOptions[0].text;;
        text+= " "+  document.getElementById("ac_power").selectedOptions[0].text +" Ton";
    }

    swal("Congratulations!", "Your bid for "+text +" is successfully placed for Rs."+price+".", "success");

}
