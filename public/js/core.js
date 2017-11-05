
$.ajaxSetup({
    headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
});

$(document).ready(function(){

   $('#log-out').on('click',function(){
        Handler.handleMessage({
            type: 'user_logout',
            data: ''
        });
    })
})