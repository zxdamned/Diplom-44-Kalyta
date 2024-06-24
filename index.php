<!DOCTYPE html>
<html lang = "en" dir = "ltr">
<head>
<title>shelter</title>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
  <link rel ="stylesheet" href="style.css" type="text/css">
</head>
<body>
<nav class="navbar">
<h1 class="logo">Притулок для тварин</h1>
<ul class="nav-links">
<li><a href ="#main">Головна</a></li>
<li><a href ="#function">Діяльність</a></li>
<li><a href ="#about">Про нас</a></li>
<li><a href ="#contact">Контакти</a></li>
</ul>
</nav>
<section class="main" id="main">
<div class="content">
<h1>Притулок для тварин</h1>
<p>допоможе знайти нову родину<br>
для домашнього улюбленця</p>
</div>
</section>
<section class="function" id="function">
<div class="funcon">
<p><b>Діяльність нашого притулку</b></p>
<div class="tab">
<div class="box">Пошук нових власників для тварин</div>
<div class="box">Регулювання кількості бездомних тварин</div>
<div class="box">Консультації з питань вибору, вирощування та виховання тварин</div>

</div>
</div>
</section>

<section class="about" id="about">
<div class="abcon">
<img src="https://www.akc.org/wp-content/uploads/2018/07/preventing-body-sensitivity.jpg" width="590" height="360" /><p>Проблема стосовно притулку для тварин порушувалася вже довгий час, тож було створено пункт для утримання тварин. З перших днів притулок існує за кошти благодійників та небайдужих до проблем тварин людей. У нас знаходяться декілька сотень собак та котів, які отримують необхідні дози вакцини, харчування та необхідну турботу. Всі тварини чекають на свого господаря.</p>
</div>


<div class="w3-content w3-display-container">
  <img class="mySlides" src="https://www.purina.ru/sites/default/files/2020-09/safari-1.jpg" style="width:100%">
  <img class="mySlides" src="https://www.purina.ru/sites/default/files/2020-09/piksibob-1.jpg" style="width:100%">
  <img class="mySlides" src ="https://www.purina.ru/sites/default/files/2020-09/ragamafin1.jpg" style="width:100%">
  <img class="mySlides" src="https://www.purina.ru/sites/default/files/2020-09/norvegskaya-lesnaja.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
  
<div class="abtex">
<p><b>Нові тварини притулку</b></p>
</div>
<div class="wrapcd">

<div class="card">
<img src="https://dobri-ruky.com.ua/wp-content/uploads/2022/07/sara-7-1-1536x1025.jpg" style="width:100%">
<div class="container">
<h4>Кличка: Сара</h4>
<p>Стать: дівчинка</p>
<p>Вік: дорослий</p>
<p>Порода: вівчарка</p>
<p>Розмір: великий</p>
</div>
</div>
<div class="card">
<img src="https://dobri-ruky.com.ua/wp-content/uploads/2019/03/ozma-6-1-1536x1025.jpg" style="width:100%">
<div class="container">
<h4>Кличка: Озма</h4>
<p>Стать: дівчинка</p>
<p>Вік: дорослий</p>
<p>Порода: метис</p>
<p>Розмір: середній</p>
</div>
</div>
<div class="card">
<img src="https://dobri-ruky.com.ua/wp-content/uploads/2020/11/dzhevis-6-1536x1025.jpg" style="width:100%">
<div class="container">
<h4>Кличка: Джевіс</h4>
<p>Стать: хлопчик</p>
<p>Вік: дорослий</p>
<p>Порода: метис</p>
<p>Розмір: маленький</p>
</div>
</div>

</div>

</section>
<section class="contact" id="contact">
<div class="contain">
<form action="send.php" method="POST" />>

 <input type="text"  name="firstName" placeholder="Full name" required>
<input type="text"  name="subject" placeholder="subject" required>
<input type="email"  name="email"placeholder="Email" required>
 <textarea name="msg"  placeholder="Message" required cols="30" rows="10"></textarea>
<button type="submit">Надіслати</button>
</div>
 

<div class="quest">
<h1>Що робити, якщо знайшли безпритульну тварину?</h1>


<a href="shelter1.html" class="questb">Дізнатися</a>
</div>

<div class="contacts">
<div class="conttx">
<h4>Номер телефону</h4>
<p>123 456 78 90</p>
</div>
<div class="conttx">
<h4>Електронна пошта</h4>
<p>nnastia1411@gmail.com</p>
</div>
<div class="conttx">
<h4>Адреса</h4>
<p>вул. Петра Юрченко, буд.18</p>
</div>
</div>

</section>
<!--
<?php

$mailto="nnastia1411@gmail.com";
$from = $_POST['email'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];
require "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->Host="smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Username="nnastia1411@gmail.com";
$mail->Password="05085908";
$mail->setFrom($mail, $firstName);
$mail->addAddress("nnastia1411@gmail.com", "Nastya");
$mail->Subject=$subject;
$mail->Body=$message;
$mail->send();
echo "email sent";
?>
-->
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>  
  
</body>


</html>
