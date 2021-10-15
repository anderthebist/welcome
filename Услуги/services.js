
$("#link3").off("mouseleave");

$("#link3 >a > img").attr("src","../Icons/Услуги3.png");
$("#blink3 >a > img").attr("src","../Icons/Услуги2.png");

$(".item").each(function (index) {
	$(this).click(function () {
		if(screen.width<=1500)
		$('html,body').animate({scrollTop:$("#header").height()+$("#second-menu").height()},"slow");
	
		$(".item").css({"background":"#593E81","color":"white"});
		$(this).css({"background":"white","color":"#593E81"});
		$(".pages").css("display","none");
		$(".pages").eq(index).css("display","block");
	})
})





