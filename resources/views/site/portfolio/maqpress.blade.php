@extends('site.master')

@section('conteudo')

        <div class="animsition" data-animsition-in="fade-in"
  data-animsition-in-duration="900"
  data-animsition-out="fade-out"
  data-animsition-out-duration="900">
  
  <section>
  
  <a href="{{ URL::asset('extrema_park') }}"
    class="animsition-link"
    data-animsition-out="fade-out"
    data-animsition-out-duration="900" id="port_int">
  <div class="segura_nav_port nav_left">
    <div class="bt_nav_port bt_left">
        <div class="text_left">Projeto Anterior</div>
    </div>
  </div>
  </a>
  
   <a href="{{ URL::asset('vitoria_carnaval_2013') }}"
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
    <img src="{{ asset('assets/images/trabalhos/maqpress_material_impresso/imagens_portfolio/imagem_port.jpg')}}">
    
    <div class="fundo_video_cor"></div>
<div class="titulo_sessao">
         
        <div class="texto_sessao">
        <h1>Maqpress
</h1>
        </div>
        <div class="info_sessao">
        <h2>Material Gráfico</h2>
        </div>
     </div>
     </div>
</div>
  </section><section class="fundo_text_port">
  <div class="fundo_full_home"
>
    <div class="titulo_sessao_int azul">
      <div class="info_sessao">
        <span class="texto_medio">Criada em 2013, a PEBE Máquinas e Equipamentos Gráficos S/A surgiu para suprir uma demanda do mercado gráfico e escolar oferecendo máquinas de alta tecnologia e precisão.<br>
Foi solicitado desenvolvimento do material gráfico da maqpress.<br>
 Este projeto foi desenvolvido na PRODV. </span>
      </div>
    </div>
     </div>
  </section>



<section>
    
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/maqpress_material_impresso/imagens_portfolio/portfolio_foto_central.jpg')}}">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/maqpress_material_impresso/imagens_portfolio/portfolio_foto_1.jpg')}}">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/maqpress_material_impresso/imagens_portfolio/portfolio_foto_2.jpg')}}">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/maqpress_material_impresso/imagens_portfolio/portfolio_foto_3.jpg')}}">
    </div>
    
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/maqpress_material_impresso/imagens_portfolio/portfolio_foto_4.jpg')}}">
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/maqpress_material_impresso/imagens_portfolio/portfolio_foto_5.jpg')}}">
    </div>
   
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/maqpress_material_impresso/imagens_portfolio/portfolio_foto_6.jpg')}}">
    </div>
    
   
   
    
    <div class="clear"></div>
  </section>





  <div class="clear"></div>
  
  
@include('site.rodape.index')

</div>
        
 @stop