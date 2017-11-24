@extends('layouts.main')

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

<div class="col-md-9">
    <div class="col-md-12 offer-week clear">
        <h3>Добавление объявления</h3>
        <div class="gray-line">
            <div class="dark-line">
            </div>
        </div>
    </div>
    @if(!Auth::check())
    <div id="ads-register-form-container" class="col-md-12 new-ads clear">
        <div class="inner contact">
            <div class="contact-form">
                <form id="ads-register-form" method="post">
                    <div class="col-xs-12">
                            <div class="form-group">
                                <input type="email"
                                       name="email"
                                       id="email"
                                       required="required"
                                       class="form"
                                       placeholder="Введите Email" />
                            </div>
                            <div class="form-group">
                                <input type="password"
                                       name="password"
                                       required="required"
                                       class="form"
                                       placeholder="Пароль.." />
                            </div>
                    </div>
                    <div class="relative fullwidth col-xs-12">
                        <!--Send Button-->
                        <button type="button"
                                class="form-btn senddata"
                                data-link="/upload"
                                data-input="#ads-register-form">
                            Продолжить
                        </button>
                    </div>
                    <div class="clear"></div>
                </form>
            </div>
        </div>
    </div>
    @endif

    <div id="ads-create-form-container" class="col-md-12 new-ads clear" style="display: {{ Auth::check() ? 'block' : 'none' }}">
        <div class="inner contact">
            <!-- Form Area -->
            <div class="contact-form">

                <form id="ads-create-form" method="post" action="/upload" enctype="multipart/form-data">
                    <!--Left Inputs-->
                    <div class="col-xs-12 wow animated slideInLeft">
                        <div class="form-group">
                            <div class="form-selector">
                                <select name="catalog">
                                    <option value="">Выберите категорию</option>
                                    @foreach(App\Category::getMain() as $catalog)
                                    <option value="{{ $catalog->id }}">
                                        {{ $catalog->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text"
                                   name="title"
                                   required="required"
                                   class="form"
                                   placeholder="Заголовок.." />
                        </div>
                        <div class="form-group">
                            <textarea name="text"
                                      id="text"
                                      class="form textarea"
                                      placeholder="Текст.."></textarea>
                        </div>

                        <div id="file-uploader">
                            <div class="addfile">
                                <span class="add-file dz-message" data-toggle="tooltip" title="Add Photo"><i class="glyphicon glyphicon-plus"></i>
                                    <div class="fallback">
                                        <input name="photo" id="chose-photo" multiple="" type="file">
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--Bottom Submit-->
                    <div class="relative fullwidth col-xs-12">
                        <!--Send Button-->
                        <button id="create-ads" class="form-btn semibold">Добавить новое объявление</button>
                    </div>
                    <div class="clear"></div>
                </form>

            </div><!-- End Contact Form Area -->
        </div><!-- End Inner -->
    </div>
</div>

@push('scripts')
<script type="text/javascript" src="/js/ads.form.js"></script>
@endpush

@endsection