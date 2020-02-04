(function(){
    $('.form_prevent_multiple_submit').on('submit', function(){
        $('.form_prevent_multiple_submit').attr('disabled' , true);
    })
})();