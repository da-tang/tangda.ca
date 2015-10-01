/**
 * Created by datang on 15-06-21.
 */


$(document).ready(function(){

    console.log("hi");
    $("#loaderImg").load(function(){
        var imgUrl = $(this).attr("src");
        $(".jumbotron").css("background", " no-repeat center center fixed url("+imgUrl+")");
        $(".jumbotron").css("-webkit-background-size","100%");
        $(".jumbotron").css("-moz-background-size","100%");
        $(".jumbotron").css("-o-background-size","100%");
        $(".jumbotron").css("background-size","100%");
        $(".jumbotron").css("-webkit-background-size","cover");
        $(".jumbotron").css("-webkit-background-size","cover");
        $(".jumbotron").css("-webkit-background-size","cover");

        $("#loaderImg").remove();
    })

    setTimeout(function(){
        $("#loader-wrapper").toggleClass("loaderWrapperHide");
        $('#mainContainer').show();
        setTimeout(function(){
            $("#loader-wrapper").remove();
        }, 1200);
    }, 2500);

    $(window).scroll(function() {
        var height = $(window).scrollTop();
        var windowheight = window.innerHeight;
        if(height  > windowheight - 100) {
            $('#fixedHeader').removeClass("hide");
        }else {
            $('#fixedHeader').addClass("hide");
        }
    });


    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 80
                }, 1000);
                return false;
            }
        }
    });

});
