<?php 
    include_once 'header.php';
?>

  <link rel="stylesheet" href="/public/css/register-styles.css">
  <div class="main">
    <div class="alaert-box">
      <p class="alert">msg</p>
    </div>
    <div class="form">
      <h2>Регистрация</h2>
      <input type="name" placeholder="ФИО" autocomplete="off" class="email" required>
      <input type="email" placeholder="Почта" autocomplete="off" class="email" required>
      <input type="password" placeholder="Пароль" autocomplete="off" class="password" required>
      <input type="password" placeholder="Подтвердите пароль" autocomplete="off" class="password" required>
      <button class="submit-btn">Зарегистрироваться</button>
      <a href="login.html" class="link">Уже есть аккаунт? Войдите здесь</a>
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