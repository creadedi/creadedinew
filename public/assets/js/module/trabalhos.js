requirejs.config({
    baseUrl: 'assets/js',
    paths: {
        
    },
});

define(['jquery'], function () {
    ESTRUTURA.modules.trabalhos = {
        init: function () {
            TRABALHOS = this;

            TRABALHOS.baseDelay = 2000;
            TRABALHOS.baseDuration = 300;

            TRABALHOS.triggers();
            TRABALHOS.main();
        },

        main: function () {
           // SCROLLMAGIC
            TRABALHOS.sm();

           // TWEENLITE
           TRABALHOS.tw();
        },

        triggers: function () {
           
        },

        /* TWEEN LITE */
        tw: function () {
            require(['tweenLite', 'animationGsap'], function (TweenLite) {

            });
        },

        /* SCROLL MAGIC */
        sm: function () {
            require(['tweenMax', 'scrollMagic', 'timelineMax', 'animationGsap'], function (TweenMax, ScrollMagic, TimelineMax) {
                TRABALHOS.controller = new ScrollMagic.Controller();
    
            });
        },
    };

});



