<?php 
    include_once 'header.php';
?>

  <link rel="stylesheet" href="/public/css/login-styles.css">
  <div class="main">
    <div class="form">
      <h2>Вход</h2>
      <form action="login-login.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error'];  ?></p>
        <?php } ?>
        <input type="text" name="uname" placeholder="Логин" autocomplete="off" class="email">
        <input type="password" name="password" placeholder="Пароль" autocomplete="off" class="password">
        <button class="submit-btn">Войти</button>
        <a href="register.html" class="link"> </a>
      </form> 
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