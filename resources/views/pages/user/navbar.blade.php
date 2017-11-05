<aside class="col-md-3">
    @if ($user->isCurrent())
    <nav class="navmenu navmenu-default" role="navigation">

        <ul class="nav navmenu-nav">
            <li class="active"><a href="#">Профиль</a><div class="triangle-menu"></div></li>
            <li><a href="#">Мои обьявления</a></li>
            <li><a href="#">Сообщения</a></li>
            <li><a href="#">Акции</a></li>
            <li><a href="#">Отзывы</a></li>
            <li><a href="#">Мой счет</a></li>
        </ul>
    </nav>
    @endif
    <div class="aside-banner">
        <img src="images/banner1.png" alt="">
    </div>
</aside>
