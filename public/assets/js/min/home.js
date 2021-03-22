requirejs.config({baseUrl:"assets/js",paths:{vide:"./plugin/vide"}}),define(["jquery","vide"],function(){ESTRUTURA.modules.home={init:function(){HOME=this,HOME.baseDelay=2e3,HOME.baseDuration=300,HOME.triggers(),HOME.main()},main:function(){HOME.sp(),HOME.tl(),HOME.tm(),HOME.sm()},triggers:function(){$(document).ready(function(){$(".glyphicon-chevron-right, .glyphicon-chevron-left").click(function(){HOME.sp()})})},tm:function(){require(["tweenMax","animationGsap"],function(e){})},tl:function(){require(["tweenLite","animationGsap"],function(e){})},sp:function(){require(["tweenMax","scrollMagic","timelineMax","animationGsap"],function(e,o,t){HOME.controller=new o.Controller,$(".section").each(function(){new o.Scene({triggerElement:"#slide-project"}).setTween(e.fromTo($(".fundo_imagem_port",this),.4,{opacity:0},{opacity:1,delay:1})).addTo(HOME.controller)}),$(".section").each(function(){new o.Scene({triggerElement:"#slide-project"}).setTween(e.fromTo($(".titulo_project",this),.4,{x:-80,opacity:0},{x:0,opacity:1,delay:1.3})).addTo(HOME.controller)}),$(".section").each(function(){new o.Scene({triggerElement:"#slide-project"}).setTween(e.fromTo($(".titulo_case",this),.4,{x:-80,opacity:0},{x:0,opacity:1,delay:1.6})).addTo(HOME.controller)}),$(".section").each(function(){new o.Scene({triggerElement:"#slide-project"}).setTween(e.fromTo($(".paragrafo_project_home",this),.4,{y:-80,opacity:0},{y:0,opacity:1,delay:1.9})).addTo(HOME.controller)}),$(".section").each(function(){new o.Scene({triggerElement:"#slide-project"}).setTween(e.fromTo($(".link_project_home",this),.4,{x:-80,opacity:0},{x:0,opacity:1,delay:2.2})).addTo(HOME.controller)}),$(".section").each(function(){new o.Scene({triggerElement:".engloba_services"}).setTween(e.staggerFromTo(".item-serv",.5,{opacity:0,x:80},{opacity:1,x:0,delay:1},1)).addTo(HOME.controller)})})},sm:function(){require(["tweenMax","scrollMagic","timelineMax","animationGsap"],function(e,o,t){HOME.controller=new o.Controller,$(".section").each(function(){new o.Scene({triggerElement:"#texto-nome-grande"}).setTween(e.fromTo($(".bloco-name",this),.5,{opacity:0},{opacity:1,delay:.4})).addTo(HOME.controller)}),$(".section").each(function(){new o.Scene({triggerElement:"#texto-nome-grande"}).setTween(e.fromTo($(".texto-up",this),.5,{x:-600,opacity:0},{x:0,opacity:1,delay:1.2})).addTo(HOME.controller)}),$(".section").each(function(){new o.Scene({triggerElement:"#texto-nome-grande"}).setTween(e.fromTo($(".texto-down",this),.5,{x:600,opacity:0},{x:0,opacity:1,delay:1.2})).addTo(HOME.controller)}),$(".section").each(function(){new o.Scene({triggerElement:"#texto-nome-grande"}).setTween(e.fromTo($(".apresentacao",this),.5,{opacity:0},{opacity:1,delay:1.5})).addTo(HOME.controller)}),$(".section").each(function(){new o.Scene({triggerElement:"#texto-nome-grande"}).setTween(e.fromTo($(".foto-pessoa",this),.5,{opacity:0},{opacity:1,delay:1.8})).addTo(HOME.controller)}),$(".section").each(function(){new o.Scene({triggerElement:"#texto-comp"}).setTween(e.fromTo($(".text-intro-home",this),.5,{x:-200,opacity:0},{x:0,opacity:1,delay:.7})).addTo(HOME.controller)}),$(".section").each(function(){new o.Scene({triggerElement:"#slide-project"}).setTween(e.fromTo($(".title_home_project",this),.4,{x:-200,opacity:0},{x:0,opacity:1,delay:.7})).addTo(HOME.controller)}),$(".section").each(function(){new o.Scene({triggerElement:".servicos"}).setTween(e.fromTo($(".fundo_services"),.4,{opacity:0,y:-180},{opacity:1,y:0,delay:.3})).addTo(HOME.controller)}),$(".section").each(function(){new o.Scene({triggerElement:".servicos"}).setTween(e.fromTo($(".engloba_services"),.2,{opacity:0,y:180},{opacity:1,y:0,delay:.2})).addTo(HOME.controller)})})}}});