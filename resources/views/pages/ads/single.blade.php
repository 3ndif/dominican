@extends('layouts.main',['contentClass' => 'catalog-offers'])

@section('content')

<aside class="col-md-3">
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
    <div class="col-md-12 ads clear">
        <h3>Название обьявления</h3>
        <div class="gray-line">
            <div class="dark-line">
            </div><!--dark-line-->
        </div><!--gray-line-->
        <div class="col-md-4 ads-img">
            <div class="flexslider1">

                <div class="flex-viewport">
                    <ul class="slides" >
                        @foreach($ads->images()->get() as $img)
                            <li data-thumb="{{ $img->getAdsImg() }}" class="clone" aria-hidden="true">
                                <img src="{{ $img->getAdsImg() }}" draggable="false">
                            </li>
                        @endforeach
                        <li data-thumb="/images/btn-photo.png" class="clone" aria-hidden="true">
                            <a href="#"><img src="/images/btn-photo.png" alt=""> </a>
                        </li>

                    </ul>

                </div><!--flex-viewport-->



            </div><!--flexslider1-->
        </div>
        <div class="col-md-8">
            <div class="offer-adres">
                <table>
                    <tbody><tr>
                            <td><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></td>
                            <td><a href="#">г. Москва, ул. Никольская, дом 10, ТЦ "Никольская Плаза", второй этаж</a></td>
                        </tr>
                    </tbody></table>
            </div>
            <div class="offer-adres">
                <table>
                    <tbody><tr>
                            <td><span class="glyphicon glyphicon-time" aria-hidden="true"></span></td>
                            <td>Сегодня работает<span class="ads-time">с 12:00 до 00:00</span></td>
                        </tr>
                    </tbody></table>
            </div>
            <div class="offer-adres">
                <table>
                    <tbody><tr>
                            <td>Тип:</td>
                            <td class="ads-type">Бар, Клуб</td>
                        </tr>
                    </tbody></table>
            </div>
            <div class="offer-adres">
                <table>
                    <tbody><tr>
                            <td>Статус:</td>
                            <td class="ads-type">активен до 13.03.2016</td>
                        </tr>
                    </tbody></table>
            </div>
            <div class="ads-content">
                <p><span>Описание:</span>
                {{ $ads->text }}
                </p>
            </div>
            <div class="btn-top col-md-6"><a href="#"><span class="glyphicon glyphicon-open" aria-hidden="true"></span>Поднять в top</a></div>
            <div class="col-md-6 remove-ad">
                <a href="#"><span class=" glyphicon glyphicon-remove-sign" aria-hidden="true"></span>снять обьявление</a>
            </div>
            <div class="offer-adres">
                <table>
                    <tbody>
                        <tr>
                            <td>Мнения:</td>
                            <td><a href="#">4 отзывы</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</article>

@push('scripts')
<script type="text/javascript">
// Can also be used with $(document).ready()
$(window).load(function () {
    $('.flexslider1').flexslider({
        animation: "slide",
        controlNav: "thumbnails",
    });
});
</script>
@endpush

@endsection