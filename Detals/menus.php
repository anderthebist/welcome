<head>
    <meta name="robots" content="noindex">
</head>
<style>
 #leftmenu{
    background: white;
    height:100%;
    width:20%;
    position: fixed;
    top:5%;
    z-index: 8;
    padding-top:4%;
    overflow-y:scroll;
    box-shadow: 0px 5px 10px #593E81;
    transition: all 0.4s ease-in-out;
    transform: translate(-110%,0px);
}
#ulmenu{
    width: 100%;
    list-style:none;
}
.links{
    width: 100%;
    cursor: pointer;
    margin-bottom: 20px;
    padding:10px;
    padding-left: 25px;
    position: relative;
    right:10%;
}
.links >a {
    font-size:20px;
    color:#8132AD;
}
.links:hover > a{
    text-decoration: none;
    color:white;
}
.links:hover{
    background:  #593E81;
}
.podpunct{
    list-style: none;
    font-size:18px;
    position: relative;
    right:15%;
    color:#593E81;
    margin-top:-10px;
    display: none;  
}
.podpunct >li{
    margin-bottom:15px; 
    cursor: pointer;
    padding:5px;

}
.podpunct >li:hover{
    background:  #593E81;
    color:white;
}

.iconmenu{
    height:25px;
    width: 25px;
    margin-right: 10px;
    position: relative;
    bottom: 3px;
}

#bottommenu{
    width:100%;
    height:10%;
    position: fixed;
    bottom:0px;
    box-shadow:0 0 10px #593E81;
    overflow: hidden;
    display:none;
    background: white;
    z-index: 10;
    transition: all 0.5s ease-in-out;
}

.bottlinks{
    width: 10%;
    cursor: pointer;
    display: inline-block;
    z-index: 10;
    font-size:1em;
    margin-right:9%; 
    padding-left: 0;
    position: relative;
    top:10%;
}
.bottlinks >a {
    color:black;
    position: relative;
    left:3%; 
}
.bottlinks:hover > a,.bottlinks:active > a{
    text-decoration: none;
    color:#593E81y;
}
.bottlinks a > img{ 
    position: relative;
    left:28%; 
}
#ulbottom{
    margin-left:-2%; 
}


#arrowup{
    background: url("../Icons/Arrow.png");
    background-size:cover;
    background-repeat: none; 
    height:60px;
    width:60px;
    position: fixed;
    bottom:20%;
    left:90%;
    z-index: 10;
    display: none;
    cursor: pointer;
    transition: all 0.5s ease-in-out;
    animation:updown 0.5s ease-in-out  infinite alternate;
}

@keyframes updown{
    from{
        bottom:20%;
    }
    to{
        bottom:22%;
    }
}
@media (max-height: 350px){
    #bottommenu{
        height: 65px;
    }
    #ulbottom{
        margin-left: 1%;
    }
    #arrowup{
        height:45px;
        width:45px;
        bottom:30%;
    }
}
@keyframes updown{
    from{
        bottom:30%;
    }
    to{
        bottom:32%;
    }
}
@media (max-width: 1400px) {
    #leftmenu{
        width:30%;

    }
}
@media (max-width: 1050px) {
    #leftmenu{
        top:5%;
        padding-top: 6%;
    }
}

@media (max-width: 920px) {

    #ulmenu{
        margin-top:10%; 
    }

    #leftmenu,#navbuttonclose,#navbutton{
        display:none;
    }

    #bottommenu{
        display:block;
        padding-left: 5%;
        padding-right: 0%;
        height: 80px;
    }

    .bottlinks{
        top:10px;
    }
    .iconmenu{
        height:20px;
        width: 20px;
    }
}
@media (max-width: 770px) {
    #bottommenu{
        height: 65px;
    }
}
@media (max-width: 630px) {

    #arrowup{
        height: 40px
        width:40px;
        position: fixed;
        bottom:20%;
        left:85%;
    }
    #bottommenu{
        padding-left: 0%;
    }
 
}
@media (max-width: 460px) {
    #arrowup{
        left:80%;
        height:50px;
        width:50px; 
    }

}
@media (max-width: 415px) {
    #ulbottom{
        position: relative;
        top:-20%;
    }
    #bottommenu{
        height: 10%;
    } 
    .bottlinks{
        font-size: 0.8em;
        top:25px;
        margin-right:8.5%; 
    }
    #arrowup{
        left:75%;   
    }

}
@media (max-width: 320px){
   #ulbottom{
        margin-left: -4%;
    }
    #bottommenu{
        height:11%;
    }
    #arrowup{
        left:80%;
    }
}
</style>
<div id="leftmenu">
    <ul id="ulmenu">
        <li class="links" id="link1"><a href="../index.php"><img src="../Icons/home2.png" class="iconmenu"  alt="">Главная</a></li>
          <ul class="podpunct" id="podpunct1">
            <li>О нас</li>
            <li>Стоимость</li>
            <li>Контакты</li>
          </ul>
        <li class="links" id="link2"><a href="../Новости/news.php"><img src="../Icons/news2.png" class="iconmenu"  alt="">Новости</a></li>
          <ul class="podpunct" id="podpunct2">
            <li>Новости и акции</li>
            <li>Блог</li>
            <li>Фотогалерея</li>
          </ul>
        <li class="links" id="link3"><a href="../Услуги/services.php"><img src="../Icons/Услуги2.png" class="iconmenu" alt="">Услуги</a></li>
        <ul class="podpunct" id="podpunct3">
            
        </ul>
        <li class="links" id="link4"><a href="../Занятия/сlasses.php"><img src="../Icons/class2.png" class="iconmenu" alt="">Занятия</a></li>
          <ul class="podpunct" id="podpunct4">
            <li id="pod1">Подготовка к школе</li>
            <li>Ранее зазвитие детей</li>
          </ul>
        <li class="links" id="link5"><a href="../Иностранные языки/Foreign languages.php"><img src="../Icons/language2.png" class="iconmenu" alt="">Иностраные языки</a></li>
          <ul class="podpunct" id="podpunct5">
          </ul>
    </ul>
</div>
<div id="bottommenu">
    <ul id="ulbottom">
        <li class="bottlinks" id="blink1"><a href="../index.php"><img src="../Icons/home.png" class="iconmenu"  alt=""><br>Главная</a></li>
        <li class="bottlinks" id="blink2"><a href="../Новости/news.php"><img src="../Icons/news.png" class="iconmenu"  alt=""><br>Новости</a></li>
        <li class="bottlinks" id="blink3"><a href="../Услуги/services.php" ><img src="../Icons/Услуги.png" class="iconmenu" alt=""><br>Услуги</a></li>
        <li class="bottlinks" id="blink4"><a href="../Занятия/сlasses.php" ><img src="../Icons/class.png" class="iconmenu" alt=""><br>Занятия</a></li>
        <li class="bottlinks" id="blink5"><a href="../Иностранные языки/Foreign languages.php" ><img src="../Icons/language.png" class="iconmenu" alt=""><br>Языки</a></li>
    </ul>
</div>


<div id="arrowup"></div>

<script>
  $(window).scroll(function(){
     window.pageYOffset>$("#header").height() ? $("#arrowup").css("display","block") : $("#arrowup").css("display","none");
})

  $(".podpunct").each(function (index) {
      if($(this).css("display")=="block"){
        $(".links").eq(index).find("a").addClass("dropdown-toggle");
        $(".links").eq(index).click(function () {
            $(".podpunct").eq(index).slideToggle();
        })
      }
  })

$("#link1").mouseover(function () { $("#link1 >a > img").attr("src","../Icons/home3.png");})
$("#link1").mouseleave(function () { $("#link1 >a > img").attr("src","../Icons/home2.png");})
$("#link2").on("mouseover click",function () { $("#link2 >a > img").attr("src","../Icons/news3.png");})
$("#link2").mouseleave(function () { $("#link2 >a > img").attr("src","../Icons/news2.png");})
$("#link3").on("mouseover click",function () { $("#link3 >a > img").attr("src","../Icons/Услуги3.png");})
$("#link3").mouseleave(function () { $("#link3 >a > img").attr("src","../Icons/Услуги2.png");})
$("#link4").on("mouseover click",function () { $("#link4 >a > img").attr("src","../Icons/class3.png");})
$("#link4").mouseleave(function () { $("#link4 >a > img").attr("src","../Icons/class2.png");})
$("#link5").on("mouseover click",function () { $("#link5 >a > img").attr("src","../Icons/language3.png");})
$("#link5").mouseleave(function () { $("#link5 >a > img").attr("src","../Icons/language2.png");})

$("#blink1").click(function () { $("#blink1 >a > img").attr("src","../Icons/home2.png");})
$("#blink2").click(function () { $("#blink2 >a > img").attr("src","../Icons/news2.png");})
$("#blink3").click(function () { $("#blink3 >a > img").attr("src","../Icons/Услуги2.png");})
$("#blink4").click(function () { $("#blink4 >a > img").attr("src","../Icons/class2.png");})
$("#blink5").click(function () { $("#blink5 >a > img").attr("src","../Icons/language2.png");})


$("#arrowup").click(function () {
  $('html,body').animate({scrollTop:0},"slow");
  $("#details").show();
  $(".lil").hide();
})

function slidescroll(element,value) {
  element.click(function () {
  $('html,body').animate({scrollTop:value},"slow");
})
}
</script>