LoginForm = new function(){
    this.container = '#login-form';

    this.clear = function(){
        $(this.container).find('.help-block').remove();
        $('.form-group').removeClass('has-error');
    }
}


$(document).ready(function(){

    $(LoginForm.container).on('submit',function(e){
        e.preventDefault();

        var $this = $(this),
            link = $this.attr('data-link'),
            container = LoginForm.container,

            form = $(container)[0],
            form_data = new FormData(form);


        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: link,
            data: form_data,
            processData: false,
            contentType: false,
            cache: false,
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

                var response = e.responseJSON,
                    errors = response.errors;
                    console.log(errors)

                LoginForm.clear()
                Object.keys(errors).map(function(attribute, index) {

                    var
                        msgError = errors[attribute][0];

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
})