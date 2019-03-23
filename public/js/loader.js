// Loader animation
    $(window).on('load', function()
        {
            setTimeout(function(){
                $("#loader").remove();
            },500)
        });