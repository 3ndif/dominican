@section('search-block')

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

@endsection