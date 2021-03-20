@extends('site.master')

@section('conteudo')

        <div class="animsition" data-animsition-in="fade-in"
  data-animsition-in-duration="900"
  data-animsition-out="fade-out"
  data-animsition-out-duration="900">
  
  <section>
  
  <a href="{{ URL::asset('vitoria_carnaval_2015') }}"
    class="animsition-link"
    data-animsition-out="fade-out"
    data-animsition-out-duration="900" id="port_int">
  <div class="segura_nav_port nav_left">
    <div class="bt_nav_port bt_left">
        <div class="text_left">Projeto Anterior</div>
    </div>
  </div>
  </a>
  
  <a href="{{ URL::asset('superlegal_natal2014') }}"
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
    <img src="{{ asset('assets/images/trabalhos/superlegal_brinquedos/imagens_portfolio/imagem_port.jpg')}}">
    
    <div class="fundo_video_cor"></div>
<div class="titulo_sessao">
         
        <div class="texto_sessao">
        <h1>Superlegal Brinquedos
</h1>
        </div>
        <div class="info_sessao">
        <h2>Web Site - Mobile Site</h2>
        </div>
     </div>
     </div>
</div>
  </section><section class="fundo_text_port">
  <div class="fundo_full_home"
>
    <div class="titulo_sessao_int azul">
      <div class="info_sessao">
        <span class="texto_medio">A Superlegal Brinquedos é uma loja de brinquedos com  várias filliais em todo o RS e também algumas lojas em Santa Catarina.<br>
 Para trazer o ambiente divertido encontrado nas lojas, a superlegal brinquedos solicitou o desenvolvimento de uma interface que mostrasse o propósito de seu slogan:"é divertido estar aqui".<br>
 Devido ao novo comportamento dos usuários, foi desenvolvido um website em versão mobile para melhorar a experiência do usuário.<br>
 Este projeto foi codificado na PRODV. </span>
      </div>
      
     <div class="texto_sessao">
        <a href="http://www.superlegalbrinquedos.com.br" target="_blank"><h3>www.superlegalbrinquedos.com.br</h3></a>
        </div>




    </div>
     </div>
  </section>
<section>
    
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/superlegal_brinquedos/imagens_portfolio/portfolio_foto_central.jpg')}}">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/superlegal_brinquedos/imagens_portfolio/portfolio_foto_1.jpg')}}">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/superlegal_brinquedos/imagens_portfolio/portfolio_foto_2.jpg')}}">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/superlegal_brinquedos/imagens_portfolio/portfolio_foto_3.jpg')}}">
    </div>
    
    
   
   
    
    <div class="clear"></div>
  </section>


  <div class="clear"></div>
  
  
@include('site.rodape.index')

</div>
        
 @stop