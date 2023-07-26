<style>
    .popular-news__date i{
        font-size: 12px;
        margin-left: 10px;
    }
    .popular-news__date i b{
        margin-left: 5px;
    }
</style>


<div class="popular-news">
    <div class="popular-news-wrapper">
        <h4 class="popular-news__title">@lang('words.mostPopular')</h4>
        <ul class="popular-news__list">
            @foreach ($popularPosts as $post)
            <li class="popular-news__item">
                <a href="{{ route('postDetail', $post->slug) }}">
                    <p class="popular-news__description">{{ $post['description_'.\App::getLocale()] }}</p>
                    <span class="popular-news__date">{{ $post->created_at->format('H:i / d.m.Y') }}  <i class="far fa-eye"><b>{{$post->view}}</b></i></span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    <a href="{{ $ads->url_sidebar }}" class="ads_sidebar" target="_blank">
        <img src="/site/images/ads/{{ $ads->img_sidebar }}" alt="" class="ads_img">
        <h4>{{ $ads->title_sidebar }}</h4>
        {{-- <marquee behavior="scroll" direction="left" scrollamount="27">{{ $ads->title_top }}</marquee> --}}
    </a>
</div>