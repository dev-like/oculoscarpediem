<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CARPE DIEM">
    <meta name="author" content="Like Design">
    <meta name="keywords" content="">

    <!-- Title Page-->
    <title>CARPE DIEM</title>

    @include('front.partials._style')
    <!-- Cabeçalho -->
    @include('front.partials._menuHome')
    <div class="loader-mask">
      <div class="loader">
        <div></div>
        <div></div>
      </div>
    </div>
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

              @foreach ($parceirosss as $parceiroo)
                <div class="work-item hover-trigger {{$parceiroo->linha_slug}}">
                  <div class="work-container">
                    <div class="work-img">


                      <div class="item" style="padding-right:20px">
                        <!-- Item img -->
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
                        <!-- Item Name -->

                        <!-- Price -->
                        <!-- <span class="price"><small>$</small>299</span> </div> -->
                        <!-- <a href="whatsapp://send?text=The text to share!" data-action="share/whatsapp/share">Share via Whatsapp</a> -->


                        <div class="item-name"> <a href="/{{$parceiroo->linha_slug}}/{{$parceiroo->produtos_slug}}">{{$parceiroo->produtos_nome}}</a>
                          <p>{{$parceiroo->linha_nome}}</p>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="work-description">
                      <h3><a href="portfolio-single.html">Vimeo Video</a></h3>
                      <span>Web Design</span>
                    </div> -->
                  </div>
                </div> <!-- end work-item -->
            @endforeach


          </div>  <!-- end portfolio container -->
        </div> <!-- end row -->

        <!-- <div class="row mt-40">
          <div class="col-md-12 text-center">
            <a href="#" class="btn btn-lg btn-light" id="load-more"><span>Load More</span></a>
          </div>
        </div> -->

      </div>
    </section> <!-- end portfolio -->
    <!-- Rodapé -->
    @include('front.partials._bottom')

      @include('front.partials._scripts')
      <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
      <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
      <script>
      window.addEventListener("load", function(){
      window.cookieconsent.initialise({
        "palette": {
          "popup": {
            "background": "#f7f7f7",
            "text": "#6c6c6c"
          },
          "button": {
            "background": "#23abc4",
            "text": "#ffffff"
          }
        },
        "theme": "classic",
        "content": {
          "header": 'Cookies used on the website!',
          "message": 'This website uses cookies to ensure you get the best experience on our website.',
          "dismiss": 'Got it!',
          "allow": 'Allow cookies',
          "deny": 'Decline',
          "link": 'Learn more',
          "href": 'http://cookiesandyou.com',
        }
      })
      });
      </script>

    <script src="{{ asset('assets/js/pages.js') }}"></script>
</body>
