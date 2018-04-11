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

$.fn.fileInputC = function (e) {
    var elem = this, input = elem.find("input");

    input.on('change', function () {
        value = $(this).val();
        if (value != "") {
            value = value.substring(12, value.length);
            $(this).next("span").html(value);
        } else {
            $(this).next("span").html(elem.attr('placeholder-text'));
        }
    });
}

function popup(){
    $(".popup-trigger").click(function(e){
        e.preventDefault();
        $("body, html").css("overflow-y","hidden");
        $("section.popup").fadeIn(300);
    });
    $(".pop-close").click(function(){
        $("section.popup").fadeOut(300);
        setTimeout(function () {
            $("body, html").css("overflow-y","auto");
        }, 500);
    });
}

function plusmin(){
    $(".head-cat span").click(function(){
        $(this).parent().next().slideToggle(300);
        $(this).toggleClass("min");
        $(this).parent().parent().toggleClass("active");
    });
}

function accordion(){
    $(".head-acc span").click(function(){
        $(this).parents(".accordion").find(".content-acc").slideToggle(400);
        $(this).toggleClass("up");
        $(this).parents(".accordion").toggleClass("active");
    });
}