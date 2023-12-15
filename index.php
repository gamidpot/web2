<?php 

$db = new PDO("mysql:127.0.0.1 = localhost; dbname=rofls",
"root", "");

$info = [];

if($query = $db->query("SELECT * FROM rofls")) {
  $info = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
  print_r($d->errorInfo());
}

 ?>









<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Магазин Рофлинка</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <div id="logo" onclick="slowScroll('#top')">
      <span>ROFL</span>
    </div>
    <div id="about">
      <a href="#" title="Товары" onclick="slowScroll('#main')">Товары</a>
      <a href="#" onclick="slowScroll('#overview')" title="Преимущества">Преимущества</a>
      <a href="#" onclick="slowScroll('#contacts')" title="Вход">Вход</a>
      <a href="#" onclick="slowScroll('#faq')" title="Ответы на вопросы">FAQ</a>
    </div>
  </header>

  <div id="top">
    <h1>Магазин РОФЛИНКА</h1>
    <h3>Приветствует вас!</h3>
  </div>



<div class ="info-wrapper">
	<div class="info">
    <?php foreach ($info as $data): ?>
		<div id="product">
			 <a><img src="<?php echo $data['image'] ?>" weight="300" height="200" /></a>
			 <h2 id="info_h"><?php echo $data['name'] ?></h2>
			 <h3 id="info_g"><?php echo $data['price'] ?></h3>
			 <h2><a href="cheto.html" id="buy">Приобрести</a></h2>
		</div>
   <?php endforeach; ?>


	</div>
</div>

<div id="overview">
    <h2>Магазин ROFLINKA - ИМЕННО ТО, ЧТО ВЫ ИСКАЛИ!</h2>
    <h4>Низкие цены, быстрая доставка и качественный товар - вот на девиз!</h4>

    <div class="img">
      <img src="img/khotite_vernut_tovar_v_internet_magazin_1.jpg" alt="">
      <span>Удобно заказывать с мобильного устройства</span>
    </div>

    <div class="img">
      <a href="#"><img src="img/pngtree-fast-delivery-icon-delivery-icon-png-image_2047531.jpg" weight="100" height="258" alt=""></a>
      <span>Качественная и быстрая доставка!</span>
    </div>
  </div>

  <div id="contacts">
    <center><h5>Вход</h5></center>
    <form id="form_input">
      <label for="name">Имя <span>*</span></label><br>
      <input type="text" placeholder="Введите имя" name="name" id="name"><br>
      <label for="email">Ваша почта <span>*</span></label><br>
			<input type="email" placeholder="Введите email" name="email" id="email"><br>
			<div id="mess_send" class="btn">Вход</div>
    </form>
  </div>
<hr width= 1517>
<div id="faq">
  <div>
      <a align="right"><span class="title">
2021-2023 © Roflinka — модный интернет-магазин одежды, обуви и аксессуаров. Все права защищены. Доставка по всему миру!</span></a>
      <a><p>Все очень просто, заказывайте за небольшую цену качественный товар!</p></a>
</div>

    <div>
      <span class="title">Головной офис</span><br>
      <p><img src="img/lolich.png" weight="400" height="200"></p>
      <span class="heading">Наши специалисты</span>
      <p> <a href="http://vk.com/afroditavtilte">
      <img src="kisspng-russia-social-media-marketing-vkontakte-social-net-vk-logo-png-5ab0b9c12843d2.6240689915215313291649.png" alt="VK"> </a>
</p>
      <span class="heading">Наши контакты</span>
      <p>&#9742; +7(964)0131488,<br><a href="#"><img src="img/whatsapp-logo.png" title="++7(964)0131488" alt="+7(964)0131488"></a></p>
    </div>


  <div id="faq">
    <div>
     <p>  <span class="title"><a href="">О компании</a></span> </p>
     <p> <span class="heading"><a href="">О нас</a></span> </p>
     <p> <span class="heading"><a href="">Вакансии</a></span> </p>
    </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    function slowScroll(id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }

    $(document).on("scroll", function () {
      if($(window).scrollTop() === 0)
        $("header").removeClass("fixed");
      else
        $("header").attr("class", "fixed");
    });
  </script>
</body>
</html>