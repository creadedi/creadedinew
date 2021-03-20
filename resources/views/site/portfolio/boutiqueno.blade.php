@extends('site.master')

@section('conteudo')

        <div class="animsition" data-animsition-in="fade-in"
  data-animsition-in-duration="900"
  data-animsition-out="fade-out"
  data-animsition-out-duration="900">
  
  <section>
  
  <a href="{{ URL::asset('transposul') }}"
    class="animsition-link"
    data-animsition-out="fade-out"
    data-animsition-out-duration="900" id="port_int">
  <div class="segura_nav_port nav_left">
    <div class="bt_nav_port bt_left">
        <div class="text_left">Projeto Anterior</div>
    </div>
  </div>
  </a>
  
  <a href="{{ URL::asset('fescher') }}"
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
    <img src="{{ asset('assets/images/trabalhos/ecommerce_boutique_no/imagens_portfolio/imagem_port.jpg')}}">
    
    <div class="fundo_video_cor"></div>
<div class="titulo_sessao">
         
        <div class="texto_sessao">
        <h1>Boutique No
</h1>
        </div>
        <div class="info_sessao">
        <h2>E-commerce</h2>
        </div>
     </div>
     </div>
</div>
  </section><section class="fundo_text_port">
  <div class="fundo_full_home"
>
    <div class="titulo_sessao_int azul">
    
        
        <div class="info_sessao">
        <span class="texto_medio">A rede de lojas Boutique Nô trabalha há mais de 30 anos no mercado de calçados e tem um histórico de satisfação e fidelidade com seus clientes.<br>
 O sucesso das lojas que estão presentes nos principais shoppings centers de Porto Alegre levou a criar o ecommerce da Boutique Nô, visando proporcionar aos seus clientes produtos exclusivos, de alta qualidade e com o mesmo atendimento que você encontra nas lojas físicas. <br>
 Este projeto foi desenvolvido a Prodv. </span>
        </div>
        
        <div class="texto_sessao">
        <a href="http://www.boutiqueno.com.br" target="_blank"><h3>www.boutiqueno.com.br</h3></a>
        </div>
    </div>
     </div>
  </section>


<section>
    
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/ecommerce_boutique_no/imagens_portfolio/portfolio_foto_central.jpg')}}">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/ecommerce_boutique_no/imagens_portfolio/portfolio_foto_1.jpg')}}">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/ecommerce_boutique_no/imagens_portfolio/portfolio_foto_2.jpg')}}">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <img src="{{ asset('assets/images/trabalhos/ecommerce_boutique_no/imagens_portfolio/portfolio_foto_3.jpg')}}">
    </div>
    
    
   
   
    
    <div class="clear"></div>
  </section>
  <div class="clear"></div>
  
  
@include('site.rodape.index')

</div>
        
 @stop