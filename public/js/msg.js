Message = new function(){

    this.clear = function(){
        $('form').find('.help-block').remove();
        $('.form-group').removeClass('has-error');
    }
}

$.ajaxSetup({
    headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
});

$(document).ready(function(){

    $('.senddata-form').on('submit',function(e){
        e.preventDefault();

        var $this = $(this),
            link = $this.attr('data-link'),
            form_container = $this.closest('form'),

            form = $(form_container)[0],
            form_data = new FormData(form);

            if (($("#myModalPassword").data('bs.modal') || {}).isShown){
                var password = $("#myModalPassword").find(':input[name="password"]').val()
                form_data.append('password', password);

                link = 'register-complete';
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
                Message.clear()
                $('#myModalPassword').modal()
            },
            error: function (e) {
                if (e.status != 422) return

                var response = e.responseJSON,
                    errors = response.errors;

                Object.keys(errors).map(function(attribute, index) {

                    var
                        msgError = errors[attribute][0],
                        container = form_container;

                    if (attribute == 'password'){
                        container = $('#myModalPassword')
                    }

                    var
                        input = container.find(':input[name="'+attribute+'"]'),
                        parentDivGroup = input.closest('.form-group');

                    parentDivGroup.find('.help-block').remove();

                    parentDivGroup.addClass('has-error');
                    input.after('<span class="help-block">'+msgError+'</span>');

                 });
            }
        });

    })

    $('.senddata-password').on('click',function(){
        $( ".senddata-form" ).trigger("submit");
    })
})