$(function () {
    $('.img-code,.erCode').bind('click',function(){
        $('.pop').show();
        return false;
    });
    $('body').bind('click',function(){
        $('.pop').hide();
    })
});