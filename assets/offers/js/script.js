var videoswiper = new Swiper('.testimonial__swiper', {
    loop: true,
    speed: 100,
    autoplay: {
        delay: 1000,
    },
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '"></span>';
        },
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
        },
        767.98: {
            slidesPerView: 1,
        },
        991.98: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        },
    }
})

var scene = document.getElementById('arrows-1');
var parallaxInstance = new Parallax(scene, {
    relativeInput: true
});

var scene1 = document.getElementById('arrows-2');
var parallaxInstance1 = new Parallax(scene1, {
    relativeInput: true
});


$(".header .header__bars").on('click', function () {

    var selector = $(".header .header__nav")

    if (selector.hasClass('shown')) {
        selector.css('right', "100%");
        selector.removeClass('shown');
    } else {
        selector.css('right', "0");
        selector.addClass('shown');
    }
});

$(".header .header__nav span").on('click', function () {

    var selector = $(".header .header__nav")

    if (selector.hasClass('shown')) {
        selector.css('right', "100%");
        selector.removeClass('shown');
    } else {
        selector.css('right', "0");
        selector.addClass('shown');
    }
});
