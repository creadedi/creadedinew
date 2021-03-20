requirejs.config({
    baseUrl: 'assets/js',
    paths: {
        'jquery': './library/jquery',
        'bootstrap': './library/bootstrap',
        'fullpage': './plugin/fullpage',
        'animationGsap': './plugin/animationGsap',
        'modernizr': './plugin/modernizr',
        'scrollMagic': './plugin/scrollMagic',
        'timelineMax': './plugin/timelineMax',
        'tweenLite': './plugin/tweenLite',
        'tweenMax': './plugin/tweenMax',
        'smoothScroll': './plugin/smoothScroll',
    },

    shim: {
        'bootstrap': {
            'deps': ['jquery']
        },

        'fullpage': {
            'deps': ['smoothScroll']
        },
    }
});

var ESTRUTURA = {};
ESTRUTURA.modules = {};

define(['jquery', 'bootstrap', 'modernizr'], function () {  
    ESTRUTURA.global ={
        init: function () {
            MAIN = this;

            MAIN.triggers();
            MAIN.main();
        },

        main: function () {
           // FULL PAGE
           MAIN.fp();

           // SCROLLMAGIC
           MAIN.sm();

           // TWEENLITE
           MAIN.tl();

           // TWEENMAX
           MAIN.tm();

           // SVG
            $.get('assets/svg/svg-symbols.svg', function (data) {
                var div = document.createElement('div');
                div.style.display = 'none';
                var S = new XMLSerializer();
                div.innerHTML = S.serializeToString(data.documentElement);
                document.body.insertBefore(div, document.body.childNodes[0]);
            });
        },

        triggers: function () {

            $(document).ready(function() {
               
            }); 
           
        },


        /* INÍCIO FUNÇÃO FULL PAGE */
        fp: function () {
            require(['fullpage'], function () {
                var myFullpage = new fullpage('#fullpage', {
                    scrollBar: true,
                    scrollingSpeed: 1000,
                    easing: 'easeInOutCubic',
                    verticalCentered: false,
                    easingcss3: 'ease',
                    responsiveWidth: 1000,
                });
            });
        },
        /* FIM FUNÇÃO FULL PAGE */

        /* TWEEN MAX */
        tm: function () {
            require(['tweenMax', 'animationGsap'], function (TweenMax) {
                function open_menu(){
                    TweenMax.staggerFromTo('.link_block', 0.5, {
                    opacity: 0,
                    x: 80
                    }, {
                    opacity: 1,
                    x: 0,
                    delay: 1
                    }, .2);
                }
    
                function close_menu(){
                    TweenMax.staggerFromTo('.link_block', 0.5, {
                    opacity: 1,
                    x: 0
                    }, {
                    opacity: 0,
                    x: 80,
                    delay: 1
                    }, .2);
                }
                
    
                $(document).ready(function() {
               
                    
                    /* Inicio Função Menu Trigger Animado */
                    $('.menu-trigger').click(function(){
                        if ($(this).hasClass('active-trigger')) {
                           close_menu();
                           $(this).removeClass('active-trigger');
                           $('.line-menu').removeClass('active-trigger');
                           $(this).addClass('reverse-trigger');
                           $('.line-menu').addClass('reverse-trigger');
                        }
                        else
                        {
                           $(this).addClass('active-trigger');
                           $('.line-menu').addClass('active-trigger');
                           $(this).removeClass('reverse-trigger');
                           $('.line-menu').removeClass('reverse-trigger');
                           open_menu();
                        }
                        
                        $('.menu_full').toggleClass('active-menufull');
                        $('body').toggleClass('overflow');
                    });
                    /* Fim Função Menu Trigger Animado */

                    /* Inicio Função Menu Contato */
                    $('.bt-contact, .bt-footer-contact').click(function(){ 
                        $('.page_contact').addClass('active-contact');
                        $('.menu-contact').addClass('act-pos-cont');
                        $('.menu-trigger').addClass('act-pos-trigger');
                        close_menu();
                        $('.line-menu').removeClass('active-trigger');
                        $('.menu-trigger').addClass('reverse-trigger');
                        $('.line-menu').addClass('reverse-trigger');
                    });
                    /* Fim Função Menu Contato */

                    /* Inicio Função Menu Contato Fechando */
                    $('.menu-contact').click(function(){
                        $('body').toggleClass('overflow');
                        $('.menu_full').removeClass('active-menufull');
                        $('.page_contact').removeClass('active-contact');
                        $('.menu-contact').removeClass('act-pos-cont');
                        $('.menu-trigger').removeClass('act-pos-trigger');
                        $('.menu-trigger').removeClass('active-trigger');
                        
                    });
                    /* Fim Função Menu Contato Fechando */
                });
            });
        },

        /* TWEEN LITE */
        tl: function () {
            require(['tweenLite', 'animationGsap'], function (TweenLite) {
                if ($(window).width() > 850) {
                }
            });
        },

        /* SCROLL MAGIC */
        sm: function () {
            require(['tweenMax', 'scrollMagic', 'timelineMax', 'animationGsap'], function (TweenMax, ScrollMagic, TimelineMax) {
                MAIN.controller = new ScrollMagic.Controller();

                $('.section').each(function () {
                    new ScrollMagic.Scene({
                        triggerElement: ".pont-troca",
                    })
                    .setTween(TweenMax.fromTo($('.video, .foto-apresent-portfolio'), 0.4, {
                        opacity: 1
                    }, {
                        opacity: 0,
                        delay: 0.3
                    }))
                    .addTo(MAIN.controller);
                });

                $('.section').each(function () {
                    new ScrollMagic.Scene({
                        triggerElement: ".pont-troca",
                    })
                    .setTween(TweenMax.fromTo($('.fundo-footer'), 0.4, {
                        opacity: 0
                    }, {
                        opacity: 1,
                        delay: 0.3
                    }))
                    .addTo(MAIN.controller);
                });
            });
        },
    };

    ESTRUTURA.check = function () {
        var modules = ($('body').data('modules')) ? $.map($('body').data('modules').split(','), $.trim) : [];

        require(modules, function () {
            for (var i = 0; i <= Object.keys(ESTRUTURA.modules).length - 1; i++) {
                ESTRUTURA.modules[Object.keys(ESTRUTURA.modules)[i]].init();
            }
        });
    };

    ESTRUTURA.check();
    ESTRUTURA.global.init();
});