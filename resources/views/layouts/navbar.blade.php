<header id="header"
    data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': false, 'stickyStartAt': 0}">
    <div class="header-body border-top-0">
        <div class="header-container container-fluid">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('home') }}">
                                <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-LOGO.webp') }}" class="img-logo" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links order-2 order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="{{ Route::current()->getName() == 'home' ? 'active' : '' }}">
                                            <a class="" href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="{{ Route::current()->getName() == 'about_us' ? 'active' : '' }}">
                                            <a class="" href="{{ route('about_us') }}" style="width: 100%">About
                                                Us</a>
                                        </li>
                                        <li
                                            class="{{ Route::current()->getName() == 'our_innovation' ? 'active' : '' }}">
                                            <a class="" href="{{ route('our_innovation') }}">Our
                                                innovation</a>
                                        </li>
                                        <li class="{{ Route::current()->getName() == 'our_method' ? 'active' : '' }}">
                                            <a class="" href="{{ route('our_method') }}">Our Method</a>
                                        </li>
                                        <li
                                            class="{{ Route::current()->getName() == 'nutritional_properties' ? 'active' : '' }}">
                                            <a class="" href="{{ route('nutritional_properties') }}">Nutritional
                                                properties</a>
                                        </li>
                                        <li class="{{ Route::current()->getName() == 'contact_us' ? 'active' : '' }}">
                                            <a class="" href="{{ route('contact_us') }}">Contact us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
