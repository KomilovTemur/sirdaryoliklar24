@extends('layouts.site')
@section('title')
    Reklama -
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
        margin-top: 25px;
        font-size: 18px;
        line-height: 32px;
        font-weight: 500;
        margin-bottom: 150px; 
    }
    .about_site-text  span{
        color: rgb(50, 42, 207);
    }
</style>

@section('content')
   <div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="about_site">@lang('words.advertising')</h1>
            
            <div class="col-6 about_site-text">
                <h3>@lang('words.callUs'):</h3>
                <span> +998 99 000 00 00</span>
                <p>@lang('words.advertisingMail') <span>@SIRDARYOLIKLAR24.uz</span>    </p>
            </p>
            </div>
        </div>
    </div>
   </div>
@endsection