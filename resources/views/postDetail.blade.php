@extends('layouts.site')

@section('title')
    Maqolalar sahifasi -
@endsection

<style>
    .article__date i, .posts__date i{
        font-size: 12px;
        margin-left: 10px;
    }
    .article__date i b, .posts__date i b{
        margin-left: 7px;
    }

</style>

@section('content')
    <section class="article">
        <div class="container">
            <div class="news__wrapper basic-flex">
                <div class="article__wrapper">
                    <h2 class="article__title">{{ $post['title_'.\App::getLocale()] }}</h2>
                    <span class="article__date basic-flex">{{ $post->created_at->format('H:i / d.m.Y') }}  <i class="far fa-eye"><b>{{$post->view}}</b></i></span>
                    <img src="/site/images/posts/{{ $post->image }}" alt="Img">
                    
                    {!! $post['body_'.\App::getLocale()] !!}

                    <div class="hashtags basic-flex">
                     @foreach ($post->tags as $tag)
                     <a href="#">#{{ $tag['name_'.\App::getLocale()] }}</a>
                     @endforeach
                    </div>
                </div>
                
              @include('sections.popularPosts')

                <div class="related-news">
                    <h3 class="related-news__title">@lang('words.newsTheme')
                    </h3>
                    <div class="related-posts basic-flex">
                    @foreach ($otherPosts as $otherPost)
                    <div class="posts__item">
                        <a href="{{ route('postDetail', $otherPost->slug) }}">
                            <img src="/site/images/posts/{{ $otherPost->image }}" alt="Image" class="posts__img">
                            <h2 class="posts__title">{{ $otherPost['title_'.\App::getLocale()] }}</h2>
                            <span class="posts__date">{{ $otherPost->created_at->format('H:i / d.m.Y') }}  <i class="far fa-eye"><b>{{$post->view}}</b></i></span>
                        </a>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
