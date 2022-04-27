<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head> <!-- Required meta tags-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Carpe Diem" />
    <meta name="author" content="LIKE_DSG" />
    <title>Carpe Diem</title>
    @include('front.partials._style')
  </head>
  <body class="relative grid-1440">

    <!-- Preloader -->
    <div class="loader-mask">
      <div class="loader">
        <div></div>
        <div></div>
      </div>
    </div>

  <main class="main-wrapper oh">

    @include('front.partials._menuHome')
    <div class="content-wrapper oh">

      <!-- Revolution Slider -->
      <section>
        <div class="rev_slider_wrapper" id="home">
          <div class="rev_slider" id="slider1" data-version="5.0">
            <ul>
              @foreach ($linha as $banner)
              <li data-fstransition="fade"
                data-transition="fade"
                data-slotamount="1"
                data-masterspeed="1000"
                data-delay="5000"
                data-title="Creative Minimalism">

                <!-- MAIN IMAGE -->
                <img src="{{url('/')}}/uploads/linhas/{{$banner->imagem}}"
                  alt=""
                  data-bgrepeat="no-repeat"
                  data-bgfit="cover"
                  data-bgparallax="7"
                  class="rev-slidebg"
                  >

                <!-- LINE -->
                <div class="tp-caption tp-shape hero-line"
                  data-x="center"
                  data-y="center"
                  data-voffset="[-100, -80, -80, -50]"
                  data-hoffset="[-146, -120, -100, -60]"
                  data-width="[176,134,100,35]"
                  data-visibility="[on,on,on,off]"
                  data-transform_idle="o:1;s:900;"
                  data-transform_in="sX:0;opacity:0;s:1000;e:Power3.easeOut;"
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                  data-start="1000">
                </div>

                <!-- LINE -->
                <div class="tp-caption tp-shape hero-line"
                  data-x="center"
                  data-y="center"
                  data-voffset="[-100, -80, -80, -90]"
                  data-hoffset="[146, 120, 100, 1]"
                  data-width="[176,134,100,150]"
                  data-transform_idle="o:1;s:900;"
                  data-transform_in="sX:0;opacity:0;s:1000;e:Power3.easeOut;"
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                  data-start="1000">
                </div>

                <!-- LAYER NR. 1 -->
                <div class="tp-caption medium-text lines alt-font italic text-center"
                  data-x="center"
                  data-y="center"
                  data-voffset="[-100,-80,-80,-50]"
                  data-fontsize="[18]"
                  data-transform_idle="o:1;s:700"
                  data-transform_in="opacity:0;s:1000;e:Power1.easeInOut;"
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                  data-start="1000"
                  data-elementdelay="0.01">{{$banner->nome}}
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption hero-text giant text-center"
                  data-x="center"
                  data-y="center"
                  data-voffset="[-6]"
                  data-hoffset="[10,10,7,5]"
                  data-fontsize="[170,120,100,50]"
                  data-lineheight="[170,120,100,50]"
                  data-fontweight="700"
                  data-whitespace="[nowrap, nowrap, nowrap, nowrap]"
                  data-transform_idle="o:1;s:700"
                  data-transform_in="opacity:0;s:1000;e:Power1.easeInOut;"
                  data-transform_out="opacity:0;s:1000;e:Power1.easeInOut;"
                  data-start="1000"
                  data-elementdelay="0.01">{{$banner->descricao}}
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption medium-text alt-font italic text-center"
                  data-x="center"
                  data-y="center"
                  data-voffset="[100,80,80,50]"
                  data-fontsize="[18]"
                  data-transform_idle="o:1;s:700"
                  data-transform_in="opacity:0;s:1000;e:Power1.easeInOut;"
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                  data-start="1000"
                  data-elementdelay="0.01">@oculoscarpediem
                </div>

                <!-- LINE -->
                <div class="tp-caption tp-shape hero-line"
                  data-x="center"
                  data-y="center"
                  data-voffset="[100, 80, 80, 50]"
                  data-hoffset="[-166, -140, -120, -90]"
                  data-width="[136,94,60,136]"
                  data-visibility="[on,on,on,off]"
                  data-transform_idle="o:1;s:900;"
                  data-transform_in="sX:0;opacity:0;s:1000;e:Power3.easeOut;"
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                  data-start="1000">
                </div>

                <!-- LINE -->
                <div class="tp-caption tp-shape hero-line"
                  data-x="center"
                  data-y="center"
                  data-voffset="[100, 80, 80, 90]"
                  data-hoffset="[166, 140, 120, 1]"
                  data-width="[136,94,60,150]"
                  data-transform_idle="o:1;s:900;"
                  data-transform_in="sX:0;opacity:0;s:1000;e:Power3.easeOut;"
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;"
                  data-start="1000">
                </div>

              </li>

              @endforeach
              <!-- SLIDE 1 -->

            </ul>

          </div>
        </div>
      </section> <!-- end rev slider -->

      <a class="anchor" id="quemsomos"></a>
      <section class="section-wrap intro style-2 bg-light sobre">
        <div class="container">
          <div class="row">

            <div class="col-sm-5 mb-30">
              <h2 class="intro-heading uppercase" style="color:#fff">QUEM SOMOS</h2>


              <div class="intro-text-lead">{!!$quemsomos->quemsomos!!}</div>

            </div>
            <div class="col-sm-7">
              <div class="col-sm-12 ">

              <div class="row">
                <div class="col-4">
                  <div class="service-item-box">

                    <div class="service-text">
                      <h3>MISSÃO</h3>
                      <p>{!!$quemsomos->missao!!}</p>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="service-item-box">

                    <div class="service-text">
                      <h3>VISÃO</h3>
                      <p>{!!$quemsomos->visao!!}</p>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="service-item-box">

                    <div class="service-text">
                      <h3>VALORES</h3>
                      <p>{!!$quemsomos->valores!!}</p>
                    </div>
                  </div>
                </div>


              </div>
            </div>
            </div>


          </div>
        </div>
      </section> <!-- end intro -->
      
      <!-- <section "section-wrap icon-boxes intro style-2 bg-light sobre">
        <div class="container">
          <div class="row">
          </div>
        </div>
      </section> -->

      <!-- Carrossel Nathan Albuquerque -->
      <section class="section-wrap intro style-2" style="background-image: url(../assets/img/bg/bg-produtos-min.avif);">
         
        <div class="container container-carrossel">
            
          <div class="row-sm-5 mb-30">
            <h2 class="intro-heading uppercase" style="margin-left: 100px;">NOSSOS PRODUTOS</h2>
          </div>

        <div class="block-media">
          <div class="carousel-images slider-nav">
            
            <?php $cont = 0; $id_imagem[] = 0 ?>
            @foreach ($parceirosss as $parceiroo)
            <?php $cont++ ?>
              <div class="papular-block ">
                <div data-js="vaso" class="vaso">

                  <?php $primeira_image = true; $images = 0 ?>
                  @foreach ($parceiross as $imagem)
                    @if ($imagem->produtos_id == $parceiroo->produtos_id)
                      {!! $id_imagem[$cont] = $imagem->produtos_id !!}
                      <div data-js="vaso__item{!! $cont !!}" class="vaso__item <?php if($primeira_image){echo "vaso__item--visible";} ?>"><img src="uploads/produtos/{{$imagem->imagem}}" /></div>
                      <?php $primeira_image = false; $images++ ?>
                    @endif
                  @endforeach
                  
                  <div class="vaso__actions" style="<?php if($images == 1){echo "display:none;";} ?>">
                    <button data-js="vaso__button--prev{!! $cont !!}" class="button_p" aria-label="Slide anterior"><</button>
                    <button data-js="vaso__button--next{!! $cont !!}" class="button_n" aria-label="Próximo slide">></button>
                  </div>

                  <div class="overlay">
                    <div class="position-center-center">
                      <div class="inn">
                        <a data-js="parametros_modal" data-toggle="modal" data-target="#modalCarrossel" data-lighter="" data-whatever="{{$parceiroo->produtos_nome}}" onclick="escapeJS({{$parceiroo->produtos_id}})"><i class="fa fa-search"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=5599981600047&text=Ol%C3%A1%2C%20tudo%20bem%3F%20Fui%20redirecionado%20(a)%20atrav%C3%A9s%20do%20link%20do%20site%20%F0%9F%98%8E.%20Gostaria%20de%20saber%20mais%20sobre%20esse%20produto%3A {{url('/')}}/{{$parceiroo->linha_slug}}/{{$parceiroo->produtos_slug}}"><i class="fa fa-shopping-cart"></i></a>
                      </div>
                    </div>
                  </div>
                  
                </div>
                
                <div class="item-name">
                  <a>{{$parceiroo->produtos_nome}}</a>
                  <p>{{$parceiroo->linha_nome}}</p>
                </div>
                
              </div>
            @endforeach
            
          </div>
        </div><!-- /.block-media -->    
      </div><!-- /.container -->
      
      <div class="row-sm-5 mb-30" style="margin-top: 100px;">
          <button type="button" class="btn btn-dark botao_ver_todos" style="margin-left: 45%;"><a style="color: #FFF;" href="https://oculoscarpediem.com.br/produtos">VER TODOS</a></button>
      </div>
        
      </section> <!-- Fim Carrosse Nathan Albuquerque -->
      
      <!-- Carrossel Modal --> 
        <div id="modalCarrossel" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg modal-dialog-centered">
        
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <?php
                    $tagg = '<h4 class="modal-title"></h4>';
                    $partes = array('<h4 class="modal-title">', '</h4>');
                    $palavra = str_replace($partes, "", $tagg);
                    echo $tagg;
                    echo $palavra;
                ?>
              </div>
              <div class="modal-body">
                  
                 
                        
                        <!--
                      $('#modalCarrossel').on('show.bs.modal', function (event) {
                      var button = $(event.relatedTarget) // Botão que acionou o modal
                      var recipient = button.data('whatever') // Extrai informação dos atributos data-*
                      var recipienta = button.data('whatevera')
                      // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
                      // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
                      var modal = $(this)
                      modal.find('.modal-title').text('Visualize o ' + recipient)
                      modal.find('.modal-body input').val(recipient)
                      })
                      
                        
                        <script>
                        function display_image(src, width, height, alt) {
                            var a = document.createElement("img");
                            a.src = src;
                            a.width = width;
                            a.height = height;
                            a.alt = alt;
                            document.body.appendChild(a);
                        }
                        
                        display_image('JavaScript.jpg', 
                                         276, 
                                         110, 
                                         'JavaScriptImage');
                        </script>
                        -->
                        
                        
                        <!--
                        @foreach ($parceiross as $imagem)
                            @if ($imagem->produtos_id == $id_imagem[1])
                                <div>
                                    <img src="uploads/produtos/{{$imagem->imagem}}"/>
                                </div>
                            @endif
                        @endforeach
                        -->
                        <div class="block-media">
                        <div class="carousel-images slider-nav">
              
                        @foreach ($parceirosss as $parceiroo)
                        @foreach ($parceiross as $imagem)
                            @if ($imagem->produtos_id == $parceiroo->produtos_id)
                                <div>
                                    <img class="imagem{{$imagem->produtos_id}}" src="uploads/produtos/{{$imagem->imagem}}"/>
                                </div>
                            @endif
                        @endforeach
                        @endforeach
                        
                        </div>
                        </div>
                   
                  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
        
          </div>
        </div><!-- Fim carrossel modal -->
       
      <section class="section-wrap intro style-2">
        <div class="container">

          <div class="row heading-row">
            <div class="col-sm-5 mb-30">
                <h2 class="intro-heading">SIGA-NOS (<a href="{{$quemsomos->instagram}}">@oculoscarpediem</a>)</h2>
            </div>
          </div>

          <div id="photography-slider" class="flickity-slider-wrap" data-autoplay="false" data-arrows="true" data-slidedots="false">

            @foreach ($crawler as $post)
            <a href="{{$post->url}}">

                 <img src="uploads/posts/{{$post->nome}}" />

          </a>
            @endforeach
          </div>  <!-- end slider -->

        </div>
      </section> <!-- end photography slider -->


      <a class="anchor" id="contato"></a>
      <!-- Image Box With Text -->
      <section class="section-wrap img-text-box relative nopadding">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-6 img-box-holder animated-left">
              <div class="img-box img-2" style="background-image: url(../uploads/quemsomos/{{$quemsomos->imagem1}});"> <!-- Nathan Albuquerque -->
                <img src="{{url('/')}}/uploads/quemsomos/{{$quemsomos->imagem1}}" alt="" class="hidden-lg hidden-md">
              </div>
            </div>

            <div class="container-fluid">
              <div class="row">

                <!-- text box -->
                <div class="col-md-6 col-md-offset-6 clearfix animated-right">
                  <div class="row text-box" style="padding: 140px 30% 140px 12%; background-image: url(../uploads/quemsomos/{{$quemsomos->imagem2}});"> <!-- Nathan Albuquerque -->
                    <div class="col-md-12">
                      <h2 class="uppercase">FALE CONOSCO</h2>
                      <p>
                        Imperial Shopping (2º piso), Rodovia BR 010, n° 100  - Jardim São Luís, Imperatriz - MA
                      </p>
                      <p>{!!$quemsomos->telefone1!!}</p>
                      <p>{!!$quemsomos->email!!}</p>
                    <p><a href="{!!$quemsomos->instagram!!}"><span>@oculoscarpediem</span></a></p>
                      <span>Horário de funcionamento:</span><br>
                      <span>Segunda-feira à Sábado: 10h às 22h</span><br>
                      <span>Domingos e Feriados: 14h às 20h</span>

                    </div> <!-- end col -->

                  </div>
                </div> <!-- end col -->

              </div>
            </div>

          </div>
        </div>
      </section> <!-- end image box with text -->

      <section class="section bg-cover localizacao">
          <div id="contatos" class="container-fluid">
              <div class="row">
                  
                  <!-- <iframe id="iframe"
                      width="100%" 
                      height="560px" 
                      style="border:0" 
                      loading="lazy" 
                      allowfullscreen 
                      src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJOZkbVZFfxZIRVfJ-PgcAPSw&key=AIzaSyCTu3UWdcJRQPGfermjLnALwykPHhctbA4">
                  </iframe> -->
                  
                  <iframe id="iframe"
                      width="100%"
                      height="560px"
                      style="border:0; margin:0;"
                      loading="lazy"
                      allowfullscreen
                      src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA4dSid5mAabU2sBcANFmP49RMr4kUJK0g
                        &q=Óculos+Carpe+Diem,Imperatriz+MA">
                  </iframe>

              </div>
          </div>
      </section>

      <!-- CTA -->
      <section>
          <div class="container-fluid" style="padding:0;">
            <a href="https://linktr.ee/oculoscarpediem">
              <img src="{{url('/')}}/assets/img/bg/cta.avif" alt="" class="hidden-md">
            </a>
          </div>
        </section>



        <a href="https://api.whatsapp.com/send?phone=5599981600047&text=Ol%C3%A1%2C%20tudo%20bem%3F%20Fui%20redirecionado%20(a)%20atrav%C3%A9s%20do%20link%20do%20site%20%F0%9F%98%8E%20" class="float-wpp" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
        </a>
        <a href="https://instagram.com/oculoscarpediem" class="float-insta" target="_blank">
        <i class="fa fa-instagram my-float"></i>
        </a>
      <div id="back-to-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
      </div>

    </div> <!-- end content wrapper -->
  </main> <!-- end main wrapper -->


  @include('front.partials._bottom')

  @include('front.partials._scripts')
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
  <script>
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
          e.preventDefault();

          document.querySelector(this.getAttribute('href')).scrollIntoView({
              behavior: 'smooth'
          });
      });
  });
  </script>

<script>
  
        
        
        
        $('#modalCarrossel').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Botão que acionou o modal
          var recipient = button.data('whatever') // Extrai informação dos atributos data-*
          // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
          // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
          var modal = $(this)
          modal.find('.modal-title').text('Visialize o ' + recipient)
          modal.find('.modal-body input').val(recipient)
        })
</script>

</body>
</html>
