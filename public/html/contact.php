<?php 
    include_once 'header.php';
?>
  <link rel="stylesheet" href="/public/css/contact-styles.css">
  <div class="main">
    <div class="first">
      <h1>Свяжитесь с нами</h1>
      <div class="photo"></div>
    </div>
    <div class="second">
      <div class="nam">
        <h3>ФИО</h3>
        <input type="email" placeholder="" autocomplete="off" class="name" required>
      </div>
      <div class="emai">
        <h3>Почта</h3>
        <input type="name" placeholder= "" autocomplete="off" class="email" required>
      </div>
      <div class="commen">
        <h3>Коммент</h3>
        <textarea id="my-Text" class="comment" rows="5" placeholder=""></textarea>
      </div>
      <p id="result">0/60</p>
      <button class="submit-btn">Отправить</button>
    </div>
  </div>
  <div class='footer'>
    <div class="social">
      <a href="https://www.instagram.com/ecoclub_nisofficial/"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-tiktok"></i></a>
      <a href="#"><i class="fab fa-telegram"></i></a>
    </div>
    <p class="copyright">Ecojeli @ 2023</p>
  </div>
  <script src="/public/js/main.js"></script></body>
</html>