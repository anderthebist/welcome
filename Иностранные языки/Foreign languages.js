    
    $(".dropdown-item").each(function (index) {
        $(this).click(function () {
            $(".lang").eq(index).trigger("click");
        
        })
    })
     $(".lang").each(function (index) {
 
        $(this).click(function () {
            $(".infomenu").hide();
            $(".lang > div").animate({"height":"25%","padding":"2%","font-size":"20px","padding-left":"10%"},"slow");
            $(this).find("div").animate({"height":"100%","padding":"18%","font-size":"22px"},"slow");
            if(index<=2){
                $(".infomenu").eq(0).slideDown("slow");
                $(".infomenu").eq(0).find("h3").text($(this).text());
                $(".pict").eq(0).css("background-image",$(this).css("background-image"));
                $(".info-text").hide();
                $(".info-text").eq(index).show();
                $('html,body').animate({scrollTop:$("#header").height()+$(".lang").eq(0).height()+
                $(".lang").eq(1).height()+$(".lang").eq(2).height()},"slow");
            }
            else{

                $(".infomenu").eq(1).slideDown("slow");
                $(".infomenu").eq(1).find("h3").text($(this).text());
                $(".pict").eq(1).css("background-image",$(this).css("background-image"));
                $(".info-text").hide();
                $(".info-text").eq(index).show(); 
                $('html,body').animate({scrollTop:$("#header").height()+$(".lang").eq(0).height()+
                    $(".lang").eq(1).height()+$(".lang").eq(2).height()+$(".lang").eq(3).height()+
                $(".lang").eq(4).height()+$(".lang").eq(5).height()},"slow");
            }
         })
    })
    $(".pict>img").click(function () {
        $(".infomenu").slideUp("slow");
        $(".lang > div").animate({"height":"25%","padding":"2%","font-size":"20px","padding-left":"10%"},"slow");
    })
$("#link5 >a > img").attr("src","../Icons/language3.png");

$("#link5").off("mouseleave");

$("#blink5 >a > img").attr("src","../Icons/language2.png");