$(function() {

    //Funçao slider

    var indiceAtual = 0;
    var indiceMaximo = $('.slider img').length;
    var delay = 5000;
    initSlider();
    clickSlider();

    function initSlider() {
        for (var i = 0; i < indiceMaximo; i++) {
            if (i == 0) {
                $('.bullets-nav').append('<span style="background-color:#069;"></span>');
            } else {
                $('.bullets-nav').append('<span></span>');
            }
        }
        $('.slider img').eq(0).fadeIn();
        setInterval(function() {
            alternarSlider();
        }, delay);
    }

    function clickSlider() {
        $('.bullets-nav span').click(function() {
            $('.slider img').eq(indiceAtual).stop().fadeOut(2000);
            indiceAtual = $(this).index();
            $('.slider img').eq(indiceAtual).stop().fadeIn(2000);
            $('.bullets-nav span').css('background-color', '#ccc');
            $(this).css('background-color', '#069');

        })
    }


    function alternarSlider() {
        $('.slider img').eq(indiceAtual).stop().fadeOut();
        indiceAtual++;
        if (indiceAtual == indiceMaximo) {
            indiceAtual = 0;
        }
        $('.bullets-nav span').css('background-color', '#ccc');
        $('.bullets-nav span').eq(indiceAtual).css('background-color', '#069');
        $('.slider img').eq(indiceAtual).stop().fadeIn();

    }
    //fim slider

    /*slider noticias*/


    var noticiaAtual = 0;
    var noticiaMaximo = $('.noticia .box').length;
    var delay = 7000;
    initNotice();
    clickSlider();

    function initNotice() {

        $('.noticia .box').eq(0).fadeIn();
        setInterval(function() {
            alternarNotice();
        }, delay);
    }




    function alternarNotice() {
        $('.noticia .box').eq(noticiaAtual).stop().fadeOut();
        noticiaAtual++;
        if (noticiaAtual == noticiaMaximo) {
            noticiaAtual = 0;
        }
        $('.noticia .box').eq(noticiaAtual).stop().fadeIn();

    }
    /*fim slider noticias*/

});