<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Rações Aquário">
    <meta name="author" content="Like Design">
    <meta name="keywords" content="">

    <!-- Title Page-->
    <title>Rações Aquário</title>

    @include('front.partials._style')
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



    <!-- OUR CLASS-->
    <section class="section p-t-10 p-md-t-60 p-b-80">
        <div class="container">
            <div class="row">
              @foreach ($parceirosss as $parceiro)
                <div class="col-md-6 col-lg-4">
                    <div class="media media-our-class-5 wow fadeInUp">
                        <div class="media__img">
                          <a href="/produtos/{{$linhaa->slug}}/{{$parceiro->parceiros_slug}}/{{$parceiro->produtos_slug}}" style="background-color:#faeeee; font-weight:500">
                              <img src="{{url('/')}}/uploads/produtos/{{$parceiro->imagem}}" style="margin: 0 18%;"/>
                          </a>

                        </div>
                        <div class="media__body bg-blue-green">

                            <h3 class="media__title">
                                <a href="/produtos/{{$linhaa->slug}}/{{$parceiro->parceiros_slug}}/{{$parceiro->produtos_slug}}" style="color:#003660">{{$parceiro->nome}}</a>
                            </h3>

                        </div>
                    </div>
                </div>
              @endforeach

            </div>
        </div>
    </section>
    <!-- END OUR CLASS-->

    <!-- Rodapé -->
    @include('front.partials._bottom')

    <script src="{{ asset('assets/js/pages.js') }}"></script>
</body>
