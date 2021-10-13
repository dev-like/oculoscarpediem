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
      <style>
         wow = new WOW(
            {
              animateClass: 'animated',
              offset:       100,
              callback:     function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
              }
            }
          );
          wow.init();
          document.getElementById('moar').onclick = function() {
            var section = document.createElement('section');
            section.className = 'section--purple wow fadeInDown';
            this.parentNode.insertBefore(section, this);
          };

          #slider-animation{max-height:550px;}
          .heading-box h2{ width:100%; }

          .carousel-item img{width:100%;}

      </style>



      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
  </head>

<body class="animsition js-preloader">
    <div class="page-wrapper">

      @include('front.partials._menuHome')
        <!-- MAIN-->
        <main id="main">
          <section>
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="uploads/banners/{{$banners->caminho}}" alt="banner">
              <div class="text-box">
                <h2 class="wow slideInDown title-1" data-wow-duration="3s">{{$banners->titulo}}</h2>
                <p class="wow slideInRight title-2" data-wow-duration="3s">{{$banners->texto}}!</p>
                <div class="text-center p-t-120">
                    <a class="au-btn au-btn--white wow slideInUp" data-wow-duration="4s" href="#quemsomos">CONHEÇA</a>
                </div>
              </div>

            </div>


          </div>


          </section>


            <!-- QUEM SOMOS-->
            <a class="anchor" id="quemsomos"></a>
            <section class="section p-t-100 p-md-t-50 p-b-110 p-md-b-50 p-xs-t-0">
                <div class="container">
                    <div class="welcome-wrap">
                        <div class="row no-gutters justify-content-end">
                            <div class="col-lg-7">
                                <div class="welcome-content p-md-b-50">
                                    <h3 class="title title-3 m-b-10 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">Olá, tudo bem?</h3>
                                    <h2 class="title title-4 m-b-25 section-heading">Somos a <img src="assets/images/logo-quemsomos.png"></img></h2>
                                    <?php echo '<div class="m-b-15" style="text-align:justify;">'.$quemsomos->quemsomos.'</div>'; ?>
                                    <div class="welcome-sign m-t-70">
                                        <div class="welcome-sign__content">
                                            <h5 class="name" style="font-family:'Christmas   Classica'; font-size:30px; color: #ff6601;">Edilomar Miranda</h5>
                                            <span class="job">- Gestor -</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="img-box img-box-1">
                            <div class="img-box-inner">
                                <img src="uploads/quemsomos/{{$quemsomos->imagem1}}" alt="img1">
                            </div>
                        </div>
                        <div class="img-box img-box-2">
                            <div class="img-box-inner">
                                <img src="uploads/quemsomos/{{$quemsomos->imagem2}}" alt="img2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9 offset-lg-1">
                                <div class="welcome__video">
                                    <div class="media__video-wrap m-t-60 m-md-t-10">
                                        <img src="assets/images/quemsomos-video.png" alt="Video">
                                        <div class="media__video-icon js-modal-video wow fadeIn" data-toggle="modal" data-target="#modal-video" data-wow-delay=".2s">
                                            <i class="zmdi zmdi-play-circle video__icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END QUEM SOMOS-->

            <!-- PARCEIROS-->
            <section class="section bg-blue-green p-t-50 p-b-50 p-md-t-60 p-md-b-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-heading section-heading-2">
                                <h2 class="section-heading__title titulo-secao">AS MELHORES MARCAS</h2>
                                <div class="section-heading__line">
                                    <img src="assets/images/icon/barra.png" alt="Line 2">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="wrap wrap--w1575">
                        <div class="slick-class-2">
                            <div class="slick__wrap-content js-slick-wrapper" data-slick-xs="1" data-slick-sm="2" data-slick-md="3" data-slick-lg="3" data-slick-xl="4" data-slick-dots="false" data-slick-customnav="true" data-slick-autoplay="true" >
                                <div class="slick__content js-slick-content">
                                  @foreach ($parceiros as $parceiro)
                                    <div class="slick__item">
                                        <div class="media media-our-class-3">
                                            <div class="media__img">
                                                <a href="{{$parceiro->site}}">
                                                    <img src="uploads/parceiro/{{$parceiro->imagem}}" style="width:100%"  alt="Parceiro" />
                                                </a>

                                        </div>

                                        </div>
                                    </div>
                                  @endforeach

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- END PARCEIROS-->

            <!-- NOSSOS PRODUTOS-->
            <section class="section p-t-50 p-b-0 p-md-t-60 p-md-b-0 p-sm-b-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-heading section-heading-2">
                                <h2 class="section-heading__title titulo-secao" style="color:#003660;">NOSSOS PRODUTOS</h2>
                                <div class="section-heading__line">
                                    <img src="assets/images/icon/line-white.png" alt="Line 2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="wrap wrap--w1575">
                        <div class="slick-class-2">
                            <div class="slick__wrap-content js-slick-wrapper" data-slick-xs="1" data-slick-sm="2" data-slick-md="3" data-slick-lg="3" data-slick-xl="4" data-slick-dots="false" data-slick-customnav="true" data-slick-autoplay="true">
                                <div class="slick__content js-slick-content">
                                  @foreach ($parceirosss as $parceiroo)
                                    <div class="slick__item">
                                        <div class="media media-our-class-3">
                                            <div class="media__img">
                                                <a href="/produtos/{{$parceiroo->linha_slug}}/{{$parceiroo->parceiros_slug}}/{{$parceiroo->produtos_slug}}" style="background-color:#faeeee">
                                                    <img class="produtos-home" src="uploads/produtos/{{$parceiroo->imagem}}" alt="{{$parceiroo->produtos_nome}}"/>
                                                </a>

                                            </div>
                                            <div class="media__body bg-blue-green">
                                                <h3 class="media__title">
                                                    <a href="/produtos/{{$parceiroo->linha_slug}}/{{$parceiroo->parceiros_slug}}/{{$parceiroo->produtos_slug}}">{{$parceiroo->produtos_nome}}</a>
                                                </h3>

                                            </div>
                                        </div>
                                    </div>
                                  @endforeach
                                </div>
                                <div class="slick__nav arrows-2">
                                    <span class="slick-prev slick-arrow js-slick-prev"></span>
                                    <span class="slick-next slick-arrow js-slick-next"></span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center p-t-30">
                            <a class="au-btn au-btn--white" href="/produtos">VER MAIS
                                <i class="zmdi zmdi-chevron-right"></i>
                                <i class="zmdi zmdi-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END NOSSOS PRODUTOS-->

            <!-- INSTAGRAM-->
            <section class="section p-t-50 p-b-50 p-md-t-60 p-md-b-80 p-sm-t-20">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading section-heading-2">
                            <h2 class="section-heading__title titulo-secao" style="color:#003660;">Siga nosso Instagram</h2>
                            <div class="section-heading__line">
                                <img src="assets/images/icon/line-white.png" alt="Line 2">
                            </div>
                        </div>
                    </div>
                  <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="slick__item" style="padding:0px">
                        <div class="media media-our-class-3">
                            <div class="media__img instagram">
                                <a href="https://www.instagram.com/racoesaquario">
                                    <img src="assets/images/instagram.png"/>
                                </a>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-9 col-sm-8 col-xs-5">
                    <div class="wrap wrap--w1575">
                        <div class="slick-class-2">
                            <div class="slick__wrap-content js-slick-wrapper" data-slick-xs="1" data-slick-sm="2" data-slick-md="2" data-slick-lg="3" data-slick-xl="3" data-slick-dots="false" data-slick-customnav="false" data-slick-autoplay="true">
                                <div class="slick__content js-slick-content">
                                  <?php
                                  $i = 0;
                                    ?>
                                  @foreach ($crawler as $post)
                                  <div class="slick__item" style="padding:0 3px">
                                      <div class="media media-our-class-3">
                                          <div class="media__img">
                                              <a href="{{$post->getLink()}}">
                                                  <?php
                                                  $img_ctn = file_get_contents($post->getImageHighResolutionUrl());
                                                  $fp = fopen("assets/images/post".$i.".jpg", "w");
                                                  fwrite($fp,$img_ctn);
                                                  fclose($fp);
                                                  header('Content-type: image/jpeg');
                                                  echo '<img src="assets/images/post' .$i . '.jpg" />';
                                                  $i = $i+1;

                                              ?>
                                            </a>
                                          </div>
                                      </div>
                                  </div>
                                  @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
              </div>
            </div>
            </section>
            <!-- INSTAGRAM -->
            <section>
              <div class="container-fluid" style="padding:0;">
                <img class="span-gato" src="assets/images/banner-gato.jpg" />
                <span class="anchor" id="ondeestamos" style="padding:0;"></span>
              </div>
            </section>


            <!-- ONDE ENCONTRAR-->


            <section class="section bg-cover localizacao">
                <div class="container">
                    <div class="row">
                      <div class="col-md-6 col-xs-12">
                        <iframe id="iframe"
                            width="100%"
                            height="560px"
                            style="border:0; margin:0;"
                            loading="lazy"
                            allowfullscreen
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA4dSid5mAabU2sBcANFmP49RMr4kUJK0g
                              &q=Agrilac,Imperatriz+MA">
                        </iframe>
                      </div>
                      <div class="endereco-lateral col-md-6 col-xs-12">
                            <div class="contact-form-section m-r-40">
                                <div class="heading-section heading-section-2 dark left">
                                    <h2 class="section-heading__title titulo-secao" style="color:#003660;">FALE CONOSCO</h2>
                                    <div class="section-heading__line">
                                        <img src="assets/images/icon/barra-loc.png" alt="Line 2">
                                    </div>
                                </div>

                                <div class="imperatriz">
                                    <br>

                                    <p class="text-block m-b-5"><img src="assets/images/icon/clock-icon.png" class="icone"><span class="texto-loc">HORÁRIO DE FUNCIONAMENTO</span></p>
                                    <div class="faleconosco">
                                      <p class="text-block m-b-5" style="font-weight: 200">Segunda-feira a sexta-feira: 08h às 18h</p>
                                      <p class="text-block m-b-5" style="font-weight: 200">Sábado: 08h às 12h</p>
                                    </div>
                                    <p class="text-block m-b-5" style="font-weight: 200; padding-right: 99px;"><img src="assets/images/icon/pin-icon.png" class="icone"><span class="texto-loc"><strong>Rua Sete de Setembro, 236 A </strong> Bacuri - Imperatriz (MA)</span></p>

                                    <div class="faleconosco">
                                      <p class="text-block m-b-5"><img src="assets/images/icon/tel-icon.png" class="icone">
                                        <a href="" class="texto-loc" style="font-weight: 200">{{$quemsomos->telefone1}}</a>
                                      </p>
                                    </div>
                                    <div class="faleconosco">
                                      <p class="text-block m-b-5"><img src="assets/images/icon/email-icon.png" class="icone">
                                        <a href="{{$quemsomos->email}}" class="text-block m-b-5 texto-loc" style="font-weight: 200">{{$quemsomos->email}}</a>
                                      </p>
                                    </div>
                                    <div class="faleconosco">
                                      <p class="text-block m-b-5"><img src="assets/images/icon/instagram-icon.png" class="icone">
                                        <a href="{{$quemsomos->instagram}}" class="text-block m-b-5 texto-loc" style="font-weight: 200">@racoesaquario</a>
                                      </p>
                                    </div>

                                                  <a class="anchor" id="contato"></a>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- REQUEST A CALL BACK / start-->


        </main>
        <!-- END MAIN-->

        <div class="modal fade modal-video" tabindex="-1" role="dialog" aria-hidden="true" id="modal-video">
            <div class="modal-dialog modal-video__dialog" role="document" data-dismiss="modal">
                <div class="modal-video__close" data-dismiss="modal" aria-label="Close">×</div>
                <div class="modal-video__wrapper">
                    <div class="modal-video__holder">
                        <img src="assets/images/video-01.jpg" alt="IMG" />
                    </div>
                    <div class="modal-video__video">
                        <iframe src="https://www.youtube.com/embed/qwzDYq8x1hs?ecver=1"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
@include('front.partials._bottom')

@include('front.partials._scripts')
<script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

   wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

</html>
<!-- end document-->
