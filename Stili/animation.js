$(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop()>300){
            $(".navbarpers").addClass("navbarpers-fixed");
        }else{
            $(".navbarpers").removeClass("navbarpers-fixed");
        }
    });
    $("#testo-img").addClass("animated bounceInDown");
    //$(".mycover").addClass("inpage");
    $("#form-help").addClass("animated bounceInUp");
    $(".form-answer").addClass("animated zoomInDown slower");
    //$(".list-answer").addClass("animated zoomIn")
    $(".text_animate").addClass("animated headShake infinite");
    $("#img-1").addClass("inpage");
    $("#img-text").addClass("animated bounceInUp");
    $("#dove-andare").addClass("animated bounceInDown");
    $(".fadein_text").addClass("inpagetext");    
    $(".about_us").addClass("inpage");
    $(".title_design").addClass("inpage");
    $(".navbarpers").addClass("inpage");
    $(".img-fluid").addClass("inpage");
});