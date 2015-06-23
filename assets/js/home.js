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
    }, 7000);
});