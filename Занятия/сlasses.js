

$('.minslide').slick({
    autoplay:true,
    fade: true,
    cssEase: 'linear',
    autoplaySpeed:2000
});

$(".plus").each(function (index) {
	$(this).click(function () {
		$(".x").eq(index).show("slow").click(function () {
			$(".detalplus").eq(index).slideUp("slow");
			$(".x").eq(index).hide("slow");

		});
		$(".detalplus").eq(index).slideToggle("slow");
	})
})
slidescroll($("#podpunct4").find("li").eq(0),$("#header").height());
slidescroll($("#podpunct4").find("li").eq(1),$("#header").height()+$("#div1").height());
slidescroll($(".dropdown-item").eq(0),$("#header").css("height"));
slidescroll($(".dropdown-item").eq(1),$("#header").height()+$("#div1").height());


$("#link4 >a > img").attr("src","../Icons/class3.png");

$("#link4").off("mouseleave");

$("#blink4 >a > img").attr("src","../Icons/class2.png");






