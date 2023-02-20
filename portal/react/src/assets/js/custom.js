$(document).ready(function(){
    $('.collapse').on('shown.bs.collapse', function(){
        $(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
        }).on('hidden.bs.collapse', function(){
        $(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
    });


    //.... login-signup height add
    $(window).on("load",function(){
        var win_width = $(window).width();
        var win_height = $(window).height();
        var right_height = $(".login-wrapper .main .right").height();
        if(win_width>991){
            if(right_height < win_height){
                $(".login-wrapper .main").css("min-height",win_height+"px");
            } 
        } else {
            $(".login-wrapper .main").css("height",win_height+"px");
        }
    });
    $(window).on("resize",function(){
        var win_width = $(window).width();
        var win_height = $(window).height();
        var right_height = $(".login-wrapper .main .right").height();
        if(win_width>991){            
            if(right_height < win_height){
                $(".login-wrapper .main").css("min-height",win_height+"px");
            }
        } else {
            $(".login-wrapper .main").css("height",win_height+"px");
        }
    });


}); //doc ready