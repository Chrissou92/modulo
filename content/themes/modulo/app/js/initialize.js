var app  = {
    init: function() {
        console.log('init');

        $(".navbar-burger").click(function() {

            $('.navbar-burger').toggleClass('is-active');
            $('.navbar-menu').toggleClass('is-active');
        });
    }
}

$(app.init);
