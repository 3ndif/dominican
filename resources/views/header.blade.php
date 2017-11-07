@include('auth.login')

<div class="container">
    <div class="row">
        <div class="top-header">
            <a href="#" class="col-md-4 col-sm-7 col-xs-7">
                <table>
                    <tr>
                        <td><img src="/images/logo-img.png" alt="" class="logo-img"></td>
                        <td><img src="/images/logo-text.png" alt="" class="logo-text">
                            <p>Здесь указан слоган – пока не знаю какой</p>
                        </td>
                    </tr>
                </table>
            </a>
            @if (Auth::check())
            <div class="col-md-2 col-md-push-6 col-sm-5 col-xs-5">
                <button class="log-in" id="log-out"><i class="fa fa-sign-in" aria-hidden="true"></i>Выйти</button>
            </div>
            @else
            <div class="col-md-2 col-md-push-6 col-sm-5 col-xs-5">
                <button class="log-in" id="log-in" data-toggle="modal" data-target="#login-modal">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>Войти
                </button>
            </div>
            @endif
            <div class="col-md-3 col-md-pull-2 col-sm-6 col-xs-6"><button class="ok-sign" type="button"  data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Подписаться на акции</button></div>
            <div class="col-md-3 col-md-pull-2 col-sm-6 col-xs-6"><button class="bullhorn"><i class="fa fa-bullhorn" aria-hidden="true"></i>Подать обьявление</button></div>

        </div><!--top-header-->
        <div class="slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <ol class="carousel-social">
                    <li><img src="/images/vk.png" alt=""></li>
                    <li><img src="/images/face.png" alt=""></li>
                    <li><img src="/images/ins.png" alt=""></li>
                </ol>

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/images/slide.png" alt="">
                    </div>
                    <div class="item">
                        <img src="/images/slide1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="/images/slide2.png" alt="">
                    </div>
                    <div class="item">
                        <img src="/images/slide.png" alt="">
                    </div>
                    <div class="item">
                        <img src="/images/slide1.png" alt="">
                    </div>
                </div>

            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                @include('navbar')
                <!-- Collect the nav links, forms, and other content for toggling -->
<!--                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"><span class="sr-only">(current)</span>Путешествие</a></li>
                        <li><a href="#">Развлечения</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Красота и здоровье</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Авто</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Авто</a></li>
                        <li><a href="#">Недвижимость</a></li>
                        <li><a href="#">Услуги для бизнеса</a></li>
                        <li><a href="#">Услуги населению</a></li>
                        <li><a href="#">Образование</a></li>
                    </ul>

                </div> /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

    </div><!--/row-->
</div><!--/container-->