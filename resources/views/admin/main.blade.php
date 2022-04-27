<!DOCTYPE html>
<html>
    @include('admin.partials._head')

    @yield('styles')
    <body>
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="/admin" class="logo">
                      <span>
                        <img src="{{ asset('assets/img/logo.png') }}" alt="" height="50">
                      </span>
                      <i>
                        <img src="{{ asset('assets/img/favicon.ico') }}" alt="" height="48">
                      </i>
                    </a>
                </div>
                @include('admin.partials._nav')
            </div>
            <!-- Top Bar End -->
            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.partials._aside')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">@yield('page-title')</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item text-white">@yield('page-caminho')</li>
                                        <li class="breadcrumb-item active">@yield('page-title')</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        @include('admin.partials._message')
                        <div class="row">
                          @yield('content')
                        </div>
                    </div> <!-- container -->
                </div> <!-- content -->

                <footer class="footer text-right">
                    2021 © Like Publicidade
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
        @include('admin.partials._bottom')

        @yield('scripts')
    </body>
</html>
