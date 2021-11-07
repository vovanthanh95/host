<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>QTI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php $_SERVER ['DOCUMENT_ROOT']; ?>/mvc/public/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php $_SERVER ['DOCUMENT_ROOT']; ?>/mvc/public/css/style.css" />

</head>

<body>
  <div class="container">
    <div class=row">
      <header class="hd col-md-12">
      </header>
      <nav class="nav-main col-md-12">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link" href="/mvc/home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/mvc/home/login">Menu2</a></li>
          <li class="nav-item"><a class="nav-link" href="">Menu3</a></li>
          <li class="nav-item"><a class="nav-link" href="">Menu4</a></li>
          <li class="nav-item"><a class="nav-link" href="">Menu5</a></li>
          <li class="nav-item"><a class="nav-link" href="">Menu6</a></li>
        </ul>
      </nav>
      <div class="row xxx">
        <div class="col-md-9 content">
          <section>
            <?php
                        require_once "./mvc/views/page/" . $data["content"] . ".php";
                        ?>
          </section>
        </div>
        <div class="col-md-3 sub-menu">
          <aside>
            <?php
                        require_once "./mvc/views/page/" . $data["sub-menu"] . ".php";
                        ?>
          </aside>
        </div>
      </div>
      <footer class="ft col-md-12">
        <p>Bản quyền<br />
          <a href="#">Liên hệ !</a>
        </p>
      </footer>
    </div>
  </div>
  <script language="JavaScript" type="text/javascript" src="<?php $_SERVER ['DOCUMENT_ROOT']; ?>/mvc/public/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script language="JavaScript" type="text/javascript" src="<?php $_SERVER ['DOCUMENT_ROOT']; ?>/mvc/public/js/js.js"></script>
</body>

</html>
