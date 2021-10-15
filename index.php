<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index">
	<link rel="stylesheet" href="index.css">


    <link href="..\Icons\icon.png" rel="shortcut icon" type="images/x-icon"/>
	<title>Welcome</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="../slick.js"></script>
    <link rel="stylesheet" type="text/css" href="../slick.css"/>
    <link rel="stylesheet" type="text/css" href="../slick-theme.css"/>
</head>
<body>


<?php
  $attrmenu=array("dropdown-toggle","data-toggle=dropdown","Главная");
  $vypad= array("О нас","Стоимость","Контакты");
  require_once "Detals/nav and header.php";
?>
    <div id="aboutus">
        <h1>О нас</h1>
        <p><strong>Учебно-развивающий клуб  «WELCOME» – это учебный центр в Никополе, в котором вы найдете увлекательные уроки, современную методику и профессиональных преподавателей.</strong></p>
        <div id="welcome">
            <div id="wel1">W</div>
            <div id="wel2">E</div>
            <div id="wel3">L</div>
            <div id="wel4">C</div>
            <div id="wel5">O</div>
            <div id="wel6">M</div>
            <div id="wel7">E</div>
        </div>
        <ul>
            <li><span>Мы стараемся создать для наших учеников особую теплую, творческую атмосферу, совместили домашний уют и профессиональный подход. Наши уроки похожи на общение в кругу друзей, только в компании с высококвалифицированными преподавателями, современным оборудованием и пособиями.</span></li>
            <li><span>Мы считаем, что главное в успешном обучении – заинтересованность и комфорт наших учеников, профессионализм и очарование наших преподавателей. И всё это приносит долгожданные успехи.</span></li>
            <img id="child" src="..\Pictures\children.jpg" alt="">
            <li><span>Мы приглашаем к нам на обучение детей с 5 лет, подростков, студентов и взрослых. Для каждого возраста нашими опытными педагогами разработана специальная эффективная методика, чтобы сделать процесс обучения для вас и ваших близких максимально легким и интересным.</span></li>
            <li><span>Наш КЛУБ предназначен для людей с разным уровнем английского</span></li>
            <li><span>Мы организуем корпоративные занятия английским языком для различных предприятий в соответствии с особенностями их бизнеса.</span></li>
            <li><span>Мы проводим тренинги для подростков, родителей и предпринимателей по вопросам психологии и бизнеса.</span></li>
            <li><span>Мы готовим школьников к успешной сдаче ЗНО по различным предметам и добиваемся отличных результатов.</span></li>
            <p id="details"><strong>Подробней...</strong></p>
            <li class="lil"><span>Занятия проходят таким образом, что 80% времени выпадает на живое общение, которое в скором времени приносит свои плоды. Всем известна польза от погружения в языковую среду, а именно это и будет происходить: вы будете постоянно слышать иностранный язык, учиться его понимать и отвечать.</span></li>
            <li class="lil"><span>Наши ценности:</span></li>
                <ul id="ourul" class="lil">
                    <li><span>Эффективность. Деятельность нашего клуба всегда направлена на оптимальное решение стоящей перед Вами задачи.</span></li>
                    <li><span>Актуальность. Мы ежедневно совершенствуемся для того, чтобы предложить Вам лучший продукт и отвечать постоянно меняющимся требованиям общества.</span></li>
                    <li><span>Ответственность. Мы отвечаем за результат и качество предоставляемых Вам услуг.</span></li>
                    <li><span>Гибкость. Мы всегда соответствуем Вашим ожиданиям в решении конкретных вопросов.</span></li>
                    <li><span>Целеустремленность. Мы всегда четко определяем цели и настойчиво их добиваемся.</span></li>
                </ul>
        </ul>
        <p class="lil" style="margin-left: 50%">Добро пожаловать, друзья!Welcome to our club “WELCOME”!</p>

    </div>
    <div class="container-fluid" id="cost">
        <h1>Стоимость занятий</h1>
        <img src="../Pictures/Pay.png" alt="">
        <div>
        <p>Индивидуальное обучение – 100 грн/час</p>
        <p>Парные занятия – 450 грн/месяц (8 занятий)</p>
        <p>Групповые занятия – 350 грн/месяц (8 занятий)</p>
        <p>Подготовка к школе – 400 грн/месяц (8 занятий)</p>
        </div>
    </div>
    <div class="container-fluid" id="contact">
    <h1>Контакты</h1>
    <div>
        <h4 style="color:#8132AD">LC «WELOME»</h4>
        <p><strong>Телефон:</strong>066 776 79 72; 093 013 26 10</p>
        <p><strong>График работы: </strong>понедельник – суббота с 10:00 до 20:00</p>
        <p><strong>E-mail:</strong></p>
        <p><strong>Контактное лицо: </strong>Олеся</p>
        <p><strong>Адрес:</strong><a target="_blank" href="https://goo.gl/maps/862Xx5ZwA7HLsqSg8">  г.Никополь, ул.Шевченко, 73 (район Варус2 – Фуршет)</a><br><a target="_blank" href="https://goo.gl/maps/FUWjPbyMhenwFsKZ6">г.Никополь, пр.Трубников, 91, оф.1</a></p>  
    </div> 
    <iframe id="if1" class="col-xs-12 col-sm-12 col-md-10 col-lg-5"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!12.484103232087!2d34.39882161165007!3d47.558368679071506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dca2d09773%3A0x9635baf50c9e72f7!2z0YPQuy4g0KjQtdCy0YfQtdC90LrQviwgNzMsINCd0LjQutC-0L_QvtC70YwsINCU0L3QtdC_0YDQvtC_0LXRgtGA0L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA1MzIwMA!5e0!3m2!1sru!2sua!4v1564144143879!5m2!1sru!2sua" height="40%" frameborder="0"  allowfullscreen></iframe>
    <iframe id="if2" class="col-xs-12 col-sm-12 col-md-10 col-lg-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2691.355608269373!2d34.34188761562957!3d47.580324879183024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dca3fc45edcaaf%3A0x449ed165136d468f!2z0L_RgNC-0YHQv9C10LrRgiDQotGA0YPQsdC90LjQutGW0LIsIDkxLCAxLCDQndGW0LrQvtC_0L7Qu9GMLCDQlNC90ZbQv9GA0L7Qv9C10YLRgNC-0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgNTMyMDA!5e0!3m2!1sru!2sua!4v1564149160855!5m2!1sru!2sua" height="40%"  allowfullscreen></iframe> 
    </div>



<?php
  require_once "Detals/menus.php";
  require_once "Detals/footer.php";
?>

    <script src="index.js"></script>

</body>
</html>