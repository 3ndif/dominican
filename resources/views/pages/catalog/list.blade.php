@extends('layouts.main',['contentClass' => 'catalog-offers'])

@include('pages.catalog.lease-3')

@section('offer-element-block')
<div class="offer-cart clear">
    <div class="col-md-3">
        <img src="/images/catalog-offers-1.png" alt="">
    </div>
    <div class="col-md-9">
        <a href="#"><h4>Д. Коттедж в стиле ХАЙ-ТЕК</h4></a>
        <p>Ультрасовременный коттедж! Стильный ХАЙ-ТЕ
        <ul>
            <li>- построен по технологии термодом,</li>
            <li>- участок 7 соток (возможность увеличения до 14 соток),</li>
        </ul>
        </p>
        <div class="company-name">
            <span>Название компании</span>
            <span class="star-rating">
                <span class="star-rating__wrap">
                    <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
                    <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
                    <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
                    <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
                    <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
                    <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
                    <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
                    <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
                    <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
                    <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
                </span>
            </span>
        </div>
        <div class="offer-tel">
            <table>
                <tr>
                    <td><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></td>
                    <td>
                        <span>+38(050)374-70-44</span>
                        <span>+38(096)677-35-53</span>
                        <span>+38(031)261-54-14</span>
                    </td>
                </tr>
            </table>
        </div>
        <div class="offer-adres">
            <table>
                <tr>
                    <td><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></td>
                    <td>г. Москва, ул. Никольская, дом 10, ТЦ "Никольская Плаза", второй этаж</td>
                </tr>
            </table>
        </div>
    </div>
</div><!--offer-cart-->
@endsection


@section('lease-top-element')
<div class="col-md-6">
    <img src="/images/catalog-offers.png" alt="">
    <a href="#"><h4>Д. Коттедж в стиле ХАЙ-ТЕК</h4></a>
    <p>Ультрасовременный коттедж! Стильный ХАЙ-ТЕ
    <ul>
        <li>- построен по технологии термодом,</li>
        <li>- участок 7 соток (возможность увеличения до 14 соток),</li>
    </ul>
</p>
<div class="company-name">
    <span>Название компании</span>
    <span class="star-rating">
        <span class="star-rating__wrap">
            <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
            <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
            <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
            <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
            <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
            <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
            <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
            <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
            <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
            <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
        </span>
    </span>
</div>
<div class="offer-tel">
    <table>
        <tr>
            <td><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></td>
            <td>
                <span>+38(050)374-70-44</span>
                <span>+38(096)677-35-53</span>
                <span>+38(031)261-54-14</span>
            </td>
        </tr>
    </table>
</div>
<div class="offer-adres">
    <table>
        <tr>
            <td><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></td>
            <td>г. Москва, ул. Никольская, дом 10, ТЦ "Никольская Плаза", второй этаж</td>
        </tr>
    </table>
</div>
</div>
@endsection

@section('content')
<aside class="col-md-3">
    <nav class="navmenu navmenu-default" role="navigation">
        <ul class="nav navmenu-nav">
            @foreach ($topCatalog->children as $subCategory)
                @if (Request::fullUrl() === url("/catalog/{$topCatalog->url}/{$subCategory->url}"))
                    <li class="active">
                        <a href="{{ url("/catalog/{$topCatalog->url}/{$subCategory->url}") }}">
                            {{ $subCategory->name }}
                        </a>
                        <div class="triangle-menu"></div>
                    </li>
                @else
                    <li>
                        <a href="{{ url("/catalog/{$topCatalog->url}/{$subCategory->url}") }}">
                            {{ $subCategory->name }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </nav>
    <div class="aside-banner">
        <img src="/images/banner1.png" alt="">
    </div>
    <div class="planned-activities">
        <h3>Планируемые мероприятия</h3>
        <img src="/images/Events.png" alt="">
        <a href="#"><h4>Бачата Фестиваль в Доминикане DR8 2016</h4></a>
        <p>МИР ТАНЦА приглашает в очередной БАЧАТА ТУР! Едем в V раз! Мы первая школа танцев, которая стала организовывать выезды на фестиваль аутентичной бачаты в Доминиканской Республике!</p>
    </div>
    <div class="photoreports">
        <h3>Фоторепортажи</h3>
        <img src="/images/photoreports.png" alt="">
        <a href="#"><h4>Conor McGregor</h4></a>
        <p>МИР ТАНЦА приглашает в очередной БАЧАТА ТУР! Едем в V раз!</p>
        <div class="mini-photo">
            <img src="/images/photoreports.png" alt="">
            <img src="/images/photoreports.png" alt="">
            <img src="/images/photoreports.png" alt="">
            <img src="/images/photoreports.png" alt="">
            <img src="/images/photoreports.png" alt="">
            <img src="/images/photoreports.png" alt="">
        </div>
        <a href="#" class="photoreports-btn">Больше фото</a>
    </div>
</aside>

<article class="col-md-9 offers-content">
    <div class="col-md-12 offer-week clear">
        <h3>{{ $catalog->name }}</h3>
        <div class="gray-line">
            <div class="dark-line">
            </div>
        </div>
        @yield('offer-element-block')
        @yield('offer-element-block')
    </div><!--offer-week-->

    <div class="lease-top clear col-md-12">
        @yield('lease-top-element')
        @yield('lease-top-element')
    </div><!--lease-top-->

    <div class="col-md-12 offer-week lease-bottom clear">
        @yield('offer-element-block')
        <nav aria-label="Page navigation">
            <ul>
                <li>
                    <a href="#" aria-label="Previous" class="activ">
                        <span aria-hidden="true" class="previous"><span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>Предыдущая</span>
                    </a>
                </li>
                <li><a href="#" class="activ">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#">10</a></li>
                <li><a href="#">11</a></li>
                <li><a href="#" class="activ">...</a></li>
                <li><a href="#">543</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true" class="next">Следующая<span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span></span>
                    </a>
                </li>
            </ul>
        </nav>
    </div><!--lease-bottom-->

    <div class="lease-3 clear col-md-12">
        @yield('lease-3')
        @yield('lease-3')
        @yield('lease-3')
    </div>

</article>

@endsection