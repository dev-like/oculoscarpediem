<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="CARPE DIEM">
        <meta name="author" content="Like Design">
        <meta name="keywords" content="">
        @foreach ($produtos as $produto)
            @if ($slug == $produto->produtos_slug)
                <title>Carpe Diem - {{$produto->produtos_nome}}</title>
            @endif
        @endforeach
        @include('front.partials._style')
    </head>
    <body>
    <body class="relative grid-1440">
     
<?php 
//dd($linha);
//dd($quemsomos);
//dd($parceiross);
//dd($parceirosss);
//dd($imagens);
?>

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    
    <main class="main-wrapper oh">
        
    <!-- Cabeçalho -->
    @include('front.partials._menuHome')
    
    <!-- Carrossel Nathan Albuquerque -->
    @foreach ($produtos as $produto)
        @if ($slug == $produto->produtos_slug)
            <section class="section-wrap intro style-2" style="background-image: url(../assets/img/bg/bg-produtos-min.avif);">
                
                <div class="container container-carrossel">
                    
                    <div class="row-sm-5 mb-30">
                        <h2 class="intro-heading uppercase"><a href="/{{$produto->linha_slug}}/{{$produto->produtos_slug}}">{{$produto->produtos_nome}}</a></h2>
                    </div>
                    
                    <div class="block-media">
                        <div class="carousel-images slider-nav">
                            
                            @foreach ($imagens as $imagem)
                                @if ($slug == $imagem->produtos_slug)
                                    <div class="papular-block ">
                                        <img src="../uploads/produtos/{{$imagem->imagem}}" alt="" >
                                    </div>
                                @endif
                            @endforeach
                            
                            
                  
                        </div>
                    </div><!-- /.block-media -->
                    
                </div> <!-- /.block-media -->
                
            </session>
        @endif
    @endforeach
    <!-- end Carrosse Nathan Albuquerque -->
    
    </main>
    
    <!-- Rodapé -->
    @include('front.partials._bottom')
    
    @include('front.partials._scripts')
    <!-- <script src="{{ asset('../../assets/js/pages.js') }}"></script> -->
    </body>
</html>
