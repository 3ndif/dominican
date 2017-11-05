RegisterForm = new function(){
    this.container = '#register-form';
    this.passwordContainer = '#myModalPassword';

    this.clear = function(){
        $(this.container).find('.help-block').remove();
        $('.form-group').removeClass('has-error');
    }
}


$(document).ready(function(){

    $(RegisterForm.container).on('submit',function(e){
        e.preventDefault();

        var $this = $(this),
            link = $this.attr('data-link'),
            container = RegisterForm.container,
            passwordContainer = RegisterForm.passwordContainer,

            form = $(container)[0],
            form_data = new FormData(form);

            if (($(passwordContainer).data('bs.modal') || {}).isShown){
                var password = $(passwordContainer).find(':input[name="password"]').val()
                form_data.append('password', password);
            }

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: link,
            data: form_data,
            processData: false,
            contentType: false,
            cache: false,
//            timeout: 600000,
            success: function (data) {
                data.map(function (elem) {
                    try {
                        Handler.handleMessage(elem);
                    } catch (e) {
                        console.log('error in handling message', e);
                    }
                });
            },
            error: function (e) {
                if (e.status != 422) return

                var response = e.responseJSON,
                    errors = response.errors;
                    console.log(errors)

                RegisterForm.clear()
                Object.keys(errors).map(function(attribute, index) {

                    var
                        msgError = errors[attribute][0];

                    if (attribute == 'password'){
                        container = $(passwordContainer)
                    }

                    var
                        input = $(container).find(':input[name="'+attribute+'"]'),
                        parentDivGroup = input.closest('.form-group');

                    parentDivGroup.find('.help-block').remove();

                    parentDivGroup.addClass('has-error');
                    input.after('<span class="help-block">'+msgError+'</span>');

                 });
            }
        });

    })

    $('.senddata-password').on('click',function(){
        $( RegisterForm.container ).trigger("submit");
    })
})