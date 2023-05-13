<header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav
            class="rd-navbar rd-navbar-modern"
            data-layout="rd-navbar-fixed"
            data-sm-layout="rd-navbar-fixed"
            data-md-layout="rd-navbar-fixed"
            data-md-device-layout="rd-navbar-fixed"
            data-lg-layout="rd-navbar-static"
            data-lg-device-layout="rd-navbar-fixed"
            data-xl-layout="rd-navbar-static"
            data-xl-device-layout="rd-navbar-static"
            data-xxl-layout="rd-navbar-static"
            data-xxl-device-layout="rd-navbar-static"
            data-lg-stick-up-offset="56px"
            data-xl-stick-up-offset="56px"
            data-xxl-stick-up-offset="56px"
            data-lg-stick-up="true"
            data-xl-stick-up="true"
            data-xxl-stick-up="true"
        >
            <div class="rd-navbar-inner-outer">
                <div class="rd-navbar-inner">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand">
                            <a class="brand" href="index.html">
                                <strong>{{ $setting->name_company }}</strong>
                                {{-- <img class="brand-logo-dark" src="/assets/images/logo-198x66.png" alt="" width="198" height="66" /> --}}
                            </a>
                        </div>
                    </div>
                    <div class="rd-navbar-right rd-navbar-nav-wrap">
                        <div class="rd-navbar-aside">
                            <ul class="rd-navbar-contacts-2">
                                <li>
                                    <div class="unit unit-spacing-xs">
                                        <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                        <div class="unit-body"><a class="phone" href="tel:#">{{ isset($setting) ? $setting->phone_company : ''}}</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit unit-spacing-xs">
                                        <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                        <div class="unit-body"><a class="address" href="#">{{ isset($setting) ? $setting->address_company : ''}}</a></div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-share-2">
                                {!! (isset($setting) && !empty($setting->facebook_company)) ? '<li><a class="icon mdi mdi-facebook" target="_blank" href="'.$setting->facebook_company.'"></a></li>' : '' !!}
                                {!! (isset($setting) && !empty($setting->twitter_company)) ? '<li><a class="icon mdi mdi-twitter" target="_blank" href="'.$setting->twitter_company.'"></a></li>' : '' !!}
                                {!! (isset($setting) && !empty($setting->instagram_company)) ? '<li><a class="icon mdi mdi-instagram" target="_blank" href="'.$setting->instagram_company.'"></a></li>' : '' !!}
                                {!! (isset($setting) && !empty($setting->google_company)) ? '<li><a class="icon mdi mdi-google-plus" target="_blank" href="'.$setting->google__company.'"></a></li>' : '' !!}
                                <li>
                                    @if (Route::has('login'))
                                        <div class="">
                                            @auth
                                                <a href="{{ url('/home') }}" class="btn btn-success">Home</a>
                                            @else
                                                <a href="{{ route('login') }}" class="btn btn-success">Log in</a>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" class="ml-4 btn btn-success">Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif
                                </li>
                            </ul>
                        </div>
                        <div class="rd-navbar-main">
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                                <li class="rd-nav-item active"><a class="rd-nav-link" href="/">Inicio</a></li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('contact') }}">Nosotros</a></li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contáctanos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="rd-navbar-project-hamburger rd-navbar-project-hamburger-open rd-navbar-fixed-element-1"
                        data-multitoggle=".rd-navbar-inner"
                        data-multitoggle-blur=".rd-navbar-wrap"
                        data-multitoggle-isolate="data-multitoggle-isolate"
                    >
                        <div class="project-hamburger"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span></div>
                    </div>
                    <div class="rd-navbar-project">
                        <div class="rd-navbar-project-header">
                            <h5 class="rd-navbar-project-title">Gallery</h5>
                            <div
                                class="rd-navbar-project-hamburger rd-navbar-project-hamburger-close"
                                data-multitoggle=".rd-navbar-inner"
                                data-multitoggle-blur=".rd-navbar-wrap"
                                data-multitoggle-isolate="data-multitoggle-isolate"
                            >
                                <div class="project-close"><span></span><span></span></div>
                            </div>
                        </div>
                        <div class="rd-navbar-project-content rd-navbar-content">
                            <div>
                                <div class="row gutters-20" data-lightgallery="group">
                                    <div class="col-6">
                                        <!-- Thumbnail Creative-->
                                        <article class="thumbnail thumbnail-creative">
                                            <a href="/assets/images/project-1-1200x800-original.jpg" data-lightgallery="item">
                                                <div class="thumbnail-creative-figure"><img src="/assets/images/project-1-195x164.jpg" alt="" width="195" height="164" /></div>
                                                <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                                            </a>
                                        </article>
                                    </div>
                                    <div class="col-6">
                                        <!-- Thumbnail Creative-->
                                        <article class="thumbnail thumbnail-creative">
                                            <a href="/assets/images/project-2-1200x800-original.jpg" data-lightgallery="item">
                                                <div class="thumbnail-creative-figure"><img src="/assets/images/project-2-195x164.jpg" alt="" width="195" height="164" /></div>
                                                <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                                            </a>
                                        </article>
                                    </div>
                                    <div class="col-6">
                                        <!-- Thumbnail Creative-->
                                        <article class="thumbnail thumbnail-creative">
                                            <a href="/assets/images/project-3-1200x800-original.jpg" data-lightgallery="item">
                                                <div class="thumbnail-creative-figure"><img src="/assets/images/project-3-195x164.jpg" alt="" width="195" height="164" /></div>
                                                <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                                            </a>
                                        </article>
                                    </div>
                                    <div class="col-6">
                                        <!-- Thumbnail Creative-->
                                        <article class="thumbnail thumbnail-creative">
                                            <a href="/assets/images/project-4-1200x800-original.jpg" data-lightgallery="item">
                                                <div class="thumbnail-creative-figure"><img src="/assets/images/project-4-195x164.jpg" alt="" width="195" height="164" /></div>
                                                <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                                            </a>
                                        </article>
                                    </div>
                                    <div class="col-6">
                                        <!-- Thumbnail Creative-->
                                        <article class="thumbnail thumbnail-creative">
                                            <a href="/assets/images/project-5-1200x800-original.jpg" data-lightgallery="item">
                                                <div class="thumbnail-creative-figure"><img src="/assets/images/project-5-195x164.jpg" alt="" width="195" height="164" /></div>
                                                <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                                            </a>
                                        </article>
                                    </div>
                                    <div class="col-6">
                                        <!-- Thumbnail Creative-->
                                        <article class="thumbnail thumbnail-creative">
                                            <a href="/assets/images/project-6-1200x800-original.jpg" data-lightgallery="item">
                                                <div class="thumbnail-creative-figure"><img src="/assets/images/project-6-195x164.jpg" alt="" width="195" height="164" /></div>
                                                <div class="thumbnail-creative-caption"><span class="icon thumbnail-creative-icon linearicons-magnifier"></span></div>
                                            </a>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>