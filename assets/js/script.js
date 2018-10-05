(function ($)
{
    "use strict";
    $('.til').textillate(
    {
        loop: true,
        in:
        {
            effect: 'fadeIn',
            delayScale: 1.5,
            delay: 150,
            shuffle: true
        },
        out:
        {
            effect: 'fadeOut',
            delayScale: 1.5,
            delay: 150,
            shuffle: true
        }
    });

    $(".testi-holder").owlCarousel(
    {
        singleItem: true,
        navigationText: 
        [
            '<span class="ion-ios-arrow-left"></span>',
            '<span class="ion-ios-arrow-right"></span>'
        ],
        navigation: true,
        pagination: false,
        transitionStyle: "fade"
    });

    $(".skill-holder").owlCarousel(
    {
        singleItem: true,
        navigationText: 
        [
            '<span class="ion-ios-arrow-left"></span>',
            '<span class="ion-ios-arrow-right"></span>'
        ],
        navigation: true,
        pagination: false,
        addClassActive: true,
        afterMove: function ()
        {
            if ($(this).find('active'))
            {
                $('.active .skillbar').each(function ()
                {
                    if (!$(this).find('.skillbar-bar').hasClass('to-animate'))
                    {
                        $(this).find('.skillbar-bar').addClass('to-animate');
                        animateSkill(950);
                    }
                });
            }
        }
    });

    $('.port-holder').owlCarousel(
    {
        items: 3,
        itemsDesktop: false,
        itemsDesktopSmall: [991, 2],
        itemsTablet: [768, 1],
        itemsTabletSmall: false,
        itemsMobile: false, //[479,1], 
        navigationText: 
        [
            '<span class="ion-ios-arrow-left"></span>',
            '<span class="ion-ios-arrow-right"></span>'
        ],
        navigation: true,
        pagination: false
    });

    $('.popup-it').magnificPopup(
    {
        closeMarkup: '<button title="%title%" type="button" class="mfp-close"><i class="ion-ios-close-empty"></i></button>'
    });

    $(document).on('click', '.mfp-close', function (e)
    {
        e.preventDefault();
        $.magnificPopup.close();
    });

    $('.counter-data').counterUp(
    {
        delay: 10,
        time: 2000
    });

    var loop = 0;
    var oTop = $('.skill-area').offset().top - window.innerHeight;

    $(window).on('scroll', function ()
    {
        var pTop = $(window).scrollTop();

        if (pTop >= oTop && loop == 0)
        {
            animateSkill(950);
        }
    });

    function animateSkill(delay)
    {
        $('.skillbar').each(function ()
        {
            $(this).find('.to-animate').animate(
            {
                width: $(this).attr('data-percent')
            }, delay);

            delay += 350;
        });
        loop = 1;
    }
    new WOW().init();

})(jQuery);