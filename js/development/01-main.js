//Init AOS library
AOS.init();

$(function () {
    console.log('JS loaded');


    var loading = $('.globalcover');
    $(document).ajaxStart(function () {
        $('html, body').css("cursor", "wait");
        loading.fadeIn('fast');
    }).ajaxStop(function () {
        loading.hide();
        $('html, body').css("cursor", "auto");
    });

    var nonce = $('meta[name="csrf-token"]').attr('content');
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': nonce } });
});