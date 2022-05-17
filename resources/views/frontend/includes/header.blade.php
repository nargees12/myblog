<header id="header" data-transparent="true" data-fullwidth="true" class="dark submenu-light">
    <div class="header-inner">
        <div class="container">
            <div id="logo">
                <a href="/">
                    <span class="logo-default">POLO</span>
                    <span class="logo-dark">POLO</span>
                </a>
            </div>
            <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                <form class="search-form" action="{{ asset('frontend/search-results-page.html')}}" method="get">
                    <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                    <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                </form>
            </div>
            <div id="mainMenu-trigger">
                <a class="lines-button x"><span class="lines"></span></a>
            </div>
            <div id="mainMenu">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li class="dropdown"><a href="#">Layout</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu"><a href="#">Topbar</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="header-topbar.html">Light</a></li>
                                            <li><a href="header-topbar-dark.html">Dark</a></li>
                                            <li><a href="header-topbar-transparent.html">Transparent</a></li>
                                            <li><a href="header-topbar-colored.html">Colored</a></li>
                                            <li><a href="header-topbar-fullwidth.html">Fullwidth</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown mega-menu-item"><a href="#">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-lg-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Masonry</li>
                                                    <li><a href="blog-masonry-2.html">Two Columns</a></li>
                                                    <li><a href="blog-masonry-3.html">Three Columns<span class="badge bg-danger">HOT</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>