requirejs.config({
    baseUrl: 'assets/js',
    paths: {
        'vide': './plugin/vide'
    },
});

define(['jquery', 'vide'], function () {
    ESTRUTURA.modules.port = {
        init: function () {
            PORT = this;

            PORT.baseDelay = 2000;
            PORT.baseDuration = 300;

            PORT.triggers();
            PORT.main();
        },

        main: function () {
           // SCROLLMAGIC
           PORT.sm();

           // TWEENLITE
           PORT.tw();
        },

        triggers: function () {
            
        },


        /* TWEEN LITE */
        tw: function () {
            require(['tweenLite', 'animationGsap'], function (TweenLite) {
                if ($(window).width() > 850) {

                    TweenLite.fromTo('.foto-topo-portfolio', .5, {
                        opacity: 0
                    }, {
                        opacity: 1,
                        delay: .8
                    });

                    TweenLite.fromTo('.foto-apresent-portfolio h2', .5, {
                        x: 80,
                        opacity: 0,
                    }, {
                        x: 0,
                        opacity: 1,
                        delay: 1.2
                    });

                    TweenLite.fromTo('.cont-apresentacao', .5, {
                        x: -30,
                        opacity: 0
                    }, {
                        y: 0,
                        opacity: 1,
                        delay: 1.8
                    });

                    TweenLite.fromTo('.top-link', .5, {
                        y: -30,
                        opacity: 0
                    }, {
                        y: 0,
                        opacity: 1,
                        delay: 2.2
                    });

                }
            });
        },

        /* SCROLL MAGIC */
        sm: function () {
            require(['tweenMax', 'scrollMagic', 'timelineMax', 'animationGsap'], function (TweenMax, ScrollMagic, TimelineMax) {
                PORT.controller = new ScrollMagic.Controller();

                if ($(window).width() > 850) {
                   
                    $('.section').each(function () {
                        new ScrollMagic.Scene({
                            triggerElement: $(this)[0],
                            triggerHook: 0.8,
                            reverse: true
                        })
                            .setTween(TweenMax.fromTo($('.bloco-missao h2', this), .3, {
                                opacity: 0,
                                x: "-40"
                            }, {
                                    opacity: 1,
                                    x: 0,
                                    delay: .3
                                }))
                            .addTo(PORT.controller);
                    });

                    $('.section').each(function () {
                        new ScrollMagic.Scene({
                            triggerElement: $(this)[0],
                            triggerHook: 0.8,
                            reverse: true
                        })
                            .setTween(TweenMax.fromTo($('.bloco-missao p', this), .3, {
                                opacity: 0,
                                y: "-40"
                            }, {
                                    opacity: 1,
                                    y: 0,
                                    delay: .5
                                }))
                            .addTo(PORT.controller);
                    });



                    $('.section').each(function () {
                        new ScrollMagic.Scene({
                            triggerElement: $(this)[0],
                            triggerHook: 0.8,
                            reverse: true
                        })
                            .setTween(TweenMax.fromTo($('.bloco-story .icone-section', this), .3, {
                                opacity: 0,
                                y: "-40"
                            }, {
                                    opacity: 1,
                                    y: 0,
                                    delay: .3
                                }))
                            .addTo(PORT.controller);
                    });


                    $('.section').each(function () {
                        new ScrollMagic.Scene({
                            triggerElement: $(this)[0],
                            triggerHook: 0.8,
                            reverse: true
                        })
                            .setTween(TweenMax.fromTo($('.bloco-story span', this), .3, {
                                opacity: 0,
                                x: "-40"
                            }, {
                                    opacity: 1,
                                    x: 0,
                                    delay: .5
                            }))
                            .addTo(PORT.controller);
                    });

                    $('.section').each(function () {
                        new ScrollMagic.Scene({
                            triggerElement: $(this)[0],
                            triggerHook: 0.8,
                            reverse: true
                        })
                            .setTween(TweenMax.fromTo($('.bloco-story h2', this), .3, {
                                opacity: 0,
                                x: "-40"
                            }, {
                                    opacity: 1,
                                    x: 0,
                                    delay: .8
                            }))
                            .addTo(PORT.controller);
                    });

                    $('.section').each(function () {
                        new ScrollMagic.Scene({
                            triggerElement: $(this)[0],
                            triggerHook: 0.8,
                            reverse: true
                        })
                            .setTween(TweenMax.fromTo($('.bloco-story h3', this), .3, {
                                opacity: 0,
                                x: "-40"
                            }, {
                                    opacity: 1,
                                    x: 0,
                                    delay: .5
                            }))
                            .addTo(PORT.controller);
                    });


                    $('.section').each(function () {
                        new ScrollMagic.Scene({
                            triggerElement: $(this)[0],
                            triggerHook: 0.8,
                            reverse: true
                        })
                            .setTween(TweenMax.fromTo($('.bloco-story p', this), .3, {
                                opacity: 0,
                                y: "-40"
                            }, {
                                    opacity: 1,
                                    y: 0,
                                    delay: 1.2
                            }))
                            .addTo(PORT.controller);
                    });

                    $('.bloco-tech').each(function () {
                        new ScrollMagic.Scene({
                            triggerElement: $(this)[0],
                            triggerHook: 0.4,
                            reverse: true
                        })
                            .setTween(TweenMax.fromTo($('span', this), .3, {
                                opacity: 0,
                                y: "-40"
                            }, {
                                    opacity: 1,
                                    y: 0,
                                    delay: .3
                                }))
                            .addTo(PORT.controller);
                    });

                    $('.bloco-tech').each(function () {
                        new ScrollMagic.Scene({
                            triggerElement: $(this)[0],
                            triggerHook: 0.4,
                            reverse: true
                        })
                            .setTween(TweenMax.fromTo($('h2, h3', this), .3, {
                                opacity: 0,
                                y: "-40",
                                rotation: "35"
                            }, {
                                    opacity: 1,
                                    y: 0,
                                    rotation: 0,
                                    delay: .8
                                }))
                            .addTo(PORT.controller);
                    });

                    $('.bloco-tech').each(function () {
                        new ScrollMagic.Scene({
                            triggerElement: $(this)[0],
                            triggerHook: 0.4,
                            reverse: true
                        })
                            .setTween(TweenMax.fromTo($('.icone-section', this), .3, {
                                opacity: 0,
                                y: "-40",
                                rotation: "35"
                            }, {
                                    opacity: 1,
                                    y: 0,
                                    rotation: 0,
                                    delay: 1
                                }))
                            .addTo(PORT.controller);
                    });

                    $('.bloco-tech').each(function () {
                        new ScrollMagic.Scene({
                            triggerElement: $(this)[0],
                            triggerHook: 0.4,
                            reverse: true
                        })
                            .setTween(TweenMax.fromTo($('h4', this), .3, {
                                opacity: 0,
                                x: "-40"
                            }, {
                                    opacity: 1,
                                    x: 0,
                                    delay: 1.2
                                }))
                            .addTo(PORT.controller);
                    });

                    $('.bloco-tech').each(function () {
                        new ScrollMagic.Scene({
                            triggerElement: $(this)[0],
                            triggerHook: 0.8,
                            reverse: true
                        })
                            .setTween(TweenMax.fromTo($('p', this), .5, {
                                opacity: 0,
                                x: "-40"
                            }, {
                                    opacity: 1,
                                    x: 0,
                                    delay: 1.2
                                }))
                            .addTo(PORT.controller);
                    });

                    $('.section').each(function () {
                        new ScrollMagic.Scene({
                            triggerElement: $(this)[0],
                            triggerHook: 0.8,
                            reverse: true
                        })
                            .setTween(TweenMax.fromTo($('.item', this), .3, {
                                opacity: 0,
                            }, {
                                opacity: 1,
                                delay: .5

                            }))
                            .addTo(PORT.controller);
                    });

                }
            });
        },
    };

});



