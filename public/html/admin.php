<?php
    include "header.php";
    session_start();

    if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


?>
<link rel="stylesheet" href="/public/css/admin-styles.css">
<div class="mainn">
    <p style="font-size: 40px;">Здесь будет отображаться важная информация для членов эко-клуба</p>
</div>
<div class='footer'>
        <div class="social">
          <a href="https://www.instagram.com/ecoclub_nisofficial/"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-tiktok"></i></a>
          <a href="#"><i class="fab fa-telegram"></i></a>
        </div>
        <p class="copyright">Ecojeli @ 2023</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="/public/js/main.js"></script></body>
</html>

<?php
    }else {
        header("Location: admin.php");
        exit();
    }
?>