requirejs.config({
    baseUrl: 'assets/js',
    paths: {
        
    },
});

define(['jquery'], function() {
    ESTRUTURA.modules.quem_sou = {
        init: function() {
            QUEM = this;

            QUEM.baseDelay = 2000;
            QUEM.baseDuration = 300;

            QUEM.triggers();
            QUEM.main();
        },

        main: function() {
            // SCROLLMAGIC
            QUEM.sm();

            // TWEENLITE
            QUEM.tw();
        },

        triggers: function() {
           
        },

        /* TWEEN LITE */
        tw: function() {
            require(['tweenLite', 'animationGsap'], function(TweenLite) {

            });
        },

        /* SCROLL MAGIC */
        sm: function() {
            require(['tweenMax', 'scrollMagic', 'timelineMax', 'animationGsap'], function(TweenMax, ScrollMagic, TimelineMax) {
                QUEM.controller = new ScrollMagic.Controller();

            });
        },
    };

});