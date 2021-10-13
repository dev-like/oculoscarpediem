<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <!-- Required meta tags-->
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="LIKE_DSG" />
        <title>Óculos Carpe Diem</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.png" />
        <!-- Google Font -->
        @include('front.partials._style')

        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />

    </head>

    <body>
        <!-- page-wrapper start -->
        <div class="page-wrapper">
            @include('front.partials._menuHome')
            <main class="site-content">
                <div class="hero-section">
                    <div class="container-lg h-100 px-lg-0">
                        <div class="row h-100 justify-content-lg-start justify-content-center align-items-center">
                            <div class="col-xl-6 col-lg-8">
                                <div class="hero-content">
                                    <h2>Vamos somar esforços!</h2>
                                    <h3 style="padding:30px 0">Juntos faremos mais, e melhor!</h3>

                                    <a href="quemsomos" class="theme-btn"> SAIBA MAIS <i class="icofont-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.hero-section -->

                <div id="quemsomos" class="video-section" style="padding:100px 0 0 0;">
                    <div class="container-xl px-xl-0">
                        <div class="video-section-content">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-lg-2 order-1">
                                    <div class="video-banner">
                                        <img src="assets/img/video.png" alt="Video Banner" />
                                        <a href="#" class="play-video" data-toggle="modal" data-target="#popup-video">
                                            <i class="icofont-ui-play text-white"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-6 px-xl-5 order-lg-1 order-2">
                                    <section>
                                        <h3>Quem Somos</h3>
                                        <h2>“A lição que nos restou da dura batalha travada para salvar vidas.”</h2>

                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.video-section -->
                <div class="cta-section" style="padding:100px 0 0 0;">
                    <div class="container-md px-md-0">
                        <div class="sobre-1-section-content">
                            <div class="row align-items-center">
                                <div class="col-md-6 order-lg-1 order-1">
                                    <div class="video-banner">
                                        <img src="assets/img/sobre_1.png" alt="Video Banner" />
                                    </div>
                                </div>

                                <div class="col-md-6 px-xl-5 order-lg-2 order-2">
                                    <section>
                                        <h3 class="titulo-secao">Especialistas em cuidados especiais de saúde inclusiva</h3>
                                        <p style="text-align:justify">Contamos com equipes formadas por profissionais especializados em assistencia à saúde em cirurgias de alta complexidade, patologias ortopédicas e deformidades incapacitantes. </p>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.video-section -->
                <div class="cta-section" style="padding:100px 0 100px 0;">
                    <div class="container-md px-md-0">
                        <div class="sobre-1-section-content">
                            <div class="row align-items-center">
                                <div class="col-md-6 order-lg-2 order-1">
                                    <div class="video-banner">
                                        <img src="assets/img/sobre_2.png" alt="Video Banner" />
                                    </div>
                                </div>

                                <div class="col-md-6 px-xl-5 order-lg-1 order-2 sobre-texto">
                                    <section>
                                        <h3 class="titulo-secao">Nossa História</h3>
                                        <p style="text-align:justify">Criado em 2016 por um grupo de médicos do Hospital Santa Mônica liderados por Áureo Cangussu, o <strong>INSTITUTO MISERICORDIAE VULTUS</strong>  atua hoje como o braço assistencial do grupo Santa Mônica.</p>
                                        <p style="text-align:justify">O trabalho começou envolvendo todo o corpo clínico, parceiros e apoiadores, com o firme propósito de implantar o projeto de saúde inclusiva.</p>
                                        <p style="text-align:justify">De lá até hoje foram realizados treinamentos, constituída equipes técnicas e muitos atendimentos bem-sucedidos, entre eles o primeiro implante Coclear do MA e várias cirurgias de reconstrução orofacial e ortopédicas.</p>
</p>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.video-section -->

                <div id="noticias" class="blog-section">
                    <div class="container-md px-md-0">
                        <div class="d-flex flex-wrap blog-section-header justify-content-xl-between text-xl-left text-center align-items-center">
                            <div class="col-xl-5">
                                <h2>Notícias & Eventos</h2>
                            </div>
                            <div class="col-xl-5 pl-xl-0">
                                <p>Fique por dentro de tudo o que acontece no INSTITUTO!</p>
                            </div>
                            <div class="col-xl-2">
                                <div class="blog-carousel-control">
                                    <span class="blog-carousel-nav btn-prev">
                                        <i class="icofont-arrow-left"></i>
                                    </span>
                                    <span class="blog-carousel-nav btn-next">
                                        <i class="icofont-arrow-right"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-md px-md-0">
                        <div class="row">
                            <div class="slide-progress"></div>
                            <div class="blog-carousel owl-carousel">
                                @foreach ($noticia as $noticias)
                                <div class="blog-card  flex-sm-row flex-row">
                                  <div class="blog-card-body">
                                    <div class="the_post_thumbnail">

                                        <img src="{{ asset('uploads/noticias/imagens/'.$noticias->capa) }}" />
                                    </div>
                                        <span class="the_date">{{$noticias->datapublicacao}}</span>
                                        <h2 class="the_title">
                                            <a href="noticia/{{$noticias->slug}}">{{$noticias->titulo}}</a>
                                        </h2>
                                        <a href="noticia/{{$noticias->slug}}" class="the_permalink">Continue lendo <i class="icofont-arrow-right"></i></a>

                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div><!-- /.blog-section -->

                <section id="especialidades" class="section p-t-50 p-b-50 p-md-t-60 p-md-b-80">
                    <div class="container">
                        <div class="row">
                            <div class="section-header col-lg-12">
                                <h2>Nossas Especialidades</h2>
                                <p>É possível fazer um mundo melhor para algumas pessoas, as pessoas que conseguiremos alcançar. Conheça alguns casos!</p>
                            </div>
                        </div>
                    </div>

                    <div class="container-xl px-xl-0">
                        <div class="row no-gutters">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="service-card">
                                  <div class="video-banner" style="padding-bottom: 20px;">
                                      <img src="assets/img/esp_1.png" alt="Especialidades" />
                                  </div>
                                  <h2>Clínica de Saúde Inclusiva</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="service-card">
                                  <div class="video-banner" style="padding-bottom: 20px;">
                                      <img src="assets/img/esp_2.png" alt="Especialidades" />
                                  </div>
                                  <h2>Reconstrução orofacial</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="service-card">
                                  <div class="video-banner" style="padding-bottom: 20px;">
                                      <img src="assets/img/esp_3.png" alt="Especialidades" />
                                  </div>
                                  <h2>Ortopedia Inclusiva</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="service-card">
                                  <div class="video-banner" style="padding-bottom: 20px;">
                                      <img src="assets/img/esp_4.png" alt="Especialidades" />
                                  </div>
                                  <h2>Audição Inclusiva</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="section" style="padding-top:85px; padding-bottom:30px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading section-heading-2">
                                    <h2 class="section-heading__title titulo-secao">Nossos parceiros</h2>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="container">
                            <div class="parceiros owl-carousel owl-theme owl-loaded owl-drag">
                                  <div class="media__img">
                                      <a href="#">
                                          <img src="assets/img/parceiros/01.png"  alt="Parceiro" />
                                      </a>
                                  </div>
                                  <div class="media__img">
                                      <a href="#">
                                          <img src="assets/img/parceiros/02.png"  alt="Parceiro" />
                                      </a>
                                  </div>
                                  <div class="media__img">
                                      <a href="#">
                                          <img src="assets/img/parceiros/03.png"  alt="Parceiro" />
                                      </a>
                                  </div>
                                  <div class="media__img">
                                      <a href="#">
                                          <img src="assets/img/parceiros/04.png"  alt="Parceiro" />
                                      </a>
                                  </div>
                                  <div class="media__img">
                                      <a href="#">
                                          <img src="assets/img/parceiros/05.png"  alt="Parceiro" />
                                      </a>
                                  </div>
                                  <div class="media__img">
                                      <a href="#">
                                          <img src="assets/img/parceiros/06.png"  alt="Parceiro" />
                                      </a>
                                  </div>
                            </div>

                    </div>
                </section>
                <section class="d-none d-md-block d-lg-none">
                  <img src="assets/img/banner-faixa.png"/>
                </section>
                <section class="d-none d-md-none d-lg-block">
                  <img src="assets/img/banner-faixa-4k.png"/>
                </section>
                <!-- END PARCEIROS-->
                <section class="section bg-cover localizacao">
                    <div id="contatos" class="container-fluid">
                        <div class="row">
                            <iframe id="iframe"
                                width="100%"
                                height="560px"
                                style="border:0; margin:0;"
                                loading="lazy"
                                allowfullscreen
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA4dSid5mAabU2sBcANFmP49RMr4kUJK0g
                                  &q=R.+Cel.+Manoel+Bandeira,+1915,Imperatriz+MA">
                            </iframe>

                        </div>
                    </div>
                </section>


            </main><!-- /.site-content -->

            @include('front.partials._bottom')
        </div>
        <!-- page-wrapper end -->

        <div class="modal fade" id="popup-video">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <iframe src="https://www.youtube.com/embed/JRZ7OIHLrPs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <!-- <iframe width="1280" height="720" src="https://www.youtube.com/embed/JRZ7OIHLrPs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Back2Top -->
        <div class="back2Top bg1 wave">
            <i class="icofont-dotted-up text-white"></i>
        </div>




      </body>

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

$('.parceiros').owlCarousel({
    loop:true,
    margin:10,
    // autoplay:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:false,
            loop:true
        }
    }
});

</script>
</html>
<!-- end document-->
