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

    /**
     * Вывод ошибков для формы
     */
    this.showFormErrors = function(data){
        console.log(data)
        if (typeof data.response.errors === undefined || data.response.errors.length == 0) return

        var
            reponse = data.response,
            form_container = data.form_container,
            errors = reponse.errors;

        this.clearInputsMessages(form_container);

        Object.keys(errors).map(function(attribute, index) {
            var msg = errors[attribute][0],
                data = {
                    msg: msg,
                    attribute: attribute,
                    form_container: form_container
                }

            try {
                Handler.handleMessage({
                    type: 'error_input_form',
                    data: data
                });
            } catch (e) {
                console.log('error in handling message', e);
            }
        });
    }

    this.clearInputsMessages = function(input_container){
        $(input_container).find('.help-block').remove();
        $(input_container).find('.form-group').removeClass('has-error');
    }

    /**
     * Отправить данные на определенный URL и обработать ответ
     * @param string url
     * @param object mass
     * @param object input_container (необязательно) контейнер, в котором необходимо будет очистить все инпуты от введенных данных
     */
    this.sendData = function (url, mass, input_container, input) {

        var _this = this;
        if (mass == undefined) mass = {};
        mass.json = 'true';

        // Отошлем массив и посмотрим ответ - нормально все или нет.
        $.ajax({
            type: "POST",
            url: url,
            data: mass,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function (data) {
                data.map(function (elem) {
                    try {
                        _this.handleMessage.call(_this, elem);
                    } catch (e) {
                        console.log('error in handling message', e);
                    }
                });

                if (typeof(input) !== 'undefined') {
                    // Включим обратно нашу кнопочку и дадим возможность кликать на неё
                    input.removeClass('disabled').attr('disabled', null);
                }

                _this.clearInputsMessages(input_container)
            },
            error: function (data, status, e) {
                // Включим обратно нашу кнопочку и дадим возможность кликать на неё
                if (typeof(input) !== 'undefined') {
                    input.removeClass('disabled').attr('disabled', null);
                }

                _this.showFormErrors({
                    response: data.responseJSON,
                    form_container: input_container
                });

                console.log(status);
            }
        });
    };
}

Handler.register('error_input_form',function(data){
    console.log(data)

    var
        container = data.form_container,
        input = $(container).find(':input[name="'+data.attribute+'"]'),
        parentDivGroup = input.closest('.form-group');

    parentDivGroup.addClass('has-error');
    input.after('<span class="help-block">'+data.msg+'</span>');
});

Handler.register('refreshpage', function () {
    location.reload();
});

Handler.register('redirect',function(data){
    window.location.href = data;
})

Handler.register('error_form_message',function(){

});

Handler.register('show_modal_password',function(){
    RegisterForm.clear()
    $(RegisterForm.passwordContainer).modal()
});

Handler.register('user_logout',function(){
    window.location.href = '/logout';
});

Handler.register('show_ads_create_form_container',function(){
    var container = '#ads-create-form-container',
        register_container = '#ads-register-form-container';

    $(container).css({display: 'block'});
    $("html, body").animate({ scrollTop: $(container).offset().top }, 1000);

    $(register_container).addClass('disabledContent');
})