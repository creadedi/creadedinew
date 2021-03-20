requirejs.config({
    baseUrl: 'assets/js',
    paths: {
        
    },

});

define(['jquery'], function () {
    ESTRUTURA.modules.sei_fazer = {
        init: function () {
            FAZER = this;

            FAZER.baseDelay = 2000;
            FAZER.baseDuration = 300;

            FAZER.triggers();
            FAZER.main();
        },

        main: function () {
            // SCROLLMAGIC
            FAZER.sm();

           // TWEENLITE
           FAZER.tw();
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
                FAZER.controller = new ScrollMagic.Controller();
    
            });
        },
    };

});



