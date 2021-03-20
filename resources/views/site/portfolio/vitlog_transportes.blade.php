@extends('site.master')

@section('conteudo')

        <div class="animsition" data-animsition-in="fade-in"
  data-animsition-in-duration="900"
  data-animsition-out="fade-out"
  data-animsition-out-duration="900">
  
  <section>
  
  <a href="{{ URL::asset('dia_das_criancas_superlegal') }}"
    class="animsition-link"
    data-animsition-out="fade-out"
    data-animsition-out-duration="900" id="port_int">
  <div class="segura_nav_port nav_left">
    <div class="bt_nav_port bt_left">
        <div class="text_left">Projeto Anterior</div>
    </div>
  </div>
  </a>
  
  
  <a href="{{ URL::asset('modular_video_institucional') }}"
    class="animsition-link"
    data-animsition-out="fade-out"
    data-animsition-out-duration="900" id="port_int">
  <div class="segura_nav_port nav_right">
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
    <img src="{{ asset('assets/images/trabalhos/vitlog_transportes/imagens_portfolio/imagem_port.jpg')}}">
    
    <div class="fundo_video_cor"></div>
<div class="titulo_sessao">
         
        <div class="texto_sessao">
        <h1>Vitlog Transportes
</h1>
        </div>
        <div class="info_sessao">
        <h2>Web Site</h2>
        </div>
     </div>
     </div>
</div>
  </section><section class="fundo_text_port">
  <div class="fundo_full_home"
>
    <div class="titulo_sessao_int azul">
      <div class="info_sessao">
        <span class="texto_medio">A Vitlog Transportes tem se destacado na oferta de soluções diferenciadas no ramo de transporte de cargas e logística. <br>
Com uma parceria de anos, a vitlog solicitou a mundança em sua interface digital, trazendo um conteúdo mais dinâmico para seu público.<br>
 Este projeto foi desenvolvido na PRODV. </span>
      </div>
      
     <div class="texto_sessao">
        <a href="http://www.vitlog.com.br" target="_blank"><h3>www.vitlog.com.br</h3></a>
        </div>




    </div>
     </div>
  </section>
  
  
   <section>
    
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/vitlog_transportes/imagens_portfolio/portfolio_foto_central.jpg')}}">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/vitlog_transportes/imagens_portfolio/portfolio_foto_1.jpg')}}">
    </div>
    
    
    
   
   
    
    <div class="clear"></div>
  </section>



  <div class="clear"></div>
  
  
@include('site.rodape.index')

</div>
        
 @stop