(function($, window) {
	$('#owl-vitrine').owlCarousel({
        loop: true,
        autoplay: true,
        margin:30,
        nav: false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('#owl-menu2').owlCarousel({
        loop: true,
        autoplay: true,
        margin:0,
        nav:true,
        navText:["<i class='fa fa-caret-left'></i>","<i class='fa fa-caret-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:6
            }
        }
    });
    $('#owl-noticias').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 20,
        nav:true,
        navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });
    $('#owl-estrutura').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 0,
        nav:true,
        navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:2
            }
        }
    });
    $('#owl-galeria').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 0,
        nav:true,
        navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
})(jQuery, window);