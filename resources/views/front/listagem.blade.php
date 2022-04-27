<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CARPE DIEM">
    <meta name="author" content="Like Design">
    <meta name="keywords" content="">
    <title>CARPE DIEM</title>
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
    
    <!-- Cabeçalho -->
    @include('front.partials._menuHome')
    
    <header>
        <!-- Banners -->
        <section>
          <div class="container-fluid" style="padding:0;">
            <img src="{{url('/')}}/assets/img/bg/banner.png" />
            <span class="anchor" id="ondeestamos" style="padding:0;"></span>
          </div>
        </section>
    </header>

    <section class="section-wrap-md">
      <div class="container-fluid semi-fluid">

        <div class="row">
          <!-- filter -->
          <div class="col-sm-12">
            <div class="portfolio-filter text-center">
              <div class="portfolio-filter-wrap">
                <a href="#" class="filter active" data-filter="*">Todos</a>
                @foreach ($linha  as $linhas)
                <a href="#" class="filter" data-filter=".{{$linhas->slug}}">{{$linhas->nome}}</a>
                @endforeach
              </div>
            </div>
          </div>
          <!-- end filter -->
        </div>

        <div class="row">
          <div id="portfolio-grid" class="papular-block works-grid grid-4-col with-title gutter">

              <?php $cont = 0 ?>
              @foreach ($parceirosss as $parceiroo)
              <?php $cont++ ?>
                <div class="work-item hover-trigger {{$parceiroo->linha_slug}}">
                  <div class="work-container">
                    <div class="work-img">
                            
                          <div class="papular-block ">
                            <div data-js="vaso" class="vaso">
                                
                              <?php $primeira_image = true; $images = 0 ?>
                              @foreach ($parceiross as $imagem)
                                @if ($imagem->produtos_id == $parceiroo->produtos_id)
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
                                    <a href="uploads/produtos/{{$imagem->imagem}}" data-lighter=""><i class="fa fa-search"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=5599981600047&text=Ol%C3%A1%2C%20tudo%20bem%3F%20Fui%20redirecionado%20(a)%20atrav%C3%A9s%20do%20link%20do%20site%20%F0%9F%98%8E.%20Gostaria%20de%20saber%20mais%20sobre%20esse%20produto%3A {{url('/')}}/{{$parceiroo->linha_slug}}/{{$parceiroo->produtos_slug}}"><i class="fa fa-shopping-cart"></i></a>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                            
                            <div class="item-name">
                              <a href="/{{$parceiroo->linha_slug}}/{{$parceiroo->produtos_slug}}">{{$parceiroo->produtos_nome}}</a>
                              <p>{{$parceiroo->linha_nome}}</p>
                            </div>
                            
                          </div>

                      <!--<div class="item" style="padding-right:20px">
                        <div class="item-img">
                          <?php $count=0; ?>
                          @foreach ($parceiross as $imagem)
                            @if ($imagem->produtos_id == $parceiroo->produtos_id)
                              <img class="img-{!!$count=$count+1!!}" src="uploads/produtos/{{$imagem->imagem}}" alt="" >
                            @endif
                          @endforeach
                          <div class="overlay">
                            <div class="position-center-center">
                              <div class="inn"><a href="uploads/produtos/{{$imagem->imagem}}" data-lighter=""><i class="fa fa-search"></i></a> <a href="https://api.whatsapp.com/send?phone=5599981600047&text=Ol%C3%A1%2C%20tudo%20bem%3F%20Fui%20redirecionado%20(a)%20atrav%C3%A9s%20do%20link%20do%20site%20%F0%9F%98%8E.%20Gostaria%20de%20saber%20mais%20sobre%20esse%20produto%3A {{url('/')}}/{{$parceiroo->linha_slug}}/{{$parceiroo->produtos_slug}}"><i class="fa fa-shopping-cart"></i></a></div>
                            </div>
                          </div>
                        </div>
                        <div class="item-name"> <a href="/{{$parceiroo->linha_slug}}/{{$parceiroo->produtos_slug}}">{{$parceiroo->produtos_nome}}</a>
                          <p>{{$parceiroo->linha_nome}}</p>
                        </div>
                      </div> -->
                      
                    </div>
                  </div>
                </div> <!-- end work-item -->
            @endforeach

          </div>  <!-- end portfolio container -->
        </div> <!-- end row -->

      </div>
    </section> <!-- end portfolio -->
    
    <!-- Rodapé -->
    @include('front.partials._bottom')
    <!-- Scripts -->
    @include('front.partials._scripts')
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script src="{{ asset('assets/js/pages.js') }}"></script>
</body>
</html>
