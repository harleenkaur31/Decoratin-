//js documents 

//Table of content  
//1. vars and inits 


jQuery(document).ready(function ($) {


    "user strit"

    // 1 vars and Inits

   
    var hamburger = $('.hamburger_container');
    var menu = $('.hamburger_menu');
    var menuActive = false;
    var hamburgerClose = $('.hamburger_close');
    var fsOverlay = $('.fs_menu_overlay');

    initMenu();
    initFavorite();
    initIsotopeFiltering();
   // initTimer();
  

    //2. Inits Menu
    function initMenu()
    {
        if(hamburger.length)
        {
            hamburger.on('click', function()
            {
                if(!menuActive)
                {
                    openMenu();

                }
            });
        }
        if(fsOverlay.length)
        {
            fsOverlay.on('click', function()
            {
                if(menuActive)
                {
                    closeMenu();

                }
            });
        }
        if(hamburgerClose.length)
        {
            hamburgerClose.on('click', function()
            {
                if(menuActive)
                {
                    closeMenu();

                }
            });
        }

        if($('.menu_item'),length)
        {
            var items= document.getElementsByClassName('menu_item');
            var i;

            for(i=0; i < items.length; i++)
            {
                if(items[i].classList.contains("has-children"))
                {
                    items[i].oneclick= function()
                    {
                        this.classList.toggle("active");
                        var panel=this.children[1];
                        if(panel.style.maxHeight)
                        {
                            panel.style.maxHeight= null;
                        }
                        else
                        {
                            panel.style.maxHeight= panel.scrollHeight +"px";
                        }
                    }
                }
            }
        }
    }
    function openMenu()
    {
        menu.addClass('active');
        fsOverlay.css('pointer-events',"auto");
        menuActive= true;
    }
      function closeMenu()
    {
        menu.removeClass('active');
        fsOverlay.css('pointer-events',"none");
        menuActive= false;
    }



 
/*

    function initTimer() {
        if ($('.timer').length) {
            var date = new Date();
            date.setDate(date.getDate() + 7);
            var target_date = date.getTime();

            //variables for time units 
            var days, hours, minutes, seconds;
            var d = $('#day');
            var h = $('#hour');
            var m = $('#minute');
            var s = $('#second');

            setInterval(function () {
                //find the amount of "seconds "now and target 
                var current_date = new Date().getTime();
                var seconds_left = (target_date - current_date) / 1000;

                //do some time calculation
                days = parseInt(seconds_left / 86400);
                seconds_left = seconds_left % 86400;

                hours = parseInt(seconds_left / 3600);
                seconds_left = seconds_left % 3600;

                minutes = parseInt(seconds_left / 60);
                seconds = parseInt(seconds_left % 60);

                //display result
                d.text(days);
                h.text(hours);
                m.text(minutes);
                s.text(seconds);

            }, 1000);  //setInterval(function, milliseconds);
        }
    }
 
*/
 

     //3. Countdown Timer 
  var deadline = new Date("Nov 24, 2021 14:46:25").getTime(); 
    
  var x = setInterval(function() { 
    
  var now = new Date().getTime(); 
  var t = deadline - now; 
  var days = Math.floor(t / (1000*60*60*24)); 
  var hours = Math.floor((t%(1000*60*60*24))/(1000 * 60 * 60)); 
  var minutes = Math.floor((t%(1000*60*60)) / (1000 * 60)); 
  var seconds = Math.floor((t%(1000*60)) / 1000); 
  document.getElementById("day").innerHTML =days ; 
  document.getElementById("hour").innerHTML =hours; 
  document.getElementById("minute").innerHTML = minutes;  
  document.getElementById("second").innerHTML =seconds;  
  if (t < 0) { 
          clearInterval(x); 
          document.getElementById("demo").innerHTML = "TIME UP"; 
          document.getElementById("day").innerHTML ='0'; 
          document.getElementById("hour").innerHTML ='0'; 
          document.getElementById("minute").innerHTML ='0' ;  
          document.getElementById("second").innerHTML = '0'; } 
  }, 1000); 

    //4. Init favorite

    function initFavorite() {
        if ($('.favorite').length) {
            var favs = $('.favorite');

            favs.each(function () {
                var fav = $(this);
                var active = false;
                if (fav.hasClass('active')) {
                    active = true;
                }

                fav.on('click', function () {
                    if (active) {
                        fav.removeClass('active');
                        active = false;
                    }

                    else {
                        fav.addClass('active');
                        active = true;
                    }
                })
            });
        }
    }




    //5. Inite isotope filtering

    function initIsotopeFiltering() {

        if ($('.grid_sorting_button').length) {
            $('.grid_sorting_button').click(function () {
                $('.grid_sorting_button.active').removeClass('active');
                $(this).addClass('active');


                var selector = $(this).attr('data-filter');
                $('.product-grid').isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });
                return false;
            });

        }
    }



 

});