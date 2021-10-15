
$(".news").each(function () {
	var text_save1=$(this).find("p").html();
	if($(this).find("p").text().length>370){
		$(this).find("p").html($(this).find("p").text().substr(0, 250));
		$(this).find("div").show().click(function () {
			$(this).hide();
			$(this).parent(".news").animate({"height":"100%"},"slow");
			$(this).parent(".news").find("p").html(text_save1);
		});
    }
})

$(".blog-slide").slick({
  infinite: false,
  slidesToShow: 3,
  slidesToScroll: 2,
  arrows:true,
  prevArrow: '<button class="arr" id="arr1" type="button"><img src="../Icons/arr1.png"></button>',
  nextArrow: '<button class="arr" id="arr2" type="button"><img src="../Icons/arr2.png"></button>',
    responsive: [
    {
      breakpoint: 1050, 
      settings: {
        slidesToShow: 2,
      }
    },
    {
    	breakpoint: 630,
    	settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    }
  ]
});

$(".slide_page").each(function (index) {
	var text_save2=$(this).html();
	$(this).html($(this).html().substr(0, 400)).click(function () {
		$("#blogtext").slideDown("fast").html(text_save2);
	});
})
	
	

$("#link2 >a > img").attr("src","../Icons/news3.png");

$("#link2").off("mouseleave");

$("#blink2 >a > img").attr("src","../Icons/news2.png");

slidescroll($("#podpunct2").find("li").eq(0),$("#header").height());
slidescroll($("#podpunct2").find("li").eq(1),$("#header").height()+$(".news").eq(0).height()+
	$(".news").eq(1).height()+$(".news").eq(2).height()+$("#stocks").height());
slidescroll($("#podpunct2").find("li").eq(2),$("#header").height()+$(".news").eq(0).height()+
	$(".news").eq(1).height()+$(".news").eq(2).height()+$("#stocks").height()+$(".blog-slide").height()+
	$("#blogtext").height());

slidescroll($(".dropdown-item").eq(0),$("#header").css("height"));
slidescroll($(".dropdown-item").eq(1),$("#header").height()+$(".news").eq(0).height()+
	$(".news").eq(1).height()+$(".news").eq(2).height()+$("#stocks").height());
slidescroll($(".dropdown-item").eq(2),$("#header").height()+$(".news").eq(0).height()+
	$(".news").eq(1).height()+$(".news").eq(2).height()+$("#stocks").height()+$(".blog-slide").height()+
	$("#blogtext").height()+$("#blogtext").height());