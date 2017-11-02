<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>dominican</title>

    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <!-- Bootstrap -->
     <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/jquery.formstyler.css" rel="stylesheet">
    <link href="/css/jquery.formstyler.theme.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
         <div class="top-header">
          <a href="#" class="col-md-4 col-sm-7 col-xs-7">
            <table>
              <tr>
                <td><img src="images/logo-img.png" alt="" class="logo-img"></td>
                <td><img src="images/logo-text.png" alt="" class="logo-text">
                  <p>Здесь указан слоган – пока не знаю какой</p>
                </td>
              </tr>
            </table>
          </a>
           <div class="col-md-2 col-md-push-6 col-sm-5 col-xs-5"><button class="log-in"><i class="fa fa-sign-in" aria-hidden="true"></i>Войти</button></div>
          <div class="col-md-3 col-md-pull-2 col-sm-6 col-xs-6"><button class="ok-sign" type="button"  data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Подписаться на акции</button></div>
          <div class="col-md-3 col-md-pull-2 col-sm-6 col-xs-6"><button class="bullhorn"><i class="fa fa-bullhorn" aria-hidden="true"></i>Подать обьявление</button></div>

        </div><!--top-header-->
        <div class="slider">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <ol class="carousel-social">
              <li><img src="images/vk.png" alt=""></li>
              <li><img src="images/face.png" alt=""></li>
              <li><img src="images/ins.png" alt=""></li>
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
                <img src="images/slide.png" alt="">
              </div>
              <div class="item">
                <img src="images/slide1.png" alt="">
              </div>
              <div class="item">
                <img src="images/slide2.png" alt="">
              </div>
              <div class="item">
                <img src="images/slide.png" alt="">
              </div>
              <div class="item">
                <img src="images/slide1.png" alt="">
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

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

      </div><!--/row-->
    </div><!--/container-->



  </header>
  <section>
   <div class="container">
     <div class="row">
       <div class="col-md-9 offer-week clear">
         <h3>Предложение недели</h3>
         <div class="gray-line">
           <div class="dark-line">
           </div>
         </div>
         <div class="offer-cart clear">
           <div class="col-md-3">
             <img src="images/Offer-week.png" alt="">
           </div>
           <div class="col-md-9">
             <h4>Пляжный отдых с бесплатными водными развлечениями</h4>
             <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. </p>
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
     <div class="offer-cart clear">
       <div class="col-md-3">
         <img src="images/Offer-week.png" alt="">
       </div>
       <div class="col-md-9">
         <h4>Пляжный отдых с бесплатными водными развлечениями</h4>
         <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. </p>
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
 <div class="offer-cart clear">
   <div class="col-md-3">
     <img src="images/Offer-week.png" alt="">
   </div>
   <div class="col-md-9">
     <h4>Пляжный отдых с бесплатными водными развлечениями</h4>
     <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях.</p>
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
</div>
<div class="col-md-3 side-banner">
 <img src="images/banner.png" alt="">
 <img src="images/banner.png" alt="">
</div>


<div class="col-md-12 search-blok">
  <form class="form-inline">
    <div class="col-md-1">
      <h3>Я ищу:</h3>
    </div>
    <div class="col-md-3 col-sm-12 form-group">
     <select name="" id="">
       <option value="">Получать предложения</option>
       <option value="">Получать предложения1</option>
       <option value="">Получать предложения2</option>
       <option value="">Получать предложения3</option>
       <option value="">Получать предложения4</option>
       <option value="">Получать предложения5</option>
     </select>
   </div>
   <div class="col-md-8">
   <div class="input-group">
    <input type="text" class="form-control" placeholder="Введите текст для поиска">
    <span class="input-group-btn">
      <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
    </span>
  </div><!-- /input-group-->
  </div>
</form>
</div>


<div class="index-banner">
  <img src="images/index-banner.png" alt="">
</div>
<div class="slider-opinion clear">
  <h1>мнение</h1>
  <div id="carousel-example-opinion" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-opinion" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-opinion" data-slide-to="1"></li>
    <li data-target="#carousel-example-opinion" data-slide-to="2"></li>
    <li data-target="#carousel-example-opinion" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <div class="carousel-caption">
      <span class="opinion-name">Александр Иванов,</span><span class="opinion-compani">Название компании или что то еще</span>
      <div class="opinion-img clear">
        <img src="images/opinion.png" alt="">
      </div>
      <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях.</p>
      </div>
    </div>
     <div class="item">
      <div class="carousel-caption">
      <span class="opinion-name">Александр Иванов,</span><span class="opinion-compani">Название компании или что то еще</span>
      <div class="opinion-img clear">
        <img src="images/opinion.png" alt="">
      </div>
      <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях.</p>
      </div>
    </div>
     <div class="item">
      <div class="carousel-caption">
      <span class="opinion-name">Александр Иванов,</span><span class="opinion-compani">Название компании или что то еще</span>
      <div class="opinion-img clear">
        <img src="images/opinion.png" alt="">
      </div>
      <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях.</p>
      </div>
    </div>
     <div class="item">
      <div class="carousel-caption">
      <span class="opinion-name">Александр Иванов,</span><span class="opinion-compani">Название компании или что то еще</span>
      <div class="opinion-img clear">
        <img src="images/opinion.png" alt="">
      </div>
      <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях.</p>
      </div>
    </div>

  </div>
</div>
</div><!--slider-opinion-->








</div>
</div>












</section>
    <footer class="container">
            <div class="row">
              <div class="footer-form clear">
                <div class="col-md-12">
                  <h1>Присоединись к Dominican Life Style и получай самые выгодные предложения и новых клиентов</h1>
                </div>
                <form class="form-inline">
                  <div class="col-md-3 col-sm-6 form-group">
                    <input type="text" id="exampleInputEmail3" placeholder="Ваше имя"></div>
                    <div class="col-md-3 col-sm-6 form-group"><input type="email"  id="exampleInputEmail3" placeholder="Ваш e-mail"></div>
                    <div class="col-md-3 col-sm-6 form-group"><input type="tel"  id="exampleInputEmail3" placeholder="Ваш телефон"></div>
                    <div class="col-md-3 col-sm-6 form-group">
                      <select name="" id="">
                        <option value="">Получать предложения</option>
                        <option value="">Получать предложения1</option>
                        <option value="">Получать предложения2</option>
                        <option value="">Получать предложения3</option>
                        <option value="">Получать предложения4</option>
                        <option value="">Получать предложения5</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <button type="submit">Зарегистрироваться</button>
                    </div>
                  </form>
                </div>

                <div class="footer-bottom">
                  <span>© Dominican Life Style</span>
                </div>
              </div>
            </footer>










<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Выберите наиболее подходящую услугу</h4>
      </div>
      <div class="modal-body">
        <div class="maximum-pack">
          <div class="pack-hed">
            <h1>Maximum</h1>
            <h1>Pack</h1>
          </div>
          <div class="pack-body">
            <table>
              <tr>
                <td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
                <td>Первое преимущество</td>
              </tr>
              <tr>
                <td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
                <td>Второе преимущество</td>
              </tr>
              <tr>
                <td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
                <td>Третье преимущество</td>
              </tr>
              <tr>
                <td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
                <td>Четвертое преимущество</td>
              </tr>
              <tr>
                <td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
                <td>Пятое</td>
              </tr>
              <tr>
                <td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
                <td>И т.д.</td>
              </tr>
            </table>
          </div>
          <div class="pack-price">
            <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
            <p>25</p>
          </div>
          <a href="#" class="pack-btn">Improve</a>
        </div>
        <div class="professional-pack">
          <div class="pack-hed">
            <h1>Professional</h1>
            <h1>Pack</h1>
          </div>
          <div class="pack-body">
             <table>
              <tr>
                <td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
                <td>Первое преимущество</td>
              </tr>
              <tr>
                <td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
                <td>Второе преимущество</td>
              </tr>
              <tr>
                <td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
                <td>Третье преимущество</td>
              </tr>
              <tr>
                <td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
                <td>Четвертое преимущество</td>
              </tr>
              <tr>
                <td><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></td>
                <td>Пятое</td>
              </tr>
              <tr>
                <td><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></td>
                <td>И т.д.</td>
              </tr>
            </table>
          </div>
          <div class="pack-price">
            <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
            <p>25</p>
          </div>
          <a href="#" class="pack-btn">Improve</a>
          </div>

        <div class="standart-pack">
          <div class="pack-hed">
            <h1>Standart</h1>
            <h1>Pack</h1>
          </div>
          <div class="pack-body">
             <table>
              <tr>
                <td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
                <td>Первое преимущество</td>
              </tr>
              <tr>
                <td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
                <td>Второе преимущество</td>
              </tr>
              <tr>
                <td><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></td>
                <td>Третье преимущество</td>
              </tr>
              <tr>
                <td><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></td>
                <td>Четвертое преимущество</td>
              </tr>
              <tr>
                <td><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></td>
                <td>Пятое</td>
              </tr>
              <tr>
                <td><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></td>
                <td>И т.д.</td>
              </tr>
            </table>
          </div>
          <div class="pack-price">
            <span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
            <p>25</p>
          </div>
          <a href="#" class="pack-btn">Improve</a>
          </div>
        </div>
      </div><!--/modal-body-->
    </div><!-- /.modal-content -->
  </div><!--/modal-dialog modal-lg-->
</div><!--modal fade bs-example-modal-lg-->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/jquery.formstyler.min.js"></script>
    <script type="text/javascript" src="js/form.js"></script>
    <!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->

  </body>
</html>