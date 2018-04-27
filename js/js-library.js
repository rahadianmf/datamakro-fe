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
        var id = $(this).data("id");
        $("body, html").css("overflow-y","hidden");
        $("#"+id+"").fadeIn(300);
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

function bSearchSpan(){
    $(".b-search span").click(function(){
        $(this).parents(".drop").find(".list-cont").slideToggle(200);
        $(this).toggleClass("active");
    });
    $(".b-search .list").click(function(){
        var text = $(this).html();
        $(".b-search .button font").html(text);
        $(this).parents(".drop").find(".list-cont").slideToggle(200);
        $(".b-search span").toggleClass("active");
        $(".b-search input").attr("placeholder","Search "+text+" here...");
    });
}

function tabHome(){
    $(".tab-trigger").click(function(e){
        e.preventDefault();
        var title = $(this).data("title");
        var id = $(this).data("id");
        $(".tabtitle").html(title);
        $(".tab-trigger").removeClass("active");
        $(this).addClass("active");
        $(".tabhome").removeClass("active");
        $("#"+id+"").addClass("active");
    });
}

function stayHeader() {
    $(window).scroll(function () {
        if ($(window).scrollTop() > $("header").outerHeight()) {
            $("header").hasClass('active') ? "" : $("header").addClass('active');
        } else {
            $("header").hasClass('active') ? $("header").removeClass('active') : "";
        }
    })
}

function showFilter() {
    $("aside").addClass("active");
    $("body, html").css("overflow-y","hidden");
}
function hideFilter() {
    $("aside").removeClass("active");
    $("body, html").css("overflow-y","auto");
}
function toggleFilter2() {
    $(".filter2-container").slideToggle(400);
    $(".filter2-container").toggleClass("active");
}