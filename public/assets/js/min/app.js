requirejs.config({baseUrl:"assets/js",paths:{jquery:"./library/jquery",bootstrap:"./library/bootstrap",fullpage:"./plugin/fullpage",loader:"./plugin/fakeloader",animationGsap:"./plugin/animationGsap",modernizr:"./plugin/modernizr",scrollMagic:"./plugin/scrollMagic",timelineMax:"./plugin/timelineMax",tweenLite:"./plugin/tweenLite",tweenMax:"./plugin/tweenMax",smoothScroll:"./plugin/smoothScroll"},shim:{loader:{deps:["jquery"]},bootstrap:{deps:["jquery"]},fullpage:{deps:["smoothScroll"]}}});var ESTRUTURA={};ESTRUTURA.modules={},define(["jquery","bootstrap","modernizr"],function(){ESTRUTURA.global={init:function(){MAIN=this,MAIN.triggers(),MAIN.main()},main:function(){MAIN.ld(),MAIN.fp(),MAIN.sm(),MAIN.tl(),MAIN.tm(),$.get("assets/svg/svg-symbols.svg",function(e){var t=document.createElement("div");t.style.display="none";var o=new XMLSerializer;t.innerHTML=o.serializeToString(e.documentElement),document.body.insertBefore(t,document.body.childNodes[0])})},triggers:function(){$(document).ready(function(){$(".menu-contact").click(function(){$(".menu_full").removeClass("active-menufull"),$(".page_contact").removeClass("active-contact"),$(".menu-contact").removeClass("act-pos-cont"),$(".menu-trigger").removeClass("act-pos-trigger"),$(".menu-trigger").removeClass("active-trigger"),$("body").removeClass("overflow")}),$(".bt-footer-contact").click(function(){$("body").addClass("overflow")}),$(".link1").mouseenter(function(){$(".pers1").addClass("active-pers")}).mouseleave(function(){$(".pers1").removeClass("active-pers")}),$(".link2").mouseenter(function(){$(".pers2").addClass("active-pers")}).mouseleave(function(){$(".pers2").removeClass("active-pers")}),$(".link3").mouseenter(function(){$(".pers3").addClass("active-pers")}).mouseleave(function(){$(".pers3").removeClass("active-pers")}),$(".link4").mouseenter(function(){$(".pers4").addClass("active-pers")}).mouseleave(function(){$(".pers4").removeClass("active-pers")}),$(".link5").mouseenter(function(){$(".pers5").addClass("active-pers")}).mouseleave(function(){$(".pers5").removeClass("active-pers")}),$(".link-nav").click(function(){$(".loadend").addClass("active-loadend")}),setTimeout(function(){$(".loadend").removeClass("active-loadend")},1e3)})},ld:function(){require(["loader"],function(){$(document).ready(function(){$.fakeLoader({spinner:"spinner1"})})})},fp:function(){require(["fullpage"],function(){new fullpage("#fullpage",{scrollBar:!0,scrollingSpeed:1e3,easing:"easeInOutCubic",verticalCentered:!1,easingcss3:"ease",responsiveWidth:1e3})})},tm:function(){require(["tweenMax","animationGsap"],function(e){$(document).ready(function(){$(".menu-trigger").click(function(){$(this).hasClass("active-trigger")?(e.staggerFromTo(".link_block",.5,{opacity:1,x:0},{opacity:0,x:80,delay:1},.2),$(this).removeClass("active-trigger"),$(".line-menu").removeClass("active-trigger"),$(this).addClass("reverse-trigger"),$(".line-menu").addClass("reverse-trigger")):($(this).addClass("active-trigger"),$(".line-menu").addClass("active-trigger"),$(this).removeClass("reverse-trigger"),$(".line-menu").removeClass("reverse-trigger"),e.staggerFromTo(".link_block",.5,{opacity:0,x:80},{opacity:1,x:0,delay:1},.2)),$(".menu_full").toggleClass("active-menufull"),$("body").toggleClass("overflow")}),$(".bt-contact, .bt-footer-contact").click(function(){e.staggerFromTo(".engloba-conteudo p",.5,{opacity:0,x:40},{opacity:1,x:0,delay:.5}),e.staggerFromTo(".engloba-conteudo a",.5,{opacity:0,y:20},{opacity:1,y:0,delay:.7}),e.staggerFromTo(".lettring-contact",.5,{opacity:0,y:80},{opacity:1,y:0,delay:1}),$(".page_contact").addClass("active-contact"),$(".menu-contact").addClass("act-pos-cont"),$(".menu-trigger").addClass("act-pos-trigger"),$(".line-menu").removeClass("active-trigger"),$(".menu-trigger").addClass("reverse-trigger"),$(".line-menu").addClass("reverse-trigger")})})})},tl:function(){require(["tweenLite","animationGsap"],function(e){})},sm:function(){require(["tweenMax","scrollMagic","timelineMax","animationGsap"],function(e,t,o){MAIN.controller=new t.Controller,$(".section").each(function(){new t.Scene({triggerElement:".pont-troca"}).setTween(e.fromTo($(".video, .foto-apresent-portfolio"),.4,{opacity:1},{opacity:0,delay:.3})).addTo(MAIN.controller)}),$(".section").each(function(){new t.Scene({triggerElement:".pont-troca"}).setTween(e.fromTo($(".fundo-footer"),.4,{opacity:0},{opacity:1,delay:.3})).addTo(MAIN.controller)})})}},ESTRUTURA.check=function(){var e=$("body").data("modules")?$.map($("body").data("modules").split(","),$.trim):[];require(e,function(){for(var e=0;e<=Object.keys(ESTRUTURA.modules).length-1;e++)ESTRUTURA.modules[Object.keys(ESTRUTURA.modules)[e]].init()})},ESTRUTURA.check(),ESTRUTURA.global.init()});