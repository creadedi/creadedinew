requirejs.config({baseUrl:"assets/js",paths:{vide:"./plugin/vide"}}),define(["jquery","vide"],function(){ESTRUTURA.modules.port={init:function(){PORT=this,PORT.baseDelay=2e3,PORT.baseDuration=300,PORT.triggers(),PORT.main()},main:function(){PORT.sm(),PORT.tw()},triggers:function(){},tw:function(){require(["tweenLite","animationGsap"],function(e){e.fromTo(".foto-topo-portfolio",.5,{opacity:0},{opacity:1,delay:3}),e.fromTo(".foto-apresent-portfolio h2",.5,{x:80,opacity:0},{x:0,opacity:1,delay:3.5}),e.fromTo(".cont-apresentacao",.5,{x:-30,opacity:0},{y:0,opacity:1,delay:4}),e.fromTo(".top-link",.5,{y:-30,opacity:0},{y:0,opacity:1,delay:4.5})})},sm:function(){require(["tweenMax","scrollMagic","timelineMax","animationGsap"],function(e,o,t){PORT.controller=new o.Controller,$(".section").each(function(){new o.Scene({triggerElement:$(this)[0],triggerHook:.8,reverse:!0}).setTween(e.fromTo($(".suporte-pc img",this),.3,{opacity:0},{opacity:1,delay:.6})).addTo(PORT.controller)}),$(".section").each(function(){new o.Scene({triggerElement:$(this)[0],triggerHook:.8,reverse:!0}).setTween(e.fromTo($(".bloco-missao h2",this),.3,{opacity:0,x:"-40"},{opacity:1,x:0,delay:.3})).addTo(PORT.controller)}),$(".section").each(function(){new o.Scene({triggerElement:$(this)[0],triggerHook:.8,reverse:!0}).setTween(e.fromTo($(".bloco-missao p",this),.3,{opacity:0,y:"-40"},{opacity:1,y:0,delay:.5})).addTo(PORT.controller)}),$(".section").each(function(){new o.Scene({triggerElement:$(this)[0],triggerHook:.8,reverse:!0}).setTween(e.fromTo($(".bloco-story .icone-section",this),.3,{opacity:0,y:"-40"},{opacity:1,y:0,delay:.3})).addTo(PORT.controller)}),$(".section").each(function(){new o.Scene({triggerElement:$(this)[0],triggerHook:.8,reverse:!0}).setTween(e.fromTo($(".bloco-story span",this),.3,{opacity:0,x:"-40"},{opacity:1,x:0,delay:.5})).addTo(PORT.controller)}),$(".section").each(function(){new o.Scene({triggerElement:$(this)[0],triggerHook:.8,reverse:!0}).setTween(e.fromTo($(".bloco-story h2",this),.3,{opacity:0,x:"-40"},{opacity:1,x:0,delay:.8})).addTo(PORT.controller)}),$(".section").each(function(){new o.Scene({triggerElement:$(this)[0],triggerHook:.8,reverse:!0}).setTween(e.fromTo($(".bloco-story h3",this),.3,{opacity:0,x:"-40"},{opacity:1,x:0,delay:.5})).addTo(PORT.controller)}),$(".section").each(function(){new o.Scene({triggerElement:$(this)[0],triggerHook:.8,reverse:!0}).setTween(e.fromTo($(".bloco-story p",this),.3,{opacity:0,y:"-40"},{opacity:1,y:0,delay:1.2})).addTo(PORT.controller)}),$(".bloco-tech").each(function(){new o.Scene({triggerElement:$(this)[0],triggerHook:.4,reverse:!0}).setTween(e.fromTo($("span",this),.3,{opacity:0,y:"-40"},{opacity:1,y:0,delay:.3})).addTo(PORT.controller)}),$(".bloco-tech").each(function(){new o.Scene({triggerElement:$(this)[0],triggerHook:.4,reverse:!0}).setTween(e.fromTo($("h2, h3",this),.3,{opacity:0,y:"-40",rotation:"35"},{opacity:1,y:0,rotation:0,delay:.8})).addTo(PORT.controller)}),$(".bloco-tech").each(function(){new o.Scene({triggerElement:$(this)[0],triggerHook:.4,reverse:!0}).setTween(e.fromTo($(".icone-section",this),.3,{opacity:0,y:"-40",rotation:"35"},{opacity:1,y:0,rotation:0,delay:1})).addTo(PORT.controller)}),$(".bloco-tech").each(function(){new o.Scene({triggerElement:$(this)[0],triggerHook:.4,reverse:!0}).setTween(e.fromTo($("h4",this),.3,{opacity:0,x:"-40"},{opacity:1,x:0,delay:1.2})).addTo(PORT.controller)}),$(".bloco-tech").each(function(){new o.Scene({triggerElement:$(this)[0],triggerHook:.8,reverse:!0}).setTween(e.fromTo($("p",this),.5,{opacity:0,x:"-40"},{opacity:1,x:0,delay:1.2})).addTo(PORT.controller)}),$(".section").each(function(){new o.Scene({triggerElement:$(this)[0],triggerHook:.8,reverse:!0}).setTween(e.fromTo($(".item",this),.3,{opacity:0},{opacity:1,delay:.5})).addTo(PORT.controller)})})}}});