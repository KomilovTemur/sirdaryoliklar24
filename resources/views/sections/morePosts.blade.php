@extends('layouts.site')

<style>
    .load-more-btn a {
        color: #fff;
    }

    .news__date i{
        font-size: 12px;
        margin-left: 10px;
    }
    .news__date i b{
        margin-left: 5px;
    }
</style>

@section('content')
    <section class="news">
        <div class="container">
            <div class="news__wrapper basic-flex">
                <div class="column-news">
                    <h2 class="news__title">@lang('words.lastPost')</h2>

                    <ul class="news__list basic-flex">
                        @foreach ($morePosts as $lastPost)
                            <li class="news__item">
                                <a href="{{ route('postDetail', $lastPost->slug) }}" class="basic-flex news__link">
                                    <div class="news-image-wrapper"><img src="/site/images/posts/{{ $lastPost->image }}"
                                            alt="Bottom Img"></div>
                                    <div class="news-box basic-flex">
                                        <h4 class="news__title">{{ $lastPost['title_' . \App::getLocale()] }}</h4>
                                        <p class="news__description"> {{ $lastPost['description_' . \App::getLocale()] }}
                                        </p>
                                        <span
                                            class="news__date basic-flex">{{ $lastPost->created_at->format('H:i / d.m.Y') }} <i class="far fa-eye"><b>{{$lastPost->view}}</b></i></span>
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


    <div class="apps-block container basic-flex">
        <div class="apps-block__image"></div>
        <div class="apps-block__content">
            <h4>@lang('words.latestNews')</h4>
            <p>@lang('words.downloadPhone')</p>
        </div>
        <div class="apps-block__links basic-flex">
            <div class="links__item">
                <a href="https://play.google.com/store/apps?hl=ru&gl=US&pli=1" target="_blank"><img src="img/googleplay.png"
                        alt="googleplay"></a>
            </div>
            <div class="links__item">
                <a href="https://play.google.com/store/apps?hl=ru&gl=US&pli=1" target="_blank"><img src="img/appstore.png"
                        alt="googleplay"></a>
            </div>
        </div>
    </div>
@endsection
