// Banner size 
    $("#banner").css('height', $(document).height())
// Title animation
    $('.title').each(function(){
        $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
    });
    anime.timeline()
    .add({
        targets: '.title .letter',
        opacity: [0,1],
        easing: "easeInOutQuad",
        duration:400,
        delay: function(el, i) {
        return 50 * (i+1)
        }
    })
//Paragraph animation
    $(window).on('load',function()
    {
        $(".description").animate({opacity: 1}, 2000);
    })

    $(window).on('load',function()
    {
        $(".btn-ticketing").animate({opacity: 0.9}, 2000);
    })