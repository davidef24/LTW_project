$(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop()>300){
            $(".navbarpers").addClass("navbarpers-fixed");
        }else{
            $(".navbarpers").removeClass("navbarpers-fixed");
        }
    });
    $("#request").addClass("inpagetext");
    $(".mycover").addClass("inpage");
    $("#form-help").addClass("animated fadeInLeft");
    $(".form-answer").addClass("animated zoomInDown slower");
    $(".list-answer").addClass("animated rotateIn")
    $(".text_animate").addClass("animated bounce infinite");
    $("#img-1").addClass("inpage");
    $("#img-text").addClass("inpagetext");
    $("#dove-andare").addClass("animated fadeInLeft");
    $(".fadein_text").addClass("inpagetext");    
    $(".about_us").addClass("inpage");
    $(".title_design").addClass("inpage");
    $(".navbarpers").addClass("inpage");
    $(".img-fluid").addClass("inpage");
});