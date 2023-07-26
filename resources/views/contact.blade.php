@extends('layouts.site')
@section('title')
    Aloqa sahifasi -
@endsection

<style>
    .text-danger{
        color: red;
    }
</style>

@section('content')
    <section class="contact-details">
        <div class="container">
            <div class="contact-details__wrapper basic-flex">
                <div class="form__wrapper">
                    <h3 class="form__wrapper-title">@lang('words.writeToUs')
                    </h3>
                    <form method="POST" action="{{ route('admin.addContacts.store') }}">
                        @csrf
                        <div class="form__top">
                            <label><input type="text" name="name" placeholder="@lang('words.userName')"  >  
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror</label>
                            <label><input type="email" name="email" placeholder="@lang('words.userEmail')" >
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror</label>
                            <label><input type="text" name="phone" placeholder="@lang('words.userPhone')" >
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror</label>
                            <label><input type="text" name="topic" placeholder="@lang('words.theme')" >
                                @error('topic')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror</label>
                            <textarea class="contact-tetxarea" name="text" placeholder="@lang('words.text')" ></textarea>
                            @error('text')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                            <button type="submit" class="btn send-btn">@lang('words.send')</button>
                    </form>
                </div>
                <div class="business__card">
                    <h3 class="card__title">SIRDARYOLIKLAR24</h3>
                    <div class="card__item basic-flex">
                        <span card__item-title>@lang('words.emails')</span>
                        <a class="email__link" href="mailto:info@namanganliklar24.uz">info@sirdaryoliklar24.uz</a>
                    </div>
                    <div class="card__item basic-flex">
                        <span card__item-title>@lang('words.socialNetwork')</span>
                        <div class="card__social-items basic-flex">
                            <a href="#" class="social__item"></a>
                            <a href="#" class="social__item"></a>
                            <a href="#" class="social__item"></a>
                        </div>
                    </div>
                    <div class="card__item basic-flex">
                        <span card__item-title>@lang('words.tgg')</span>
                        <a class="card-join-telegram basic-flex" href="https://t.me/It_Live_Guliston" target="_blank">@lang('words.tgme')</a>
                    </div>
                    <div class="card__item basic-flex">
                        <span card__item-title>@lang('words.mobileApp')</span>
                        <div class="card__apps-wrapper basic-flex">
                            <a href="#"><img src="/img/googleplay-wh.png" alt="GooglePlay"></a>
                            <a href="#"><img src="/img/appstore-white.png" alt="AppStore"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
