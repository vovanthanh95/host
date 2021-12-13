<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>QTI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./public/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./public/css/style.css" />
</head>

<body>
  <div class="container">
    <!-- menu -->
    <div class="">
      <div class="banner">
        <img src="./public/images/header-850x266.jpg" alt="">
      </div>
      <nav class="nav-main">
        <ul class="">
          <li class=""><a class="" href="/mvc/home">Home</a></li>
          <li class=""><a class="" href="/mvc/home">About</a></li>
          <li class=""><a class="" href="/mvc/home">Menu</a></li>
          <li class=""><a class="" href="/mvc/home">Login</a></li>
          <li class=""><a class="" href="/mvc/home">Menu</a></li>
          <li class=""><a class="" href="/mvc/home">Login</a></li>
        </ul>
        <div class="member">
        <a class="login" href="">Đăng nhập</a>
        <a class="register" href="">Đăng ký</a>
      </div>
      </nav>
      <div class="">
        <div class="content">
          <section>
            <?php require_once "./mvc/views/page/listproducts.php" ?>
          </section>
        </div>
      </div>
      <footer class="">
        <p>Trụ sở chính </br>
          Địa chỉ: Phòng 1610, tòa nhà S106, Khu đô thị Vinhomes Smart City, Tây Mỗ, Nam Từ Liêm, Hà Nội<br />
          Điện thoại: 0988.56.59.56 - 0963.239.222 - em Minh <br />
          Email: abc@zzz.com.vn</br>
        </p>
        <a href="#">Liên hệ 0909090909</a>

      </footer>
    </div>
    <!-- list products -->

  </div>
  <script language="JavaScript" type="text/javascript" src="./public/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script language="JavaScript" type="text/javascript" src="./public/js/js.js"></script>
</body>

</html>
