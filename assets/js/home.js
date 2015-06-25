/**
 * Created by datang on 15-06-21.
 */

$( document ).ready(function() {
    setInterval(function(){
        var next = $('.activeBackground').next();
        if(!next.length) {
            next = $('.image').children().first();
        }
        $('.activeBackground').removeClass('activeBackground').addClass('nonActiveBackground');
        next.removeClass('nonActiveBackground').addClass('activeBackground');
    }, 5000);


    $(window).scroll(function() {
        var height = $(window).scrollTop();

        if(height  > 0) {
            $('#navContainer').css({'opacity': '0', 'z-index': '-100'});
            $('#fixedHeader').css({'opacity': '1', 'z-index': '100'});
        }else {
            $('#fixedHeader').css({'opacity': '0', 'z-index': '-100'});
            $('#navContainer').css({'opacity': '1', 'z-index': '100'});
        }
    });

    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 80
                }, 600);
                return false;
            }
        }
    });
});