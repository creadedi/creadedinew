@extends('site.master')

@section('conteudo')

<!-- BODY -->
<body  data-modules="min/home">

    
    @include('site.menu.index')
      <div id="block" class="video" data-vide-bg="assets/video/video_intro_creadedi" data-vide-options="position: 50% 50%"></div>
   
      <div id="fullpage" class="wrapper">
         <section class="section">
               
                  
               
         </section>

         <section class="section" id="texto-nome-grande">
            <div class="fundohome bloco-name">
              <div class="flex">
                  <div class="foto-pessoa"></div>
                  <div class="engloba-conteudo letras-name">
                     <h2 class="outline-text outline-blue texto-up">Alisson</h2>
                     <h2 class="apresentacao">Hello, Eu sou</h2>
                     <h2 class="outline-text outline-blue texto-down">Santos</h2>
                  </div>
              </div>
            </div>
         </section>

         <section class="section fundohome" id="texto-comp">
            <div class="flex pont-troca">
               <div class="engloba-conteudo">
                  <div class="col-xs-12 col-md-7 text-intro-home"><p>Olá, sou Alisson Santos, sou um Designer, Motion Designer e Designer UX/UI. Vivo a animação e o Design Gráfico como uma divertida e vibrante paixão.</p></div>
                  <div class="col-xs-12 col-md-5"></div>
               </div>
            </div>
         </section>

         <section class="section fundo_slide_port fundoblack" id="slide-project">
            <div class="flex">

                <h2 class="outline-text outline-white title_home_project">Meus Projetos</h2>

                <div class="engloba-slider slider_principal">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <div class="fundo_imagem_port" style="background-image: url(assets/images/trabalhos/fescher/imagens_portfolio/imagem_port.jpg);">
                              <div class="flex">
                                   <div class="engloba-conteudo">
                                          <div class="col-xs-12 col-md-7">
                                              <h2 class="outline-text outline-white titulo_project">01. Transposul</h2>
                                              <h3 class="titulo_case">Website Corporativo</h3>
                                              <p class="paragrafo_project_home">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                                              <a class="link_project_home" href="{{ URL::asset('portfolio_interno') }}">
                                                 <span>Veja o projeto</span>
                                              </a>
                                          </div>
                                          <div class="col-xs-12 col-md-5"></div>
                                   </div>
                              </div>
                          </div>
                        </div>

                        <div class="item">
                          <div class="fundo_imagem_port" style="background-image: url(assets/images/trabalhos/natal_2014_superlegal_brinquedos/imagens_portfolio/portfolio_foto_1.jpg);">
                              <div class="flex">
                                   <div class="engloba-conteudo">
                                          <div class="col-xs-12 col-md-7">
                                              <h2 class="outline-text outline-white titulo_project">01. Transposul</h2>
                                              <h3 class="titulo_case">Website Corporativo</h3>
                                              <p class="paragrafo_project_home">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                                              <a class="link_project_home" href="{{ URL::asset('portfolio_interno') }}">
                                                 <span>Veja o projeto</span>
                                              </a>
                                          </div>
                                          <div class="col-xs-12 col-md-5"></div>
                                   </div>
                              </div>
                          </div>
                        </div>

                        <div class="item">
                          <div class="fundo_imagem_port" style="background-image: url(assets/images/trabalhos/carnaval_2014_vem_pro_bloco/imagens_portfolio/portfolio_foto_3.jpg);">
                              <div class="flex">
                                   <div class="engloba-conteudo">
                                          <div class="col-xs-12 col-md-7">
                                              <h2 class="outline-text outline-white titulo_project">01. Transposul</h2>
                                              <h3 class="titulo_case">Website Corporativo</h3>
                                              <p class="paragrafo_project_home">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                                              <a class="link_project_home" href="{{ URL::asset('portfolio_interno') }}">
                                                 <span>Veja o projeto</span>
                                              </a>
                                          </div>
                                          <div class="col-xs-12 col-md-5"></div>
                                   </div>
                              </div>
                          </div>
                        </div>
          
                       
                      </div>
          
                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
         </section>


         <section class="section servicos fundowhite">
              <div class="col-xs-12 col-md-7 fundo_services" style="background-image:url(assets/images/foto_base4.jpg);">
              </div>
              <div class="col-xs-12 col-md-5 engloba_services">
                
                    <h2>Alguns dos serviços <br>que eu sei fazer</h2>
                    <ul>
                        <li class="item-serv"><a>Interface Design</a></li>
                        <li class="item-serv"><a>Brand Strategy</a></li>
                        <li class="item-serv"><a>Web Design</a></li>
                        <li class="item-serv"><a>Social</a></li>
                        <li class="item-serv"><a>Motion</a></li>
                        <li class="item-serv"><a>Development</a></li>
                    </ul>
                  
             </div> 
         </section>
        
      
      @include('site.rodape.index')
   
        
 @stop