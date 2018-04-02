/*=============================================================================================	
 Company    : Personal
 Document   : Javascript
 Author     : Rahadian Muhammad Fujana - fujana.com
 ==============================================================================================*/

$.fn.isOnScreen = function () {
    if (this.length) {
        var viewport = {};
        viewport.top = $(window).scrollTop();
        viewport.bottom = viewport.top + $(window).height();
        var bounds = {};
        bounds.top = this.offset().top;
        bounds.bottom = bounds.top + this.outerHeight();
        return ((bounds.top <= viewport.bottom) && (bounds.bottom >= viewport.top));
    } else
        return false
};