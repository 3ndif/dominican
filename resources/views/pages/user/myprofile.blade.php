@extends('layouts.main',['contentclass' => 'personal-area'])

@include('pages.catalog.lease-3')

@section('content')

@include('pages.user.navbar')

<article class="col-md-9 offers-content">
    <div class="col-md-12 personal-profile clear">

        <h3>Профиль</h3>
        <a href="#" class="edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Редактировать</a>
        <div class="gray-line">
            <div class="dark-line">
            </div><!--dark-line-->
        </div><!--gray-line-->
        <div class="col-md-4">
            <img src="images/personal-area.png" alt="">
        </div>
        <div class="col-md-8">
            @include('pages.user.personal_info')
            <span class="counter clear">128 дней с Dominican Life style</span>
            <div class="submit-advertisement col-md-6"><a href="#"><i class="fa fa-bullhorn" aria-hidden="true"></i>Подать обьявление</a></div>
            <div class="advertising-site col-md-6"><a href="#"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i>реклама на сайте</a></div>
        </div>
    </div><!--offer-week clear-->


    <div class="lease-3 clear col-md-12">
        @yield('lease-3')
        @yield('lease-3')
        @yield('lease-3')
    </div>
</article>

@endsection