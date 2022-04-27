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
    <section class="section-wrap intro style-2" style="background-color:#c4c4c4">
      <div class="container">
        @foreach ($parceirosss as $parceiroo)

        <div class="col-sm-5 mb-30">
            <h2 class="intro-heading uppercase"><a href="/{{$parceiroo->linha_slug}}/{{$parceiroo->produtos_slug}}">{{$parceiroo->produtos_nome}}</a></h2>
        </div>



          <!-- Popular Item Slide -->
          <div class="papular-block block-slide">

            <!-- Item -->

            <div class="item" style="padding-right:20px">
              <!-- Item img -->
              <div class="item-img">
                  <?php $count=0; ?>
                @foreach ($parceiross as $imagem)
                      <img class="img-{!!$count=$count+1!!}" src="../uploads/produtos/{{$imagem->imagem}}" alt="" >

                @endforeach
                <div class="overlay">
                  <div class="position-center-center">
                    <div class="inn"><a href="../uploads/produtos/{{$imagem->imagem}}" data-lighter=""><i class="fa fa-search"></i></a> <a href="https://api.whatsapp.com/send?phone=5599981600047&text=Ol%C3%A1%2C%20tudo%20bem%3F%20Fui%20redirecionado%20(a)%20atrav%C3%A9s%20do%20link%20do%20site%20%F0%9F%98%8E.%20Gostaria%20de%20saber%20mais%20sobre%20esse%20produto%3A {{url('/')}}/{{$parceiroo->linha_slug}}/{{$parceiroo->produtos_slug}}"><i class="fa fa-shopping-cart"></i></a></div>
                  </div>
                </div>
              </div>
              <!-- Item Name -->

              <!-- Price -->
              <!-- <span class="price"><small>$</small>299</span> </div> -->
              <!-- <a href="whatsapp://send?text=The text to share!" data-action="share/whatsapp/share">Share via Whatsapp</a> -->

        </div>


      </div>
      @endforeach
    </div>

    </section> <!-- end portfolio slider -->


    <!-- Rodapé -->
    @include('front.partials._bottom')

    @include('front.partials._scripts')
    <!-- <script src="{{ asset('../../assets/js/pages.js') }}"></script> -->
</body>
