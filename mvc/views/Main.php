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
    <div class="row">
      <nav class="col-sm">
        <a href= "" class="logo">QTI</a>
        <ul class="">
          <li class=""><a class="" href="/mvc/home">Home</a></li>
          <li class=""><a class="" href="/mvc/home">About</a></li>
          <li class=""><a class="" href="/mvc/home">Menu</a></li>
          <li class=""><a class="" href="/mvc/home">Loin</a></li>
        </ul>
        <div class="member">
        <a class="login" href="">Đăng nhập</a>
        <a class="register" href="">Đăng ký</a>
      </div>
      </nav>
      <div class="row">
        <div class="content">
          <section>
            <?php require_once "./mvc/views/page/listproducts.php" ?>
          </section>
        </div>
      </div>
      <footer class="ft col-md-12">
        <p>Bản quyền<br />
          <a href="#">Liên hệ !</a>
        </p>
      </footer>
    </div>
    <!-- list products -->

  </div>
  <script language="JavaScript" type="text/javascript" src="./public/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script language="JavaScript" type="text/javascript" src="./public/js/js.js"></script>
</body>

</html>
