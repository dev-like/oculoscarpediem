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

    <link href="../../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <!-- <link href="../../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->

    <link href="../../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/linearicons-free/css/linearicons-free.css" rel="stylesheet" media="all">
    <!-- Base fonts of theme-->
    <link href="../../assets/css/nunito-font.min.css" rel="stylesheet" media="all">
    <link href="../../assets/css/chelsea-market-font.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->

    <!-- Bootstrap CSS-->
    <link href="../../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/lightbox2/css/lightbox.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/modalVideo/modal-video.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/revolution/css/layers.css" rel="stylesheet" />
    <link href="../../assets/vendor/revolution/css/navigation.css" rel="stylesheet" />
    <link href="../../assets/vendor/revolution/css/settings.css" rel="stylesheet" />

    <!-- Main CSS-->
    <link href="../../assets/css/main.css" rel="stylesheet" media="all">

    <!-- Cabeçalho -->
    @include('front.partials._menuHome')
    <header>
        <!-- Banners -->
        <section>
          @if ($linhaa->nome == "Para Cães")
            <div class="container-fluid" style="padding:0;">
              <img src="{{url('/')}}/assets/images/banner-cao.png" />
            </div>
          @else
            <div class="container-fluid" style="padding:0;">
              <img src="{{url('/')}}/assets/images/banner-gato.jpg" />
            </div>
          @endif
        </section>
    </header>

        <div class="container">
            <h1 style="text-align:center">
              <br>
                @if ($linhaa->nome == "Para Cães")
                  <img src="../../assets/images/paracaes.png" />
                @else
                  <img src="assets/images/paragatos.png" />
                @endif
                  <br>
                <strong>{{$linhaa->nome}}</strong>
                  <br>
                <img src="../../assets/images/icon/barra-loc.png" alt="Line 2">
            </h1>
        </div>

    <!-- OUR CLASS-->
    <section class="section p-t-10 p-md-t-60 p-b-80">
        <div class="container">
            <div class="row">
              @foreach ($produtos as $produto)
                <div class="col-md-6 col-lg-4">
                    <div class="media media-our-class-5 wow fadeInUp">
                        <div class="media__img">
                          <a href="/produtos/{{$linhaa->slug}}/{{$parceiro->slug}}/{{$produto->slug}}" style="background-color:#faeeee; font-weight:500">
                              <img src="../../uploads/produtos/{{$produto->imagem}}" alt="{{$produto->nome}}" style="margin: 0 18%;"/>
                          </a>

                        </div>
                        <div class="media__body bg-blue-green">

                            <h3 class="media__title">
                                <a href="/produtos/{{$linhaa->slug}}/{{$parceiro->slug}}/{{$produto->slug}}" style="color:#003660">{{$produto->nome}}</a>
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
