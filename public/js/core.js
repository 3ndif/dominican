
$.ajaxSetup({
    headers: {'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')}
});

$(document).ready(function () {

    $('body').on('click','.senddata',function(e){

        var $this = $(this);
        var link = $this.attr('href');
        if (link === undefined || link == '#') link = $this.attr('data-link');
        if (link === undefined) link = document.location.href;

        var inputs_container = $this.attr('data-input');
        if (!$this.hasClass('disabled')) {
            if ($this.hasClass('senddata')) {
                // Запретим кликать повторно на нашу кнопочку, пока идет отправка данных
                $this.attr('disabled', 'disabled').addClass('disabled');
                setTimeout(function(){
                    $this.removeClass('disabled').attr('disabled',null);
                },5000);
                
                if (inputs_container) {
                    var form = $(inputs_container)[0],
                        data = new FormData(form);

                    Handler.sendData(link, data, inputs_container, $this);
                }
            }
        }

        return false;
    })

    $.fn.serializeObject = function () {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function () {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };

    $('#log-out').on('click', function () {
        Handler.handleMessage({
            type: 'user_logout',
            data: ''
        });
    })

})