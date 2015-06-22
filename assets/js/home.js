/**
 * Created by datang on 15-06-21.
 */

$( document ).ready(function() {
    setInterval(function(){
        var next = $('.activeBackground').next();
        if(!next)
        {
            next = $('li').first();
        }
        setTimeout(function(){
            $('.activeBackground').removeClass('activeBackground').addClass('nonActiveBackground');
            next.removeClass('nonActiveBackground').addClass('activeBackground');

        },2000);

        AnimateTransition({
            container: '.image',
            blockIn: '.nonActiveBackground',
            blockOut: '.activeBackground',
            animation: 'fade-in'
        });

    }, 7000);
});