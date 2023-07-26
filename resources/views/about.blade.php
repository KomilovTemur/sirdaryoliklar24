@extends('layouts.site')
@section('title')
    Sayt haqida -
@endsection

<style>
    .about_site {
        text-align: center;
    }
    .about_site-img{
        width: 65%;
        height: 70%;
        margin: 2% auto;
    }
    .about_site-text{
        width: 80%;
        margin: 0 auto;
    }
    .about_site-text p{
        text-align: justify;
        margin-top: 55px;
        font-size: 18px;
        line-height: 32px;
        font-weight: 500;
        margin-bottom: 150px; 
    }
    .about_site-text p span{
        color: rgb(50, 42, 207);
    }
</style>

@section('content')
   <div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="about_site">@lang('words.aboutSite')</h1>
            <hr>
            <img class="about_site-img" src="/img/foto_outSite_inMy-phone.jpg" alt="">
            <div class="col-6 about_site-text">
               <p>@lang('words.aboutSite1')<br> <br>
               @lang('words.aboutSite2') <br> <br> 
                @lang('words.aboutSite3')<br> <br>
                @lang('words.aboutSite4') <br> <span> +998 99 000 00 00</span>  (@lang('words.aboutSite5')) <br> @lang('words.aboutSite6'): info@SIRDARYOLIKLAR24.uz
                <br> <br>
                @lang('words.aboutSite7'): <br><span> +998 99 000 00 00</span>  (@lang('words.aboutSite8')) <br> @lang('words.aboutSite6'): reklama@SIRDARYOLIKLAR24.uz
            </p>
            </div>
        </div>
    </div>
   </div>
@endsection