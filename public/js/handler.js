Handler = new function(){

    this.handlers = {}; // Массив зарегистрированных обработчиков команд
    this.handleMessage = function (msg) {
        var command = msg.type; // Наименование команды для испонения
        var data = msg.data; // Данные, отправленные сервером для команды

        if (this.handlers[command]) {
            this.handlers[command](data);
        }
    };

    /**
     * Зарегистрировать обработчик команды, отправленной сервером
     * клиенту после обработки данных
     * @param string name
     * @param function action
     */
    this.register = function (name, action) {
        this.handlers[name] = action;
    };
}

Handler.register('refreshpage', function () {
    location.reload();
});

Handler.register('show_modal_password',function(){
    RegisterForm.clear()
    $(RegisterForm.passwordContainer).modal()
});

Handler.register('user_logout',function(){
    window.location.href = '/logout';
});