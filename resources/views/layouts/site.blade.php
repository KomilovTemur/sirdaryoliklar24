<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') SIRDARYO 24</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="shortcut icon" href="/img/svg_1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>   
    .footer_index{
        color: rgb(192, 222, 222);
        font-weight: 900;
        text-decoration: underline;
        list-style: none;
        border-bottom: none;
    }

    .login_dashboard{
        margin: 2px 20px 0 7px;  
        transition: .5s;  
        position: relative;
    }

    .login_dashboard::before{
        content: 'Login';
        color: #fff;
        padding: 0 5px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        background: #285193;
        position: absolute;
        top: 30px;
        left: -15px;
        display: none;
        border-radius: 5px; 
    }
  
    .login_dashboard:hover::before{
        display: block;
    }
   
    .login_dashboard i{
        font-size: 19px;
        color: #285193;
    }
</style>
<body>
    <!-- <div class="layer">
    <div class="modal-box basic-flex">
      <button type="button" class="btn hide-modal-btn">x</button>
      <h4>Подписывайтесь на наш канал в Telegram и будьте всегда в курсе самых последних новостей:</h4>
      <div class="telegram-join  basic-flex">
        <a href="#"><img src="img/tg.png" alt="Telegram">Подписатся</a>
      </div>
    </div>
  </div> -->
    <div class="menu-mask"></div>
    <main>
        <header class="main-header">
            <div class="container">
                <div class="basic-flex header__top">
                    <a href="{{ route('index') }}" class="logo">
                        <img src="/img/3 sirdaryo.qayta.svg" alt="SIRTDARYOLIKLAR24">
                    </a>
                    <div class="currencies basic-flex">
                        <div class="currency"><span>$</span><span>10137.2 </span></div>
                        <div class="currency"><span>P</span><span>138.26</span></div>
                        <div class="currency"><span>E</span><span>10988.72</span></div>
                    </div>
                    <div class="header__actions basic-flex">
                        <form method="GET" action="{{ route('search') }}" class="search-form basic-flex">
                            <input type="search" name="key" class="search-input" required placeholder="@lang('words.search')">
                            <button type="submit" class="btn search-btn"></button>
                        </form>
                        <div class="languages">
                            @if (\App::getLocale() == 'ru')
                            <a href="/lang/ru" class="btn language__option language__option--active">РУ</a>
                            <div class="languages__list">
                                <a href="/lang/uz" class="btn language__option language__option--uz">UZ</a>
                            </div>
                            @else
                            <a href="/lang/uz" class="btn language__option language__option--uz" data-status="disabled">UZ</a>
                            <div class="languages__list">
                                <a href="/lang/ru" class="btn language__option language__option--active">РУ</a>
                            </div>
                            @endif
                        </div>

                        <a href="{{ route('login') }}" class="login_dashboard">
                            <i class="fa-solid fa-right-to-bracket"></i>
                        </a>

                        <div class="telegram-join basic-flex">
                            <a href="https://t.me/It_Live_Guliston"><img src="/img/tg.png" alt="Telegram">@lang('words.tgme')</a>
                        </div>
                        
                    </div>
                </div>
                <button type="button" class="btn btn-menu"><span class="hamburger"></span></button>
                <nav class="navbar">
                    <div class="currencies-responsive basic-flex">
                        <div class="currency"><span>$</span><span>10137.2 </span></div>
                        <div class="currency"><span>P</span><span>138.26</span></div>
                        <div class="currency"><span>E</span><span>10988.72</span></div>
                    </div>

                    

                    <ul class="navbar__menu basic-flex">
                        @foreach ($categories as $category)
                        <li class="menu__item">
                            <a href="{{ route('categoryPosts', $category->slug) }}">{{ $category['name_'.\App::getLocale()] }}</a>
                        </li>
                        @endforeach
                    </ul>
                </nav>
             
                {{-- ADS --}}
                <a href="{{ $ads->url_top }}" class="advertisement-box" target="_blank">
                    <img src="/site/images/ads/{{ $ads->img_top }}" alt="" class="ads_img">
                    <marquee behavior="scroll" direction="left" scrollamount="18">{{ $ads->title_top }}</marquee>
                </a>
                {{-- ADS --}}


            </div>
        </header>
        {{-- Covid Information  --}}
        <div class="container">
            <div class="covid-block basic-flex ">
                <div class="covid-block__title basic-flex">
                    <div class="covid-title__img"></div>
                    <a href="#" class="covid-title__text">@lang('words.headCovid')</a>
                </div>
                <div class="covid-block__stats basic-flex">
                    <div class="stats__item basic-flex">
                        <div class="stats__img"></div>
                        <div class="stats-text-box">
                            <h4>@lang('words.ill')</h4>
                            {{-- <p>3000</p> --}}
                        </div>
                    </div>
                    <div class="stats__item basic-flex">
                        <div class="stats__img"></div>
                        <div class="stats-text-box">
                            <h4>@lang('words.healthy')</h4>
                            {{-- <p>2438</p> --}}
                        </div>
                    </div>
                    <div class="stats__item basic-flex">
                        <div class="stats__img"></div>
                        <div class="stats-text-box">
                            <h4>@lang('words.died')</h4>
                            {{-- <p>12</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Covid Information  --}}

        @yield('content')

        <footer class="footer">
            <div class="container">
                <div class="footer__top basic-flex">
                    <a href="{{ route('index') }}" class="footer_logo"><img src="/img/3 sirdaryo.qayta.svg"
                            alt="SIRDARYOLIKLAR@$"></a>
                    <div class="join-telegram-wrapper basic-flex">
                        <p>@lang('words.ourTg')</p>
                        <a href="https://t.me/It_Live_Guliston" class="join-telegram">@lang('words.tgme')</a>
                    </div>
                </div>
                <div class="footer__bottom">
                    <div class="about-site">
                        <h4>@lang('words.aboutSite')</h4>
                        <p>@lang('words.privacy')</p>
                    </div>
                    <ul class="footer-menu">
                        <li class="footer-menu__item"><a href="{{ route('index') }}" class="footer-menu__link footer_index">SIRDARYOLIKLAR24</a></li>
                        <li class="footer-menu__item"><a href="{{ route('about') }}" class="footer-menu__link">@lang('words.informationSite')</a></li>
                        <li class="footer-menu__item"><a href="{{ route('contact') }}" class="footer-menu__link">@lang('words.writeToUs')</a>
                        </li>
                        <li class="footer-menu__item"><a href="{{ route('advertising') }}" class="footer-menu__link">@lang('words.advertising')</a></li>
                       
                    </ul>
                    <ul class="footer-menu">
                        <li class="footer-menu__item"><a href="#" class="footer-menu__link">@lang('words.ourTeam')</a>
                        </li>
                         <li class="footer-menu__item"><a href="{{ route('contact') }}" class="footer-menu__link">@lang('words.sendNews')</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </main>

    <script src="js/main.js"></script>

</body>

</html>
