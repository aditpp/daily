<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="index.html"><img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" data-sticky-top="0" src="img/logo-default-slim-dark.png"></a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-no-transform header-nav-bottom-line-active-text-light header-nav-bottom-line-effect-1 header-nav-light-text">
                            <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-border-radius header-nav-main-text-capitalize header-nav-main-text-size-3 header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="">
                                            <a class="dropdown-item dropdown-toggle" href="{{ route('home') }}">
                                                Home
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="dropdown-item dropdown-toggle" href="{{ route('news.index') }}">
                                                News
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Blog
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Quotes
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="dropdown-item dropdown-toggle" href="{{ route('contact') }}">
                                                Contact
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav"><i class="fa fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>