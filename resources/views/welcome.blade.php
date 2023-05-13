@extends('layouts.template')


@section('body')

<!-- Swiper-->
<section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
    <div class="swiper-wrapper text-sm-left">
        <div class="swiper-slide context-dark" data-slide-bg="/assets/images/slide-1-1920x753.jpg">
            <div class="swiper-slide-caption section-md">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9 col-md-8 col-lg-7 col-xl-7 offset-lg-1 offset-xxl-0">
                            <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Perfect pizza</span></h1>
                            <p class="big swiper-text" data-caption-animate="fadeInLeft" data-caption-delay="300">Experience the taste of a perfect pizza at PizzaHouse, one of the best restaurants!</p>
                            <a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="fadeInUp" data-caption-delay="300">View our menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="/assets/images/slide-2-1920x753.jpg">
            <div class="swiper-slide-caption section-md">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-lg-7 offset-lg-1 offset-xxl-0">
                            <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0">Quality ingredients</span></h1>
                            <p class="big swiper-text" data-caption-animate="fadeInRight" data-caption-delay="300">We use only the best ingredients to make one-of-a-kind pizzas for our customers.</p>
                            <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="slideInUp" data-caption-delay="0">View our menu</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Swiper Pagination-->
    <div class="swiper-pagination" data-bullet-custom="true"></div>
    <!-- Swiper Navigation-->
    <div class="swiper-button-prev">
        <div class="preview">
            <div class="preview__img"></div>
        </div>
        <div class="swiper-button-arrow"></div>
    </div>
    <div class="swiper-button-next">
        <div class="swiper-button-arrow"></div>
        <div class="preview">
            <div class="preview__img"></div>
        </div>
    </div>
</section>
<!-- What We Offer-->
<section class="section section-md bg-default">
    <div class="container">
        <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Our Menu</span></h3>
        <div class="row row-md row-30">
            <div class="col-sm-6 col-lg-4">
                <div class="oh-desktop">
                    <!-- Services Terri-->
                    <article class="services-terri wow slideInUp">
                        <div class="services-terri-figure"><img src="/assets/images/menu-1-370x278.jpg" alt="" width="370" height="278" /></div>
                        <div class="services-terri-caption">
                            <span class="services-terri-icon linearicons-leaf"></span>
                            <h5 class="services-terri-title"><a href="#">Salads</a></h5>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="oh-desktop">
                    <!-- Services Terri-->
                    <article class="services-terri wow slideInDown">
                        <div class="services-terri-figure"><img src="/assets/images/menu-2-370x278.jpg" alt="" width="370" height="278" /></div>
                        <div class="services-terri-caption">
                            <span class="services-terri-icon linearicons-pizza"></span>
                            <h5 class="services-terri-title"><a href="#">Pizzas</a></h5>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="oh-desktop">
                    <!-- Services Terri-->
                    <article class="services-terri wow slideInUp">
                        <div class="services-terri-figure"><img src="/assets/images/menu-3-370x278.jpg" alt="" width="370" height="278" /></div>
                        <div class="services-terri-caption">
                            <span class="services-terri-icon linearicons-hamburger"></span>
                            <h5 class="services-terri-title"><a href="#">Burgers</a></h5>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="oh-desktop">
                    <!-- Services Terri-->
                    <article class="services-terri wow slideInDown">
                        <div class="services-terri-figure"><img src="/assets/images/menu-4-370x278.jpg" alt="" width="370" height="278" /></div>
                        <div class="services-terri-caption">
                            <span class="services-terri-icon linearicons-ice-cream"></span>
                            <h5 class="services-terri-title"><a href="#">Desserts</a></h5>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="oh-desktop">
                    <!-- Services Terri-->
                    <article class="services-terri wow slideInUp">
                        <div class="services-terri-figure"><img src="/assets/images/menu-5-370x278.jpg" alt="" width="370" height="278" /></div>
                        <div class="services-terri-caption">
                            <span class="services-terri-icon linearicons-coffee-cup"></span>
                            <h5 class="services-terri-title"><a href="#">Drinks</a></h5>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="oh-desktop">
                    <!-- Services Terri-->
                    <article class="services-terri wow slideInDown">
                        <div class="services-terri-figure"><img src="/assets/images/menu-6-370x278.jpg" alt="" width="370" height="278" /></div>
                        <div class="services-terri-caption">
                            <span class="services-terri-icon linearicons-steak"></span>
                            <h5 class="services-terri-title"><a href="#">Seafood</a></h5>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- What We Offer-->
<section class="section section-xl bg-default">
    <div class="container">
        <h3 class="wow fadeInLeft">Comentarios</h3>
    </div>
    <div class="container container-style-1">
        <div class="owl-carousel owl-style-12" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30" data-xl-margin="45" data-autoplay="true" data-nav="true" data-center="true" data-smart-speed="400">
            <!-- Quote Tara-->
            @foreach ($comments as $comment)
                <article class="quote-tara">
                    <div class="quote-tara-caption">
                        <div class="quote-tara-text">
                            <p class="q">{{ $comment->comment }}</p>
                        </div>
                        <div class="quote-tara-figure"><img src="/assets/images/user-6-115x115.jpg" alt="" width="115" height="115" /></div>
                    </div>
                    <h6 class="quote-tara-author">{{ $comment->user->name }}</h6>
                    <div class="quote-tara-status">Client</div>
                </article>
            @endforeach
        </div>
    </div>
</section>

@include('layouts.partials.comment_form')

<section class="section section-last bg-default">
    <div class="container-fluid container-inset-0 isotope-wrap">
        <div class="row row-10 gutters-10 isotope" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group">
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
                <!-- Thumbnail Mary-->
                <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInLeft">
                    <a class="thumbnail-mary-figure" href="/assets/images/gallery-1-1200x800-original.jpg" data-lightgallery="item"><img src="/assets/images/gallery-1-310x585.jpg" alt="" width="310" height="585" /></a>
                    <div class="thumbnail-mary-caption">
                        <div>
                            <h6 class="thumbnail-mary-title"><a href="#">Best Ingredients</a></h6>
                            <div class="thumbnail-mary-location">Tasty Pizza</div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xs-6 col-sm-8 col-xl-4 isotope-item oh-desktop">
                <!-- Thumbnail Mary-->
                <article class="thumbnail thumbnail-mary thumbnail-mary-big wow slideInRight">
                    <a class="thumbnail-mary-figure" href="/assets/images/gallery-2-1200x800-original.jpg" data-lightgallery="item"><img src="/assets/images/gallery-2-631x587.jpg" alt="" width="631" height="587" /></a>
                    <div class="thumbnail-mary-caption">
                        <div>
                            <h6 class="thumbnail-mary-title"><a href="#">Comfortable interior</a></h6>
                            <div class="thumbnail-mary-location">Modern Design</div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
                <!-- Thumbnail Mary-->
                <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInDown">
                    <a class="thumbnail-mary-figure" href="/assets/images/gallery-3-1200x800-original.jpg" data-lightgallery="item"><img src="/assets/images/gallery-3-311x289.jpg" alt="" width="311" height="289" /></a>
                    <div class="thumbnail-mary-caption">
                        <div>
                            <h6 class="thumbnail-mary-title"><a href="#">quality Dishware</a></h6>
                            <div class="thumbnail-mary-location">Top-notch utensils</div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xs-6 col-sm-8 col-xl-4 isotope-item oh-desktop">
                <!-- Thumbnail Mary-->
                <article class="thumbnail thumbnail-mary wow slideInUp">
                    <a class="thumbnail-mary-figure" href="/assets/images/gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="/assets/images/gallery-4-631x289.jpg" alt="" width="631" height="289" /></a>
                    <div class="thumbnail-mary-caption">
                        <div>
                            <h6 class="thumbnail-mary-title"><a href="#">Refreshing cocktails</a></h6>
                            <div class="thumbnail-mary-location">Exclusive selection</div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
                <!-- Thumbnail Mary-->
                <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInUp">
                    <a class="thumbnail-mary-figure" href="/assets/images/gallery-5-1200x800-original.jpg" data-lightgallery="item"><img src="/assets/images/gallery-5-311x289.jpg" alt="" width="311" height="289" /></a>
                    <div class="thumbnail-mary-caption">
                        <div>
                            <h6 class="thumbnail-mary-title"><a href="#">Exotic Salads</a></h6>
                            <div class="thumbnail-mary-location">Summer Taste</div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
                <!-- Thumbnail Mary-->
                <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInRight">
                    <a class="thumbnail-mary-figure" href="/assets/images/gallery-6-1200x800-original.jpg" data-lightgallery="item"><img src="/assets/images/gallery-6-311x289.jpg" alt="" width="311" height="289" /></a>
                    <div class="thumbnail-mary-caption">
                        <div>
                            <h6 class="thumbnail-mary-title"><a href="#">All Types of pizza</a></h6>
                            <div class="thumbnail-mary-location">Special Recipes</div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xs-6 col-sm-4 col-xl-2 isotope-item oh-desktop">
                <!-- Thumbnail Mary-->
                <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInLeft">
                    <a class="thumbnail-mary-figure" href="/assets/images/gallery-7-1200x800-original.jpg" data-lightgallery="item"><img src="/assets/images/gallery-7-311x289.jpg" alt="" width="311" height="289" /></a>
                    <div class="thumbnail-mary-caption">
                        <div>
                            <h6 class="thumbnail-mary-title"><a href="#">Diverse menu</a></h6>
                            <div class="thumbnail-mary-location">Pick Your Favorite dish</div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>


@endsection