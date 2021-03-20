@extends('site.master')

@section('conteudo')

<!-- BODY -->
<body data-modules="min/portfolio">

@include('site.menu.index')

   <div class="foto-apresent-portfolio">

         <div class="cont-apresentacao">
            <div class="scroll-line">
               <span></span>
               <span></span>
            </div>

            <ul class="details">
               <li class="bold"><strong>design &amp; web</strong></li>
               <li class="bold">Estúdio de ilustração</li>
               <li>2017</li>
            </ul>
         </div>

         <div class="foto-topo-portfolio" style="background-image: url(assets/images/trabalhos/fescher/imagens_portfolio/imagem_port.jpg);"></div>
         
         <a class="top-link" href="http://www.fescher.com.br/inicio" target="_blank">
            <div class="icone-port-cont">
               <svg>
               <use href="assets/svg/svg-symbols.svg#iconeweb"></use>
               </svg>
            </div>
            <p>Visite a página</p>
         </a>

         <h2 class="outline-text outline-white">Fescher</h2>
   </div>

   <div id="fullpage" class="wrapper portfolio">
         <section class="section">
            
         </section>

         <section class="section fundowhite">
            <div class="flex">
               <div class="engloba-conteudo">
                   <h2>teste 1</h2>
               </div>
            </div>
         </section>
      
         <section class="section fundo-portfolio">
            <div class="flex pont-troca">
               <div class="engloba-conteudo bloco-missao">
                  <div class="col-xs-12 col-md-4"><h2 class="outline-text outline-blue">objetivo</h2></div>
                  <div class="col-xs-12 col-md-8"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur
                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
               </div>
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="flex">
               <div class="engloba-conteudo bloco-story">
               <div class="col-xs-12 col-md-4">
                  <div class="icone-section">
                  <svg>
                    <use href="assets/svg/svg-symbols.svg#iconestory"></use>
                  </svg>
                </div>
                <span>capítulo - 1</span>
                <h2>historia</h2>
               </div>
                  <div class="col-xs-12 col-md-8"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur
                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
               </div>
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="item">
                  <img src="{{ asset('assets/images/mockup_celular.png')}}" alt="imagem 03" class="img-responsive center-block">
            </div>
         </section>


         <section class="section fundo-portfolio">
            <div class="flex">
               <div class="engloba-conteudo bloco-story">
               <div class="col-xs-12 col-md-4">
               <div class="icone-section">
                  <svg>
                    <use href="assets/svg/svg-symbols.svg#iconeux"></use>
                  </svg>
                </div>
                <span>capítulo - 2</span>
                <h2>UX</h2>
               </div>
                  <div class="col-xs-12 col-md-8"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur
                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
               </div>
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="item">
            <img src="{{ asset('assets/images/ux-img.png')}}" alt="imagem 03" class="img-responsive center-block">
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="flex">
               <div class="engloba-conteudo bloco-story">
               <div class="col-xs-12 col-md-4">
               <div class="icone-section">
               <svg>
                    <use href="assets/svg/svg-symbols.svg#iconedesign"></use>
                  </svg>
                </div>
                <span>capítulo - 3</span>
                <h2>design</h2>
               </div>
                  <div class="col-xs-12 col-md-8"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur
                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
               </div>
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="item">
                  <img src="{{ asset('assets/images/testes_fundo/design-typo.png')}}" alt="imagem 03" class="img-responsive center-block">
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="item">
                  <img src="{{ asset('assets/images/testes_fundo/design-color-2.png')}}" alt="imagem 03" class="img-responsive center-block">
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="item">
                  <img src="{{ asset('assets/images/testes_fundo/design-color-3.png')}}" alt="imagem 03" class="img-responsive center-block">
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="item">
                  <img src="{{ asset('assets/images/testes_fundo/design-color-1.png')}}" alt="imagem 03" class="img-responsive center-block">
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="flex">
               <div class="engloba-conteudo bloco-story">
               <div class="col-xs-12 col-md-4">
                    <h3>branding</h3>
               </div>
                  <div class="col-xs-12 col-md-8"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur
                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
               </div>
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="item">
                  <img src="{{ asset('assets/images/testes_fundo/design-bc.png')}}" alt="imagem 03" class="img-responsive center-block">
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="item">
                  <img src="{{ asset('assets/images/testes_fundo/design-letterhead (1).png')}}" alt="imagem 03" class="img-responsive center-block">
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="item">
                  <img src="{{ asset('assets/images/testes_fundo/design-letterhead.png')}}" alt="imagem 03" class="img-responsive center-block">
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="flex">
               <div class="engloba-conteudo bloco-story">
               <div class="col-xs-12 col-md-4">
                    <h3>web design</h3>
               </div>
                  <div class="col-xs-12 col-md-8"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur
                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
               </div>
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="item">
            <img src="{{ asset('assets/images/mockup_pc_celular.png')}}" alt="imagem 03" class="img-responsive center-block">
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="item">
            <img src="{{ asset('assets/images/testes_fundo/design-ui-2 (1).png')}}" alt="imagem 03" class="img-responsive center-block">
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="item">
            <img src="{{ asset('assets/images/testes_fundo/design-ui-2.png')}}" alt="imagem 03" class="img-responsive center-block">
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="item">
            <img src="{{ asset('assets/images/testes_fundo/design-ui-3-modal.png')}}" alt="imagem 03" class="img-responsive center-block">
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="flex">
               <div class="engloba-conteudo bloco-story">
               <div class="col-xs-12 col-md-4">
                    <h3>social media</h3>
               </div>
                  <div class="col-xs-12 col-md-8"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur
                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
               </div>
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="item">
            <img src="{{ asset('assets/images/mockup_social_media.png')}}" alt="imagem 03" class="img-responsive center-block">
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="flex">
               <div class="engloba-conteudo bloco-story">
               <div class="col-xs-12 col-md-4">
                    <h3>video motion</h3>
               </div>
                  <div class="col-xs-12 col-md-8"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur
                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
               </div>
            </div>
         </section>

         <section class="section fundo-portfolio">
            <div class="flex">
            <div class="portfolio-video">
            <iframe class="embed-responsive video_fundo" title="Player de vídeo" name="tube"
              src="https://www.youtube.com/embed/NBqWmrAgc4M" allowfullscreen="" wmode="window" frameborder="0"></iframe>
          </div>
            </div>
         </section>

         <section class="section fundoblue">
            <div class="flex">
               <div class="engloba-conteudo bloco-tech">

                  <div class="col-xs-12">
                     <div class="icone-section">
                        <svg>
                           <use href="assets/svg/svg-symbols.svg#iconetech"></use>
                        </svg>
                     </div>
                     <span>capítulo - 4</span>
                     <h2>tech</h2>
                  </div>

                  <div class="col-xs-12">
                     <div class="col-xs-12 col-xs-6">
                     <h4>Custom <strong>Wordpress</strong> theme</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore
                        magna
                        aliqua. </p>
                     </div>
         
                     <div class="col-xs-12 col-xs-6">
                     <h4>Locations</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore
                        magna
                        aliqua.</p>
                     </div>
                  </div>

               </div>
            </div>
         </section>

 
   @include('site.rodape.index')
        
 @stop