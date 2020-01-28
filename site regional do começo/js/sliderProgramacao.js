$(function() {
    var data = new Date();
    var hour = data.getHours(); //0-23
    var min = data.getMinutes(); // 0-59
    var hora = hour + ':' + min;
    console.log(hora);


    delay = 500;
    var curIndex = 0;
    var amt = $('.sobre-programacao').length;
    initSlider();
    autoPlay();
    horaCerta();

    function horaCerta() {
        if (hora >= '5:0' && hora <= '7:58') {
            $('#valdir').css('display', 'block')
            console.log('hora do valdir');
            console.log(hora);

        } else if (hora >= '7:59' && hora <= '11:59') {
            $('#claudia').css('display', 'block')
            console.log('hora da claudia');
            console.log(hora);

        } else if (hora >= '12:0' && hora <= '12:59') {
            $('#washington').css('display', 'block')
            console.log('hora do washington');
            console.log(hora);

        } else if (hora >= '13:0' && hora <= '15:59') {
            $('#alice').css('display', 'block')
            console.log('hora da alice');
            console.log(hora);

        } else if (hora >= '16:0' && hora <= '18:59') {
            $('#bruno').css('display', 'block')
            console.log('hora do bruno');
            console.log(hora);

        } else if (hora >= '19:0' && hora <= '20:59') {
            $('#william').css('display', 'block')
            console.log('hora da claudia');
            console.log(hora);

        } else if (hora >= '21:0' && hora <= '21:59') {
            $('#brasil').css('display', 'block')
            console.log('hora da claudia');
            console.log(hora);

        } else if (hora >= '22:00' && hora <= '23:59') {
            $('#automatico').css('display', 'block')
            console.log('automatico');
            console.log(hora);


        } else {
            $('#automatico').css('display', 'block')
            console.log('automatico');
            console.log(hora);

        }
    }




    function initSlider() {
        var sizeContainer = 100 * amt;
        var sizeBoxSingle = 100 / amt;


        $('.sobre-programacao').css('width', sizeBoxSingle + '%');
        $('.scroll-wrapperProgramacao').css('width', sizeContainer + '%');



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
        var offSetX = $('.sobre-programacao').eq(curIndex).offset().left - $('.scroll-wrapperProgramacao').offset().left;

        $('.scrollProgramacao').stop().animate({ 'scrollLeft': offSetX });
    }
    $(window).resize(function() {
        $('.scrollProgramacao').stop().animate({ 'scrollLeft': 0 });
    })



});