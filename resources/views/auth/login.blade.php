<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <h1>Авторизация</h1><br>
            <form id="login-form" method="post" data-link="/login">
                <div class="form-group">
                    <input type="text"
                           class="form-control"
                           name="email"
                           placeholder="email">
                </div>
                <div class="form-group">
                    <input type="password"
                           class="form-control"
                           name="password"
                           placeholder="Пароль">
                </div>
                <input type="submit" name="login" class="login loginmodal-submit" value="Войти">
            </form>

            <div class="login-help">
                <a href="javascript:void(0)">Регистрация</a> - <a href="javascript:void(0)">Забыли пароль</a>
            </div>
        </div>
    </div>
</div>