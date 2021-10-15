<?php $conection=mysqli_connect("localhost","root","","welcome"); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index">
	<link rel="stylesheet" href="news.css">


    <link href="..\Icons\icon.png" rel="shortcut icon" type="images/x-icon"/>
	<title>Welcome news</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>

<body>
  <?php
    $attrmenu=array("dropdown-toggle","data-toggle=dropdown","Новости");
    $vypad= array("Новости и акции","Блог","Фотогалерея");
    require_once "../Detals/nav and header.php";
  ?>
  <main>
    <h3 style="color: #593E81;text-align: center;">Новости</h3>

    <?php  
       $newNews=mysqli_query($conection,"SELECT * FROM `admin_news` ;") ;
        $valuesNews=mysqli_fetch_all($newNews,MYSQLI_ASSOC);
            foreach ($valuesNews as $key):
    ?>
    <div class="news">
      <img src="<?php echo $key["image"] ?>" alt="">
      <span class="date"><?php echo $key["date"] ?></span>
      <p><?php echo $key["text"] ?></p>
      <div><h5>Подробнее...</h5></div>
    </div>

  <?php endforeach; ?>

    <h3 style="color: #593E81;text-align: center;margin-top: 3%">Акции</h3>
    <div id="stocks">
      <div class="stock">
        <p><b>1+1=1</b> приходите вдвоем – платите за одного</p>
        <ul style="list-style: none">
          <li><img class="people" src="../Pictures/man.jpg" alt=""></li>  
          <li><img class="simbol" src="../Icons/plus.png" alt=""></li> 
          <li><img class="people" src="../Pictures/man.jpg" alt=""></li>
          <li><img class="simbol" src="../Icons/eqviv.png" alt=""></li> 
          <li><img class="people" src="../Pictures/man.jpg" alt=""></li>
        </ul>
      </div>
      <div class="stock">
        <p>приходите вдвоем – платите за одногооплати полностью летний курс и получи <b>учебник</b> (британского издательства) в <b>подарок</b>!</p>
      </div>
      <div class="stock">
        <p><b>3 по цене 2</b> (оплати два месяца сразу – третий получи в подарок)</p>
        <ul style="list-style: none">
          <li><img class="people" src="../Pictures/woman.jpg" alt=""></li>  
          <li><img class="simbol" src="../Icons/plus.png" alt=""></li> 
          <li><img class="people" src="../Pictures/woman.jpg" alt=""></li>
          <li><img class="simbol" src="../Icons/plus.png" alt=""></li> 
          <li><img class="people" src="../Pictures/woman.jpg" alt=""></li>
          <li><img class="simbol" src="../Icons/eqviv.png" alt=""></li> 
          <li><img class="people" src="../Pictures/woman.jpg" alt=""></li>
          <li><img class="simbol" src="../Icons/plus.png" alt=""></li> 
          <li><img class="people" src="../Pictures/woman.jpg" alt=""></li>
        </ul>
      </div>
    </div>
    <hr style="background-color:#593E81 ">
    <h3 style="color:#593E81;text-align: center;">Блог</h3>
    <div>
      <div class="blog-slide">
             <?php 
                    $count=mysqli_query($conection,"SELECT * FROM `blog` ; ");
                    $values=mysqli_fetch_all($count,MYSQLI_ASSOC);
                    foreach ($values as $key):
                ?>
            <div class="slide_page">
              <img class="page-img" src="<?php echo $key["img"] ?>">
              <h4 style="color:#593E81;text-align: center;"><?php echo $key["title"]; ?></h4> 
              <?php echo nl2br($key["text"]); ?>
            </div>
        <?php endforeach; ?>
      </div>
      <div id="blogtext"></div>
    </div>
    <hr style="background: #593E81">
    <div id="photogalery">
      <h3 style="text-align: center;">Фотогалерея</h3>
      <div id="photos">
        <?php 
            $count=mysqli_query($conection,"SELECT * FROM `image` ; ");
            $values=mysqli_fetch_all($count,MYSQLI_ASSOC);
            foreach ($values as $key):
        ?>
        
        <img  class="photo col-sm-9 col-md-3 col-lg-3" src="<?php echo $key["img"] ?>">

        <?php endforeach; ?>

      </div>
    </div>
  </main>

  <?php
    require_once "../Detals/menus.php";
    require_once "../Detals/footer.php";
  ?>

  <script src="news.js" ></script>
</body>

<?php                     
  exit();
  mysqli_close($conection); 
?>