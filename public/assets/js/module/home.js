requirejs.config({
    baseUrl: 'assets/js',
    paths: {
        'vide': './plugin/vide'
    },
});

define(['jquery', 'vide'], function () {
    ESTRUTURA.modules.home = {
        init: function () {
            HOME = this;

            HOME.baseDelay = 2000;
            HOME.baseDuration = 300;

            HOME.triggers();
            HOME.main();
        },

        main: function () {
           // SLIDER PROJECT
           HOME.sp();

           // TWEENLITE
           HOME.tl();

           // TWEENMAX
           HOME.tm();

           // SCROLLMAGIC
           HOME.sm();
        },

        triggers: function () {
            $(document).ready(function () {
                $('.glyphicon-chevron-right, .glyphicon-chevron-left').click(function () {
                    HOME.sp();
                });
            });
        },

        /* TWEEN MAX */
        tm: function () {
            require(['tweenMax', 'animationGsap'], function (TweenMax) {
                
            });
        },


        /* TWEEN LITE */
        tl: function () {
            require(['tweenLite', 'animationGsap'], function (TweenLite) {

            });
        },

        /* SLIDER PROJECT*/
        sp: function () {
            require(['tweenMax', 'scrollMagic', 'timelineMax', 'animationGsap'], function (TweenMax, ScrollMagic, TimelineMax) {
                HOME.controller = new ScrollMagic.Controller();


                $('.section').each(function () {
                    new ScrollMagic.Scene({
                        triggerElement: "#slide-project",
                    })
                    .setTween(TweenMax.fromTo($('.fundo_imagem_port', this), 0.4, {
                        opacity: 0
                    }, {
                        opacity: 1,
                        delay: 1
                    }))
                    .addTo(HOME.controller);
                });


                $('.section').each(function () {
                    new ScrollMagic.Scene({
                        triggerElement: "#slide-project",
                    })
                    .setTween(TweenMax.fromTo($('.titulo_project', this), 0.4, {
                        x: -80,
                        opacity: 0
                    }, {
                        x: 0,
                        opacity: 1,
                        delay: 1.3
                    }))
                    .addTo(HOME.controller);
                });


                $('.section').each(function () {
                    new ScrollMagic.Scene({
                        triggerElement: "#slide-project",
                    })
                    .setTween(TweenMax.fromTo($('.titulo_case', this), 0.4, {
                        x: -80,
                        opacity: 0
                    }, {
                        x: 0,
                        opacity: 1,
                        delay: 1.6
                    }))
                    .addTo(HOME.controller);
                });


                $('.section').each(function () {
                    new ScrollMagic.Scene({
                        triggerElement: "#slide-project",
                    })
                    .setTween(TweenMax.fromTo($('.paragrafo_project_home', this), 0.4, {
                        y: -80,
                        opacity: 0
                    }, {
                        y: 0,
                        opacity: 1,
                        delay: 1.9
                    }))
                    .addTo(HOME.controller);
                });

            
                $('.section').each(function () {
                    new ScrollMagic.Scene({
                        triggerElement: "#slide-project",
                    })
                    .setTween(TweenMax.fromTo($('.link_project_home', this), 0.4, {
                        x: -80,
                        opacity: 0
                    }, {
                        x: 0,
                        opacity: 1,
                        delay: 2.2
                    }))
                    .addTo(HOME.controller);
                });  
            
            });
        },

        /* SCROLL MAGIC */
        sm: function () {
            require(['tweenMax', 'scrollMagic', 'timelineMax', 'animationGsap'], function (TweenMax, ScrollMagic, TimelineMax) {
                HOME.controller = new ScrollMagic.Controller();

                

                $('.section').each(function () {
                    new ScrollMagic.Scene({
                        triggerElement: "#texto-nome-grande",
                    })
                    .setTween(TweenMax.fromTo($('.bloco-name', this), 0.5, {
                        opacity: 0
                    }, {
                        opacity: 1,
                        delay: 0.4
                    }))
                    .addTo(HOME.controller);
                });

                $('.section').each(function () {
                    new ScrollMagic.Scene({
                        triggerElement: "#texto-nome-grande",
                    })
                    .setTween(TweenMax.fromTo($('.texto-up', this), 0.5, {
                        x: -600,
                        opacity: 0
                    }, {
                        x: 0,
                        opacity: 1,
                        delay: 1.2
                    }))
                    .addTo(HOME.controller);
                });
                
                
                $('.section').each(function () {
                    new ScrollMagic.Scene({
                        triggerElement: "#texto-nome-grande",
                    })
                    .setTween(TweenMax.fromTo($('.texto-down', this), 0.5, {
                        x: 600,
                        opacity: 0
                    }, {
                        x: 0,
                        opacity: 1,
                        delay: 1.2
                    }))
                    .addTo(HOME.controller);
                });
                
                
                $('.section').each(function () {
                    new ScrollMagic.Scene({
                        triggerElement: "#texto-nome-grande",
                    })
                    .setTween(TweenMax.fromTo($('.apresentacao', this), 0.5, {
                        opacity: 0
                    }, {
                        opacity: 1,
                        delay: 1.5
                    }))
                    .addTo(HOME.controller);
                }); 


                $('.section').each(function () {
                    new ScrollMagic.Scene({
                        triggerElement: "#texto-nome-grande",
                    })
                    .setTween(TweenMax.fromTo($('.foto-pessoa', this), 0.5, {
                        opacity: 0
                    }, {
                        opacity: 1,
                        delay: 1.8
                    }))
                    .addTo(HOME.controller);
                });
            
    
                $('.section').each(function () {
                    new ScrollMagic.Scene({
                        triggerElement: "#texto-comp",
                    })
                    .setTween(TweenMax.fromTo($('.text-intro-home', this), 0.5, {
                        x: -200,
                        opacity: 0
                    }, {
                        x: 0,
                        opacity: 1,
                        delay: 0.7
                    }))
                    .addTo(HOME.controller);
                });


                $('.section').each(function () {
                    new ScrollMagic.Scene({
                        triggerElement: "#slide-project",
                    })
                    .setTween(TweenMax.fromTo($('.title_home_project', this), 0.4, {
                        x: -200,
                        opacity: 0
                    }, {
                        x: 0,
                        opacity: 1,
                        delay: 0.7
                    }))
                    .addTo(HOME.controller);
                });


            });
        },


    };

});



