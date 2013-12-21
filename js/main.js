;
(function ($) {

    $(function () {
        /* DROPDOWN */

        $('.underLink a').focus(function () {
            $(this).parent().parent().parent().css({
                height: 400,
                padding: "1em 0",
            });
        });
        $('.underLink a').focusout(function () {
            $(this).parent().parent().parent().css({
                height: 0,
                padding: "0 0",
            });
        });
        if ($(window).width() < 940) {
            $('.menuLink').on('click', openMenu);


        }
        else if ($(window).width() > 940) {
            $('.moreLink').on('mouseenter', ariaOpen);
            $('.maxDev').on('mouseenter', ariaOpen);
            $('.moreLink').on('mouseleave', ariaClose);
            /*
             $('.invisible-link a.moreLink').on('mouseenter', showDropDown);
             $('.maxDev').on('mouseenter', showDropDown);
             $('.maxDev').on('mouseleave', hideDropDown);
             $('.invisible-link a.moreLink').on('mouseleave', hideDropDown);*/
        }
        $('.moreLink').on('click', openLink);

        $('.showItems').on('click', openBasket);

        /* END DROPDOWN */
        /* ORDER2 */
        $('.formInscription').css("display", "none");
        $('.newsCompte').on('click', showIncriptionForm);


        /*END ORDER2*/

        /* ANCRES */
        /* END ANCRES */
        if ($(window).width() > 940) {
            $('.invisible-link').css({display: "block"})
        }
        $(window).resize(function () {
            if ($(window).width() >= 940) {
                $('.invisible-link').css({display: "block"})
            } else {
                $('.invisible-link').css({display: "none"})
            }
        });
        /* INTRO */
        $(window).load(function () {

            $('.intro .item1').css({
                "-webkit-transform": "translate3D(310px,0,0)",
                "-moz-transform": "translate3D(310px,0,0)",
                "-o-transform": "translate3D(310px,0,0)",
                "-ms-transform": "translate3D(310px,0,0)",
                "transform": "translate3D(310px,0,0)",
                opacity: 1,
            });
            $('.intro .item2').css({
                "-webkit-transform": "translate3D(-310px,0,0)",
                "-moz-transform": "translate3D(-310px,0,0)",
                "-o-transform": "translate3D(-310px,0,0)",
                "-ms-transform": "translate3D(-310px,0,0)",
                "transform": "translate3D(-310px,0,0)",
                opacity: 1,
            });


        });
        /* END INTRO */

    });
    var isEmpty = function (el) {
        return !$.trim(el)
    }

    var scrollTo = function (hash) {
        location.hash = "#" + hash;
    }

    var validateEmail = function (email) {
        var re = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
        return re.test(email);
    }
    var ariaOpen = function (e) {
        $target = $(e.currentTarget);
        $target.attr('aria-expanded', 'true');
        $target.parent().find('.maxDev').attr('aria-expanded', 'true').attr('aria-hidden', 'false');

    }
    var ariaClose = function (e) {
        $target = $(e.currentTarget);
        $target.attr('aria-expanded', 'false');
        $target.parent().find('.maxDev').attr('aria-expanded', 'false').attr('aria-hidden', 'true');
    }
    var showIncriptionForm = function () {
        var $Email = $('#email').val(),
            $Form = $('.formInscription'),
            $root = $('html, body');

        if (!isEmpty($Email)) {
            if (validateEmail($Email)) {
                console.log("not");
                $('.formInscription').fadeIn();


                $root.animate({
                    scrollTop: $($Form).offset().top
                }, 500);
                return false;
            } else {
                console.log('emailNot');
            }

        }
        else {
            console.log('empty');
        }

    };
    var showDropDown = function (e) {

        $(this).parent().find('.maxDev').slideDown();

    };
    var hideDropDown = function (e) {

        $(this).parent().find('.maxDev').slideUp();

    };
    var showDev = function (e) {

        $(this).css('opacity', '1');
    };
    var openMenu = function (e) {
        e.preventDefault();
        $('.invisible-link').slideToggle();
    };
    var openLink = function (e) {
        var $findMenu = $(this).parent().find('.maxDev');
        e.preventDefault();
        $findMenu.slideToggle();
        //$findMenu.css('height','100%');
        if ($(this).find('span').hasClass('icon icon-chevron-right-white') && $findMenu) {
            $(this).find('span').removeClass('icon icon-chevron-right-white').addClass('icon icon-chevron-bottom-white');
        }
        else {
            $(this).find('span').removeClass('icon icon-chevron-bottom-white').addClass('icon icon-chevron-right-white');
        }

    };
    var openBasket = function (e) {
        e.preventDefault();
        $('.panierItem').slideToggle();
    };


}).call(this, jQuery);