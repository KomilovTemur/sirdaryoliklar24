@extends('layouts.site')
@section('title')
    Qidiruv - 
@endsection


<style>
    .news__title{
        font-weight: 500;
    }
    .news__title span {
        font-size: 25px !important;
        margin-right: 10px;
        font-weight: 900;
    }
    .news__title b {
        font-size: 23px !important;
        margin-left: 7px;
        font-weight: 900;
    }
    .error{
        text-align: center;
        font-size: 30px;
        margin-top: 70px;
    }
    .error span{
        font-size: 30px;
        color: rgb(26, 150, 223);
    }
    .error_img{
        margin: 0 auto;
        text-align: center;
        width: 80%;
        height: 50%;
    }
    .error_btn{
        color: #fff;
        border: none;
    }
</style>


@section('content')
    <section class="news">
        <div class="container">
            <div class="news__wrapper basic-flex">
                <div class="column-news">
                    @if(count($posts) > 0)
                    <h2 class="news__title"><span>{{ $key }}</span> so'zi bo'yicha qidiruv natijalar:  <b>{{ count($posts) }}</b></h2>
                    @else
                    <img class="error_img" src="/img/404-error.jpg" alt="404" width="50px"> 
                    <h1 class="error">Kechirasiz, xatolik yuz berdi,  <span>{{ $key }}</span>  Sahifasi <br> topilmadi</h1>
                    <button type="button" class="btn load-more-btn"><a href="{{ route('index') }}" class="error_btn">@lang('words.home')</a></button>
                    @endif
                    <ul class="news__list basic-flex">
                        @foreach ($posts as $post)
                        <li class="news__item">
                            <a href="{{ route('postDetail', $post->slug) }}" class="basic-flex news__link">
                                <div class="news-image-wrapper"><img src="/site/images/posts/{{ $post->image }}"
                                        alt="Bottom Img"></div>
                                <div class="news-box basic-flex">
                                    <h4 class="news__title">{{ $post['title_' . \App::getLocale()] }}</h4>
                                    <p class="news__description">{!! $post['description_' . \App::getLocale()] !!}</p>
                                    <span
                                        class="news__date basic-flex">{{ $post->created_at->format('H:i / d.m.Y') }}</span>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
              @include('sections.popularPosts')
            </div>
        </div>
    </section>
@endsection
