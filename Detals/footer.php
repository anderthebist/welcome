<head>
    <meta name="robots" content="noindex">
</head>
<style>
    #foot{
        background:  #593E81;
        padding:2%;
        font-size: 20px;
        padding-bottom: 5%;
        padding-left: 8%;
    }
    #foot>img{
        float: left;
        height: 280px;
        width: 280px;
    }
    #foot>ul>li{
        margin-left: 4%;
    }
    #foot>ul,#foot>ul>li>div>ul{
        list-style: none;
    }
    #foot>ul>li{
        display: inline-block;
    }
    #foot>ul>li>div{
        background: #7F31AC;
        padding: 5%;
    }
    .ulfoot>li>a{
        color: white;
        text-decoration: underline;
    }
    .ulfoot>li{
        margin-bottom: 10px;
    }
    @media (max-width: 920px) {
        #foot{
            padding-left: 5%;
        }
        #foot>img{
            height: 200px;
            width:200px;
        }
        #foot>ul>li{
            margin-left: 2%;
        }
    }
    @media (max-width: 770px){
        #foot{
            padding-left: 2%;
        }
    }
    @media (max-width: 630px){
        #foot{
            padding-left: 0%;
            height: 300px;
            margin-top:7%;
            font-size: 18px;
        }
        #foot>img{
            display: none;
        }
        #foot>ul{
            padding-left:2%; 
        }
        #foot>ul>li{
         display: block;
        }
        #foot>ul>li>div{
            width: 100%;
        }
        .ulfoot{
            padding-left: 0%;
        }
        .ulfoot>li{
            display: inline-block;
            margin-bottom: 0;
            margin-right: 2%;
        }
    }
    @media (max-width: 460px) {
        #foot{
            font-size: 16px;
        }
        .ulfoot>li{
            margin-right: 5%;
            margin-bottom: 3%;
        }
    }
</style>
<footer class="container-fluid" id="foot">
    <img src="../Icons/icon.png" alt="">
    <ul>
        <li>
            <div>
                <ul class="ulfoot">
                    <li><a href="../index.php">Главная</a></li>
                    <li><a href="../Новости/news.php">Новости</a></li>
                    <li><a href="../Услуги/services.php">Услуги</a></li>
                    <li><a href="../Занятия/сlasses.php">Занятия</a></li>
                    <li><a href="../Иностранные языки/Foreign languages.php">Иностраные языки</a></li>
                </ul>
            </div>
        </li>
        <li></li>
    </ul>
</footer>