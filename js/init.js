var app = {
    init: function() {
        // Fix for IE10 and older Windows Phone 8
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement('style');
            msViewportStyle.appendChild(
                document.createTextNode(
                    '@-ms-viewport{width:auto!important}'
                )
            );
            document.querySelector('head').appendChild(msViewportStyle);
        }
        $('.carousel').carousel();
    }
};

$(function(){
    app.init();
});
