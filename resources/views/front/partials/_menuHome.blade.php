<header class="nav-type-1">

  <!-- Fullscreen search -->
  <div class="search-wrap">
    <div class="search-inner">
      <div class="search-cell">
        <form method="get">
          <div class="search-field-holder">
            <input type="search" class="form-control main-search-input" placeholder="Search for">
            <i class="ui-close search-close" id="search-close"></i>
          </div>
        </form>
      </div>
    </div>
  </div> <!-- end fullscreen search -->

  <nav class="navbar navbar-static-top">
    <div class="navigation" id="sticky-nav">
      <div class="container relative">

        <div class="row">

          <div class="navbar-header">
            <!-- Logo -->
            <div class="logo-container">
              <div class="logo-wrap">
                <a href="{{url('/')}}">
                  <img class="logo-dark" src="{{url('/')}}/assets/img/logo.png" alt="logo">
                </a>
              </div>
            </div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div> <!-- end navbar-header -->

          <div class="nav-wrap right">
            <div class="collapse navbar-collapse text-center" id="navbar-collapse">

              <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                  <a href="{{url('/')}}#quemsomos">QUEM SOMOS</a>
                  <i class="fa fa-angle-down dropdown-trigger"></i>

                </li>

                <li class="dropdown">
                  <a href="{{url('/')}}/produtos">NOSSOS PRODUTOS</a>
                  <i class="fa fa-angle-down dropdown-trigger"></i>

                </li>

                <li class="dropdown">
                  <a href="{{url('/')}}#contato">CONTATO</a>
                  <i class="fa fa-angle-down dropdown-trigger"></i>

                </li>



                <!-- Nav right -->
                <!-- <li class="nav-right hidden-sm hidden-xs">
                  <ul>
                    <li class="nav-search-wrap hidden-sm hidden-xs">
                      <a href="#" class="nav-search search-trigger">
                        <i class="ui-search"></i>
                      </a>
                    </li>
                    <li class="nav-icon-wrap hidden-sm hidden-xs">
                      <div id="nav-icon">
                        <div class="nav-icon-inner">
                          <a href="#" id="nav-icon-trigger" class="nav-icon-trigger">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                          </a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li> -->

                <li id="mobile-search" class="hidden-lg hidden-md">
                  <form method="get" class="mobile-search">
                    <input type="search" class="form-control" placeholder="Search...">
                    <button type="submit" class="search-button">
                      <i class="ui-search"></i>
                    </button>
                  </form>
                </li>

              </ul> <!-- end menu -->
            </div> <!-- end collapse -->
          </div> <!-- end col -->

        </div> <!-- end row -->
      </div> <!-- end container -->
    </div> <!-- end navigation -->
  </nav> <!-- end navbar -->
</header>
