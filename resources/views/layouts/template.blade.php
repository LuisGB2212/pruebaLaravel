<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <title>{{ env('APP_NAME') }} | @yield('title', 'Inicio')</title>
        <meta name="format-detection" content="telephone=no" />
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset="utf-8" />
        <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon" />
        <!-- Stylesheets-->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500" />
        <link rel="stylesheet" href="/assets/css/bootstrap.css" />
        <link rel="stylesheet" href="/assets/css/fonts.css" />
        <link rel="stylesheet" href="/assets/css/style.css" />
        <!--[if lt IE 10]>
            <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, 0.3); clear: both; text-align: center; position: relative; z-index: 1;">
                <a href="http://windows.microsoft.com/en-US/internet-explorer/">
                    <img src="/assets/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
                </a>
            </div>
            <script src="js/html5shiv.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="preloader">
            <div class="wrapper-triangle">
                <div class="pen">
                    <div class="line-triangle">
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                    </div>
                    <div class="line-triangle">
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                    </div>
                    <div class="line-triangle">
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page">
            <!-- Page Header-->
            @include('layouts.partials.header', ['setting' => isset($setting) ? $setting : null])

            @yield('body')

            @include('layouts.partials.contact_form')

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.4724630370265!2d-88.20073658860778!3d20.691030573998688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f510ada009d8acf%3A0x369d1746564d8416!2sHotel%20El%20Mes%C3%B3n%20del%20Marqu%C3%A9s!5e0!3m2!1ses-419!2smx!4v1683597424957!5m2!1ses-419!2smx" width="1600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
            <!-- Page Footer-->
            @include('layouts.partials.footer')

        </div>
        <!-- Global Mailform Output-->
        <div class="snackbars" id="form-output-global"></div>
        <!-- Javascript-->
        <script src="/assets/js/core.min.js"></script>
        <script src="/assets/js/script.js"></script>
        <!-- coded by Himic-->
    </body>
</html>
