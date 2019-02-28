jQuery(document).ready(function($){
	//Initiat WOW JS
	new WOW().init();
    $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 9000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
   
    
});
    $('#simplenews-block-form-4 .form-submit').text('Gửi');
    $("#menu-373-1 > a,#menu-579-1 > a,#menu-710-1 > a,#menu-715-1 > a,#menu-738-1 > a").removeAttr("href");
    

});

jQuery(document).ready(function($){
    $('.views-field-field-trang-thai .field-content').addClass(function() {
        return this.innerHTML.length > 8 ? 'chua-giao' : '';
    });
});