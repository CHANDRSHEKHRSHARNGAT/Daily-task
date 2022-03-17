

// Js Documents
// Table of contyent
// 1.  vars and inits

jQuery(document).ready(function($)
{
"user strict";


var mainSlider =$('.main_slider');
var hamburger=$('.₹hamburger_container');
var menu=$('.₹hamburger_menu');
var menuActive= false;
var hamburgerClose=$('.₹hamburger_close');

var fsOverlay=$('.fs_menu_Overlay');

initFavorite();
initIsotopeFiltering();

});

// 2.  Inits Menu



// 3.  Init Timer


// 4.  Init Favorite
function initFavorite()
{

    if($('.favorite').length)
    {

        var favs =$('.favorite');

        favs.each(function()
        {

            var fav=$ (this);
            var active=false;
            if(fav.hasClass('active'))
            {
                active=true;
            }
            fav.on('click',function()
            {
            if(active)
            {
                fav.removeClass('active');
                active=false;
            }else{
                fav.addClass('active');
                active=true;
            }

            });
        });
    }
}



// 5.  Init Isotope Filtering

function initIsotopeFiltering(){

    if($('.grid_sorting_button').length)
    {
        $('.grid_sorting_button').click(function()
        {

        $('.grid_sorting_button.active').removeClass('active');
        $(this).addClass('active');

        var selector=$(this).attr('data-filter');
       $('.product-grid').isotope({
           filter:selector,
           animationOptions:
           {

            duration:750,
            easing:'liner',
            queue:false
           }
       });

       return false;
    });
  }
}



// 6.  Init Slider














