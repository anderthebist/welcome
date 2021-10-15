$(document).ready(function () {
  $("#aboutus>ul>li").addClass("ourinfo");
  
})

$("#link1 >a > img").attr("src","../Icons/home3.png");

$("#link1").off("mouseleave");

$("#blink1 >a > img").attr("src","../Icons/home2.png");

slowscroll($("#podpunct1").find("li").eq(0),$("#header").height());
slowscroll($("#podpunct1").find("li").eq(1),$("#header").height()+$("#aboutus>ul").height()+$("#foot").height());
slowscroll($("#podpunct1").find("li").eq(2),$("#header").height()+$("#aboutus>ul").height()+$("#cost").height()
  +$("#foot").height());

slowscroll($(".dropdown-item").eq(0),$("#header").css("height"));
slowscroll($(".dropdown-item").eq(1),$("#header").height()+$("#aboutus>ul").height()+$("#foot").height());
slowscroll($(".dropdown-item").eq(2),$("#header").height()+$("#aboutus>ul").height()+$("#cost").height()
  +$("#foot").height());


function slowscroll(element,value) {
  element.click(function () {
  $('html,body').animate({scrollTop:value},"slow");
  $("#details").show();
  $(".lil").hide();
})
}

$("#details").click(function () {
  $("#details").hide();
  $(".lil").slideDown("slow");
})




   


