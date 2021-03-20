@extends('site.master')

@section('conteudo')

        <div class="animsition" data-animsition-in="fade-in"
  data-animsition-in-duration="900"
  data-animsition-out="fade-out"
  data-animsition-out-duration="900">
  
  <section>
  
  <a href="{{ URL::asset('bianchini_biodiesel') }}"
    class="animsition-link"
    data-animsition-out="fade-out"
    data-animsition-out-duration="900" id="port_int">
  <div class="segura_nav_port nav_left">
    <div class="bt_nav_port bt_left">
        <div class="text_left">Projeto Anterior</div>
    </div>
  </div>
  </a>
  
  <a href="{{ URL::asset('modular_cargas') }}"
    class="animsition-link"
    data-animsition-out="fade-out"
    data-animsition-out-duration="900" id="port_int"><div class="segura_nav_port nav_right">
    <div class="bt_nav_port bt_right">
         <div class="text_right">Próximo Projeto</div>
    </div>
  </div>
  </a>
 
 <a href="{{ URL::asset('trabalhos') }}" class="animsition-link"
    data-animsition-out="fade-out"
    data-animsition-out-duration="900" id="menu4">
  <div class="segura_info_tra_port">
     <div class="bt_acess_trabalho">
        <div class="text_acess">Veja mais Projetos</div>
     </div>
  </div>
  </a>
  
  
    <div class="fundo_full">
    <div class="fundo_portfolio">
    <img src="{{ asset('assets/images/trabalhos/carnaval_2014_vem_pro_bloco/imagens_portfolio/imagem_port.jpg')}}">
    
    <div class="fundo_video_cor"></div>
<div class="titulo_sessao">
         
        <div class="texto_sessao">
        <h1>Vitoria Carnaval 2014 Vem pro Bloco
</h1>
        </div>
        <div class="info_sessao">
        <h2>Vídeo Institucional</h2>
        </div>
     </div>
     </div>
</div>
  </section><section class="fundo_text_port">
  <div class="fundo_full_home"
>
    <div class="titulo_sessao_int azul">
      <div class="info_sessao">
        <span class="texto_medio">A Vitlog transportes realiza sua campanha de carnaval 2014 chamada:"VemProBloco"<br>
        O vídeo mostra a "morte" querendo tirar férias, mas suas férias é sempre interrompida pelo celular que toca convocando a morte para realizar seu trabalho.<br>
O objetivo é conscientizar as pessoas a darem um descanço para a morte.<br>
 Este projeto foi desenvolvido na PRODV. </span>
      </div>
    </div>
     </div>
  </section>
  
  
  <section>
    
    
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/carnaval_2014_vem_pro_bloco/imagens_portfolio/portfolio_foto_1.jpg')}}">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/carnaval_2014_vem_pro_bloco/imagens_portfolio/portfolio_foto_2.jpg')}}">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/carnaval_2014_vem_pro_bloco/imagens_portfolio/portfolio_foto_3.jpg')}}">
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <div class="js-video [vimeo,widescreen]">
   <iframe src="https://player.vimeo.com/video/87665958" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p><a href="https://vimeo.com/87665958">VemPraRua</a> from <a href="https://vimeo.com/user3352087">Prodv Comunica&ccedil;&atilde;o</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
   </div>
    </div>
   
   
    
    <div class="clear"></div>
  </section>



  <div class="clear"></div>
  
  
@include('site.rodape.index')

</div>
        
 @stop