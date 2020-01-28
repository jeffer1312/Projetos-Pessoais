$(function() {


    delay = 10000;
    var curIndex = 0;
    var amt = $('.sobre-noticia').length;
    initSlider();
    autoPlay();
    clickSlider()


    function initSlider() {
        var sizeContainer = 100 * amt;
        var sizeBoxSingle = 100 / amt;
        $('.sobre-noticia').css('width', sizeBoxSingle + '%');
        $('.scroll-wrapper').css('width', sizeContainer + '%');

        for (var i = 0; i < amt; i++) {
            if (i == 0)
                $('.slider-bullets').append('<span style="background-color:rgb(170,170,170);"></span>');
            else
                $('.slider-bullets').append('<span></span>');
        }
    }



    function autoPlay() {
        setInterval(function() {
            curIndex++;
            if (curIndex == amt)
                curIndex = 0;
            goToSlider(curIndex)
        }, delay)
    }

    function goToSlider(curIndex) {
        var offSetX = $('.sobre-noticia').eq(curIndex).offset().left - $('.scroll-wrapper').offset().left;
        $('.slider-bullets span').css('background-color', 'rgb(200,200,200)');
        $('.slider-bullets span').eq(curIndex).css('background-color', 'rgb(170,170,170)');
        $('.scrollNoticia').stop().animate({ 'scrollLeft': offSetX });
    }
    $(window).resize(function() {
        $('.scrollNoticia').stop().animate({ 'scrollLeft': 0 });
    })
});