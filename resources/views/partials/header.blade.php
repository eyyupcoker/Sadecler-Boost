<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <title>Sadecler Boost</title>

        <!-- Style CSS -->
        <link rel="preconnect" href="https://fonts.googleapis.com/" >
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin >
        <link
            rel="shortcut icon"
            href="{{asset('assets/images/favicon.png')}}/"
            type="image/png"
        >
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&amp;display=swap"
            rel="stylesheet"
        >
        <link
            href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&amp;display=swap"
            rel="stylesheet"
        >
        <link
            rel="stylesheet"
            href="{{asset('assets/libs/line-awesome/css/line-awesome.min.css')}}/"
            >
        <link
            rel="stylesheet"
            href="{{asset('assets/libs/bootstrap/css/bootstrap.min.css')}}/"
        >
        <link
            rel="stylesheet"
            href="{{asset('assets/libs/swiper/swiper-bundle.min.css')}}/"
        >
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}/">
    </head>
    <body>
        <div id="wrapper">
            <div id="preload" class="preload"><div class="spin"></div></div>
            <!-- BEGIN SITE HEADER -->
            <header id="header" class="site-header sala-dark-scheme is-transparent">
                <div class="container-fluid">
                    <div class="row flex-align-c inner">
                        <div class="col-lg-3 col-6">
                            <div class="header-left flex flex-align-c">
                                <div class="canvas-menu">
                                    <div class="icon">
                                        <a href="#">
                                            <svg width="30px" height="14px" viewBox="0 0 30 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g   stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-50.000000, -33.000000)" fill="#111111">
                                                        <g id="off-menu" transform="translate(50.000000, 28.000000)">
                                                            <g id="icon-menu" transform="translate(0.000000, 5.000000)">
                                                                <rect id="Rectangle-1" x="0" y="0" width="30" height="3" rx="1.5"></rect>
                                                                <rect id="Rectangle-2" x="0" y="11" width="20" height="3" rx="1.5"></rect>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="logo">
                                    <a href="{{ route('index')}}">
                                        LOGO
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-0 text-center">
                            <div class="header-center">
                                <div class="main-menu">
                                    <div class="menu-action">
                                        <span class="item menu-back"><i class="las la-arrow-left"></i></span>
                                        <span class="item menu-close"><i class="las la-times"></i></span>
                                    </div>
                                    <ul>
                                        <li class="is-mega-menu">
                                            <a href="{{ route('index')}}">ANASAYFA</a>
                                        </li>
                                        <li class="is-normal-menu">
                                            <a href="{{ route('boost')}}"><img style="height: 40px; border-radius: 50%; margin-right: 5px;" src="{{asset('assets/images/valoicon.png')}}/" alt="">VALORANT BOOST</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="{{ route('boost')}}">ELO BOOST</a>
                                                    <a href="{{ route('duoboostpage')}}">DUO BOOST</a>
                                                    <a href="{{ route('radiantboostpage')}}">RADIANT BOOST</a>
                                                    <a href="{{ route('winboostpage')}}">WIN BOOST</a>
                                                    <a href="{{ route('placementboostpage')}}">YERLEŞTİRME MAÇLARI</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="is-normal-menu">
                                            <a href="#"><img style="height: 40px; border-radius: 50%; margin-right: 5px;" src="{{asset('assets/images/lolicon.png')}}/" alt="">LOL BOOST</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="#">ÇOK YAKINDA HİZMETİNİZDE</a>

                                                </li>
                                            </ul>
                                        </li>
                                        <li class="is-mega-menu">
                                            <a href="#">BOOSTER OL+</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @if(!Auth::check())
                            <div class="col-lg-3 col-6">
                                <div class="header-right flex flex-align-c flex-content-e">
                                    <div class="customer">
                                        <a href="{{ route('signin')}}"class="button fullfield"><i class="las la-user-circle"></i><span>Giriş Yap</span></a>
                                    </div>
                                    <div class="buttons">
                                        <a href="{{ route('signup')}}" class="button fullfield"><i class="las la-headset"></i><span>Üye ol</span></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if(Auth::check())
                            <div class="col-lg-3 col-6">
                                <div class="header-right flex flex-align-c flex-content-e">
                                    <div class="customer">
                                        <a href="{{ route('account')}}"class="button fullfield"><i class="las la-user-circle"></i><span>Hesap</span></a>
                                    </div>
                                    <div class="buttons">
                                        <form action="{{route('logout')}}" method="post">
                                            @csrf
                                        <button class="button logoutButton"><i class="las la-headset"></i><span>Çıkış</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </header>
