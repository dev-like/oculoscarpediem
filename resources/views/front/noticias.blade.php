<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <!-- Required meta tags-->
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Instituto Misericordiae Vultus" />
        <meta name="author" content="LIKE_DSG" />
        <title>Instituto Misericordiae Vultus</title>
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
                <div class="page_header d-flex align-items-center">

                </div><!-- /.page_header -->
                <div class="blog_post">
                    <div class="container-xl">
                        <div class="the_post_container">

                            <!-- the_post start -->
                            <div class="the_post">
                                <figure>
                                    <img src="{{ asset('uploads/noticias/imagens/'.$noticia->capa) }}" alt="Blog title">
                                </figure>
                                <h2 class="the_title">{{$noticia->titulo}}</h2>
                                <div class="post_info">
                                    <!-- <a href="#" class="the_author">By Jenifer Lofez</a> -->
                                    <a href="#" class="date_time">{{$noticia->datapublicacao}}</a>
                                </div>
                                <?php
                                echo $noticia->conteudo
                                ?>
                                <div class="row justify-content-lg-between justify-content-center my-lg-5 my-4">
                                    <div class="col-sm-4">
                                        <img src="{{asset('uploads/noticias/imagens/02.jpeg')}}" alt="Blog inner image">
                                    </div>
                                    <div class="col-sm-4 mt-3 mt-sm-0">
                                        <img src="{{asset('uploads/noticias/imagens/03.jpeg')}}" alt="Blog inner image">
                                    </div>
                                    <div class="col-sm-4 mt-3 mt-sm-0">
                                        <img src="{{asset('uploads/noticias/imagens/04.jpeg')}}" alt="Blog inner image">
                                    </div>
                                </div>


                            </div>
                            <!-- the_post end -->

                            <!-- <div class="post_reaction"> -->
                                <!-- <h3>Comments:</h3>
                                <ul class="list-unstyled all_comments">
                                    <li class="media comment-card">
                                        <a href="#">
                                            <img src="img/comments/01.jpg" alt="Comment by name">
                                        </a>
                                        <div class="media-body">
                                            <div class="d-flex justify-content-between comment-header">
                                                <div class="commented-by">
                                                    <h3>Shannon Kelley</h3>
                                                    <h4>Web Developer</h4>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">
                                                        <i class="icofont-reply"></i>
                                                        Reply
                                                    </a>
                                                </div>
                                            </div>
                                            It is a long established fact that a reader will be distracted by the readable cont ent of a page when looking at its layout. he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here content here', making.
                                            <div class="media comment-card">
                                                <a href="#">
                                                    <img src="img/comments/02.jpg" alt="Reply comment by name">
                                                </a>
                                                <div class="media-body">
                                                    <div class="d-flex justify-content-between comment-header">
                                                        <div class="commented-by">
                                                            <h3>Roselia Muller</h3>
                                                            <h4>Web Developer</h4>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">
                                                                <i class="icofont-reply"></i>
                                                                Reply
                                                            </a>
                                                        </div>
                                                    </div>
                                                    It is a long established fact that a reader will be distracted by the readable cont ent of a page when looking at its layout. he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here content here', making.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media comment-card">
                                        <a href="#">
                                            <img src="img/comments/01.jpg" alt="Comment by name">
                                        </a>
                                        <div class="media-body">
                                            <div class="d-flex justify-content-between comment-header">
                                                <div class="commented-by">
                                                    <h3>Shannon Kelley</h3>
                                                    <h4>Web Developer</h4>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">
                                                        <i class="icofont-reply"></i>
                                                        Reply
                                                    </a>
                                                </div>
                                            </div>
                                            It is a long established fact that a reader will be distracted by the readable cont ent of a page when looking at its layout. he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here content here', making.
                                        </div>
                                    </li>
                                </ul>
                                <h3>Leave a Comment:</h3>
                                <form class="d-flex justify-content-between flex-wrap">
                                    <div class="inputs">
                                        <input type="text" placeholder="Name:">
                                        <input type="email" placeholder="Email:">
                                        <input type="text" placeholder="Phone:">
                                    </div>
                                    <div class="text-area text-center">
                                        <textarea placeholder="Message:"></textarea>
                                        <button type="submit" class="theme-btn">
                                            Submit Comment <i class="icofont-arrow-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            < /.post_reaction 
                        </div>
                    </div>
                </div> -->
            </main><!-- /.site-content -->
              @include('front.partials._bottom')
        </div>
        <!-- page-wrapper end -->

        <!-- Back2Top -->
        <div class="back2Top bg1 wave">
            <i class="icofont-dotted-up text-white"></i>
        </div>

        <!-- Required JavaScript Files -->
        <!-- jQuery JS -->
        <script src="js/jquery-1.12.4.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Wow.js -->
        <script src="js/wow.min.js"></script>
        <!-- Smooth Scroll JS -->
        <script src="js/SmoothScroll.js"></script>
        <!-- Main.js -->
        <script src="js/main.js"></script>
    </body>
</html>
