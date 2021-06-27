jQuery(function($) {
    
    $('.simple-press-light-dark-toggle input[type="checkbox"]').on('click', function(){
        if($(this).prop("checked") == true){
            document.cookie='color_mode=dark-mode';
            document.cookie='meta_color=dark'; 
            $('body').addClass('dark-mode');
            $("meta[name='color-scheme']").attr("content", 'dark');
        }else {
            document.cookie='color_mode=';
            document.cookie='meta_color=light';
            $('body').removeClass('dark-mode');
            $("meta[name='color-scheme']").attr("content", 'light');
        }
    });



function simple_press_adjust_margin($) { 

	var headerHeight = jQuery('.sticky-top').height() + 'px' ;
	jQuery('#primary').css('margin-top', headerHeight);

}


var stickyOffset = ( jQuery(".sticky-top").offset() || { "top": NaN } ).top;

if ( ! isNaN( stickyOffset ) ) {

  jQuery(window).scroll(function(){
    var sticky = jQuery(".sticky-top");
        scroll = jQuery(window).scrollTop();
      
    if (scroll >= stickyOffset) sticky.addClass("fix-top");
    else sticky.removeClass("fix-top");
  });
}


$('.grid-view').masonry({
  // options
  itemSelector: '.type-post',
  // columnWidth: 300
});

//Tab to top
        jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 1){  
            jQuery('.scroll-top-wrapper').addClass("show");
        }
        else{
            jQuery('.scroll-top-wrapper').removeClass("show");
        }
    });
        jQuery(".scroll-top-wrapper").on("click", function() {
         jQuery("html, body").animate({ scrollTop: 0 }, 300);
        return false;
    });

//Tab to top 


jQuery(window).resize(simple_press_adjust_margin); 
jQuery(window).ready(simple_press_adjust_margin); 

//Get the button
var mybutton = document.getElementById("scrollTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {simple_press_scrollFunction()};

function simple_press_scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}


});