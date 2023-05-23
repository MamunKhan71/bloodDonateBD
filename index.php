<!DOCTYPE html>
<html>
<head>
  <title>বিবিএমএস | হোম পেইজ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <script src="js/jquery-3.3.1.min.js"></script>
  <meta name="robots" content="index, follow" />
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-351688KRBD"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <style>
    /* Custom styles */
    body {
      font-family: Li Ador Noirrit;
      background-color: #ffffff;
    }

    .navbar {
      padding-left: 100px;
      padding-right: 100px;
      background-color: #ff1a04;
    }

    .navbar-brand {
      color: #fff;
      font-weight: bold;
    }

    .carousel-inner img {
      width: 100%;
      height: 800px;
      object-fit: contain;
      margin-bottom: 30px;
    }

    #about {
      background-color: #fff;
      padding: 50px 0;
    }

    .aboutimg {
      width: 100%;
      max-height: 400px;
    }

    #contact {
      background-color: #dc3545;
      padding: 50px 0;
    }

    .contact-info {
      color: #fff;
    }

    .contact-info a {
      color: #fff;
      text-decoration: none;
    }

    hr {
      border: 0;
      text-align: center;
      &:before {
        content: "\2022 \2022 \2022 \2022 \2022 \2022\2022\2022";
        color: #e2ede9;
      }
    }

    .gap {
      padding: 40px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">বাংলাদেশ ব্লাড ব্যাংক</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#home">হোম <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">আমাদের সম্পর্কে</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">যোগাযোগ</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="login.php">লগিন<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="register.php">রেজিস্টার<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>

  <div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/slide-1.jpg" alt="Los Angeles">
      </div>
      <div class="carousel-item">
        <img src="image/cc1.jpg" alt="Chicago">
      </div>
      <div class="carousel-item">
        <img src="image/blog-4.jpg" alt="New York">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <section class="my-5" id="about">
    <div class="py-3 d-flex flex-column align-items-center">
      <h2 class="text-center">আমাদের সম্পর্কে</h2>
      <hr>
    </div>
    <div class="gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <img src="image/about1.jpg" class="img-fluid aboutimg">
          </div>
          <div class="col-lg-6 col-md-6 col-12 d-flex flex-column justify-content-center">
            <h1>তুচ্ছ নয় রক্তদান <br> <h3>বাঁচাতে পারে একটি প্রাণ<h3></h1>
              <p>প্রত্যেক মানুষের দ্বারা সকল কাজ সম্ভব হয় না। এমন হতে পারে যে আপনার অনেক বড় বড় মহৎ কাজের ইচ্ছে আছে, কিন্তু আপনার সামর্থ্য নেই। কিন্তু একটি কাজ যা আমরা সকলেই করতে পারি, আর সেটা হলো রক্তদান।</p>
              <h3 class="py-3"></h3>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="my-5" id="contact" style="background-color: red">
    <div class="py-3">
      <h2 class="text-center" style="color:white">যোগাযোগ করুন</h2><hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
          <p class="text-center contact-info">মোবাইল ঃ ০১৬৪৩০৯১৬০৬ <br><br> ই-মেইলঃ <a href="mailto:mailtoviruszzwarning@gmail.com" >savelife@bbms.com</a><br><br> ঠিকানাঃ <a href="https://www.github.com/VirusZzHkP">ড্যাফোডিল ইন্টারন্যাশনাল ইউনিভার্সিটি, বিরুলিয়া, সাভার, ঢাকা</a></p>
        </div>
      </div>
    </div>

  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script>
    $(document).ready(function() {
      // Smooth scrolling for navigation links
      $('a.nav-link[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
          event.preventDefault();
          $('html, body').stop().animate({
            scrollTop: target.offset().top
          }, 800, 'easeInOutExpo');
        }
      });
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<?php require 'footer.php' ?>

</html>
