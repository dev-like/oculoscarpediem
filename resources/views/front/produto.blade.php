<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <!-- <link rel="stylesheet" href="{{url('/')}}/assets/css/modal_v2.css" /> -->


  </head>
  <body>

    @foreach ($produtos as $produto)
      @if ($slug == $produto->produtos_slug)
    <!-- <section class="section-wrap intro style-2">
      <div class="container"> -->

    <div class="block-media">
      <div class="carousel-images single-item">

        @foreach ($imagens as $imagem)
          @if ($slug == $imagem->produtos_slug)
        <div>
          <img src="../uploads/produtos/{{$imagem->imagem}}" alt="1" class="imagem_modall">
        </div>
          @endif
        @endforeach

      </div>
    </div><!-- /.block-media -->

      <!-- </div>
    </section>  -->
    @endif
  @endforeach


  <script type="text/javascript">

  // $(document).ready(function(){
    $('.single-item').slick({
      dots: true,
      infinite: true,
      adaptiveHeight: true,
      fade: true,
      cssEase: 'linear',
      arrows: true,
      centerMode: true
    });
  // });

  </script>

    <!-- <script src="{{url('/')}}/assets/js/modal_v2.js"></script> -->

  </body>
</html>
