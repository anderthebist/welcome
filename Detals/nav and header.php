    <head>
        <meta name="robots" content="noindex">
        
        <script type="text/javascript" src="../slick.js"></script>
        <link rel="stylesheet" type="text/css" href="../slick.css"/>
        <link rel="stylesheet" type="text/css" href="../slick-theme.css"/>
    </head>
    <style>
    #mainnav{
        width: 100%;
        height: 70px;
        background-color:white;
        position: fixed;
        box-shadow: 5px 0px 10px #593E81;
        z-index: 10;
        padding-top: 1%;
        padding-bottom: 1%;
   }
body::-webkit-scrollbar { width: 10px; height: 3px;}
body::-webkit-scrollbar-button {  background-color: #593E81;height:20px; }
body::-webkit-scrollbar-track-piece { background-color: white;border-left:2px solid gray;border-radius: 10px;}
body::-webkit-scrollbar-thumb { height: 50px; background-color:#593E81; border-radius: 5px;}


#nav-div{
    display:none;
    width: 100%; 
}
#vypad{
    box-shadow: 0px 0px 10px #593E81;
}
.nav-link{
    font-size: 1.3em;
    color:#593E81;
    position: absolute;
    left:65%;
    top:-10%;
}
#nav-div>div>a{
    color:#593E81;
}
#nav-div>div>a:active,#nav-div>div>a:hover{
    background:#593E81;
    color:white; 
}
#navbutton{
    margin-left: 30px;
    cursor: pointer;
    z-index: 1;
    transition: all 0.4s ease-in-out;
}
#navbuttonclose{
    cursor: pointer;
    z-index: 1;
    margin-left: 30px;
    display: none;
    transition: all 0.4s ease-in-out;
}
#abrand>img{
    height:60px;
} 
#abrand{
    position: absolute;
    left:8%;
    z-index: 5;
}
#header{
    height:800px;
    cursor: pointer;
    padding: 0;
    transition: all 0.5s ease-in-out;
    z-index: 5;
}
.slide{
    height:800px;
    width:100%;
    cursor: pointer;
    z-index: 1;
}
.blackline{
    height: 35%;
    width: 100%;
    background:rgba(0,0,0,0.4);
    z-index: 3;
    position: absolute;
    bottom: 0%;
    padding-left: 1%;
    padding-top: 0.25%;
    color:white;
    font-size: 20px;
}
.blackline>h1{
    margin-bottom: 0.20%;
}
.img{
    height:800px;
    margin: 0px auto;
    max-width: 100%;
    object-fit: cover;
    display: block;
}
#b1,#b2{
    height: 15%;
    width:  80px;
    background: rgba(0,0,0,0.5);
    border:0px solid rgba(0,0,0,0);
    box-shadow: 0px 0px 0px rgba(0,0,0,0);
    position: absolute;
    bottom: 45%;
    outline: 0px solid rgba(0,0,0,0);
    z-index: 2;
}
#b1>img,#b2>img{
    height:50px;
    width:50px;
    margin-bottom: 5%;
}
#b1{
    position: absolute;
    left:0%;
}
#b2{
    position: absolute;
    right:0%;
}

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
    #mainnav{
        padding-top: 9%;
    }
    #abrand{
        top:0; 
    }
}
@media (max-height: 550px){

    .nav-link{
        margin-top: 3%;
    }   
}



@media (max-width: 1400px){
    #b1,#b2{
        height: 15%;

    }
    #abrand{
        left:12%;
    }
}
@media (max-width: 1050px) {
    #header,.slide,.img{
        height:640px;
    }
    #b1,#b2{
        height: 10%;

    }
}
@media (max-width: 920px) {
    #mainnav{
        height: 65px;
    }
    .nav-link{
        margin-top: 2%;
    }
    #nav-div{
        display:block;
    }
    #header,.slide,.img{
        height:500px;
    }  
    #b1,#b2{
        height: 10%;

    }
    #abrand{
        left:5%;
    }

}
@media (max-width: 770px){
    #b1,#b2{
        height: 10%;
    }
    #mainnav{
        height: 60px;
        padding-top: 2%;
    }
}
@media (max-width: 630px) {

    .slide,.img{
        height:450px;
    }
    #header{
        height:450px;
        position: relative;
        top:40px
    }
    .blackline{
        padding-top: 0;
        height: 40%;
    }


    .nav-link{
        margin-top: 3%;
        font-size: 1.2em;
    }
    #b1,#b2{
        height: 20%;

    }
}
@media (max-width: 550px) {

    #cost>img{
        height:45%;
    }
}
@media (max-width: 460px) {
    #header,.slide,.img{
        height:420px;
    }
    #b1,#b2{
        width: 60px;
    }
    #b1>img,#b2>img{
        width: 30px;
        height: 30px;
    }
}

@media (max-width: 415px) {
    #abrand{
        left:4%;
    }
    #abrand>img{
        height:55px;
    }
    #nav-a{
        font-size: 0.8em; 
    }
    #header,.slide,.img{
        height:320px;
    }
    .nav-link{
        position: absolute;
        right: 5%;
        font-size: 1.3em;
    }
    .nav-div>div>a{
        font-size:1.2em; 
    }
    .blackline{
        font-size: 17px;
    }
    .blackline>h1{
        font-size: 25px;
    }


}
@media (max-width: 360px) {
    #header,.slide,.img{
        height:300px;
    }
    .blackline{
        font-size: 14px;
    }
}
@media (max-width: 320px){
    #header,.slide,.img{
        height:250px;
    }
    .nav-link{
        margin-top: 4%;
        font-size: 1.1em;
    }
}
    </style>
    <?php $conection=mysqli_connect("localhost","root","","welcome"); ?> <!--mysqli_connect("localhost","a0380843_welcome","wXmqXe3S","a0380843_welcome")-->
    <nav class="navbar navbar-expand-lg navbar-dark" id="mainnav">
        <img id="navbutton" src="../Icons/menu.png"><img id="navbuttonclose" src="../Icons/closemenu.png">
        <a class="navbar-brand" id="abrand" href="../index.php"><img src="..\Pictures\logo.png" id="bootimg" alt=""></a>
        <div id="nav-div">
            <a class="nav-link <?php echo $attrmenu[0] ?> toggs"  href="#"  role="button" <?php echo $attrmenu[1] ?> aria-haspopup="true"     aria-expanded="false"><?php echo $attrmenu[2] ?></a>
                <div class="dropdown-menu container-fluid" id="vypad" >
                    <?php
                     foreach ($vypad as $v) {
                        echo "<a class=dropdown-item href=#>".$v."</a>";
                     }
                    ?>
                </div>
        </div>
    </nav>
    <header class="container-fluid" id="header">
    <div class="slide">
        <?php 
            $count=mysqli_query($conection,"SELECT * FROM `slides` ; ");
            $values=mysqli_fetch_all($count,MYSQLI_ASSOC);
            foreach ($values as $key):
                $text=mb_strimwidth($key['text'],0, 40)."<br>".mb_strimwidth($key['text'],40, 50,"..") ;
        ?>
            <div>
                <a href="../Новости/news.php">
                    <div class="blackline">
                        <h1><?php echo  $key['title'] ?></h1>
                        <p><?php echo $text  ?></p>
                    </div>
                </a>
                <img class="img"  src="<?php echo  $key['img'] ?>">
            </div>
        <?php 
            endforeach;
        ?>
    </div> 
    
     
</header>

<script>
$("#navbutton").click(function () {
   $("#leftmenu").css("transform","translate(0,0px)");
   $("#navbutton").hide();
   $("#navbuttonclose").css("display","block");
})
$("#navbuttonclose").click(function () {
   $("#leftmenu").css("transform","translate(-110%,0px)");
   $("#navbutton").show();
   $("#navbuttonclose").css("display","none");
})
$('.slide').slick({
    autoplay:true,
    dots:true,
    arrows:true,
    cssEase: 'linear',
    autoplaySpeed:2000,
    prevArrow: '<button class="arrow "id="b1"><img src="../Icons/arrowslide1.png" alt=""></button>',
    nextArrow: '<button class="arrow "id="b2"><img src="../Icons/arrowslide2.png" alt=""></button>'
});
$(".slick-next,.slick-prev").hide();
$("#b1").click(function () {
    $('.slick-prev').trigger("click");
})
$("#b2").click(function () {
    $('.slick-next').trigger("click");
})

</script>
