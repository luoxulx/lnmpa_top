<header class="nav-type-2">

    <!-- Fullscreen search -->
    <div class="search-wrap">
        <div class="search-inner">
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="form-control main-search-input" placeholder="Search for">
                        <div class="search-submit-icon"><i class="icon icon_search"></i></div>
                        <input type="submit" class="search-submit" value="search">
                    </div>
                </form>
            </div>
        </div>
        <i class="icon icon_close search-close" id="search-close"></i>
    </div> <!-- end fullscreen search -->

    <div class="top-bar">
        <div class="container">
            <div class="row">

                <!-- socials -->
                <div class="side-menu left">
                    <div class="nav-inner menu-socials social-icons">
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                </div> <!-- end socials -->

                <!-- search -->
                <div class="side-menu right hidden-sm hidden-xs">
                    <div class="nav-inner">
                        <div class="nav-search-wrap right hidden-sm hidden-xs">
                            <a href="#" class="nav-search search-trigger">
                                <i class="icon icon_search"></i>
                            </a>
                        </div>
                    </div>
                </div> <!-- end search -->

            </div>
        </div>
    </div> <!-- end top bar -->

    <nav class="navbar navbar-static-top">
        <div class="navigation">
            <div class="container relative">

                <div class="row">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div> <!-- end navbar-header -->

                    <div class="header-wrap">
                        <div class="logo-container text-center">
                            <div class="logo-wrap">
                                <a href="index.html">
                                    <img class="logo-dark" src="{{ asset('/a/img/logo_dark_big.png') }}" alt="logo">
                                    <img class="logo-small" src="{{ asset('/a/img/logo_dark.png') }}" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 nav-wrap">
                        <div class="collapse navbar-collapse text-center" id="navbar-collapse">

                            <ul class="nav navbar-nav">

                                <li class="dropdown active">
                                    <a href="index.html">Home</a><i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Classic</a></li>
                                        <li><a href="index-2.html">Hero Slider</a></li>
                                        <li><a href="index-3.html">Modern</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#">Pages</a><i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="blog-single.html">Single Post Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-single-full-width.html">Single Post Full Width</a>
                                        </li>
                                        <li>
                                            <a href="shortcodes.html">Shortcodes</a>
                                        </li>
                                        <li>
                                            <a href="typography.html">Typography</a>
                                        </li>
                                        <li>
                                            <a href="404.html">404</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#">Categories</a><i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Lifestyle</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Food</a></li>
                                        <li><a href="#">Travel</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="about.html">About</a>
                                </li>

                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>

                                <li id="mobile-search" class="hidden-lg hidden-md">
                                    <form method="get" class="mobile-search">
                                        <input type="search" class="form-control" placeholder="Search...">
                                        <button type="submit" class="search-button">
                                            <i class="icon icon_search"></i>
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
