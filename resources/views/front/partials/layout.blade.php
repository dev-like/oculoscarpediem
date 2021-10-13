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
    <title>Rações Aquário</title>
    @include('front.partials._style')
</head>



        <!-- MAIN-->

          @yield('main-content')
          @include('front.partials._menuHome')
