<style>
    .posts__date i {
        font-size: 14px;
        margin-left: 10px;
    }

    .posts__date i b {
        margin-left: 5px;
    }
    .notification__link{
        color: #fff;
    }

</style>

<section class="posts">
    <div class="container">
        <ul class="posts__list basic-flex">
            @foreach ($specialPosts as $specialPost)
                <li class="posts__item">
                    <a href="{{ route('postDetail', $specialPost->slug) }}">
                        <img src="/site/images/posts/{{ $specialPost->image }}" width="580" height="285" alt="Image"
                            class="posts__img">
                        <h2 class="posts__title">{{ $specialPost['title_' . \App::getLocale()] }}</h2>
                        <span class="posts__date">{{ $specialPost->created_at->format('H:i / d.m.Y') }} <i class="far fa-eye"><b>{{$specialPost->view}}</b></i></span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>

<div class="container">
    <div class="notification basic-flex">
        <div class="notification__text basic-flex">
            <h3>@lang('words.notifaction')</h3>
        </div>
        <button type="button" class="notification__button btn">
            <a href="https://t.me/It_Live_Guliston" class="notification__link">@lang('words.enableNotification')</a>
        </button>
    </div>
</div>
