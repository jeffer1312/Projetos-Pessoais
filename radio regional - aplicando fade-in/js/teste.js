$(document).ready(function() {
    var content = $('#swap');

    //pre carregando o gif

    $('#troca a').live('click', function(e) {
        e.preventDefault();


        var href = $(this).attr('href');
        $.ajax({
            url: href,
            success: function(response) {
                //forçando o parser
                var data = $('<div>' + response + '</div>').find('#content').html();

                //apenas atrasando a troca, para mostrarmos o loading
                window.setTimeout(function() {
                    content.fadeOut('slow', function() {
                        content.html(data).fadeIn();
                    });
                }, 500);
            }
        });

    });
});