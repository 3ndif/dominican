<?php
use App\Category;
?>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        @foreach (Category::getMain() as $category)
            @if ($category->children->count() === 0)
                <li class="{{ (Request::segment(1) === $category->slug) ? 'active' : ''}}">
                    <a href="{{ route("catalog",[
                        'slug1' => $category->slug
                    ]) }}">{{ $category->name }}</a>
                </li>
            @else

                <li class="dropdown">
                    <a href="{{ route("catalog",[
                        'slug1' => $category->slug
                    ]) }}"
                       class="dropdown-toggle disabled"
                       data-toggle="dropdown"
                       role="button"
                       aria-haspopup="true"
                       aria-expanded="false">
                        {{ $category->name }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($category->children as $subCategory)
                        <li><a href="{{ route("catalog",[
                            'slug1' => $category->slug,
                            'slug2' => $subCategory->slug
                        ]) }}">
                                {{ $subCategory->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>

            @endif
        @endforeach
<!--        <li class="active"><a href="#"><span class="sr-only">(current)</span>Путешествие</a></li>
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
        <li><a href="#">Образование</a></li>-->
    </ul>

</div>