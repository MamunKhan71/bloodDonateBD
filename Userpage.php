<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,700" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

    <title>User page</title>
    <style>
    * {
      margin: 0;
      padding: 0;
    }

    body {
		font-family: Li Ador Noirrit;

      font-family: "Dosis", sans-serif;
      width: 100%;
      height: 100%;
      background: #fff;
      background-size: cover;
    }

    .container {
      max-width: 100%;
    }

    h1 {
      font-size: 35px;
      background-color: red;
      text-align: center;
      height: 70px;
      color: white;
      font-family: "Li Ador Noirrit";
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .navbar {
      width: 100%;
      height: 100vh;
      background-color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .nav-list {
      display: flex;
      justify-content: center;
      align-items: center;
      list-style: none;
    }

    .nav-item {
      width: 200px;
      height: 200px;
      color: white;
      background-color: red;
      margin: 20px;
      border-radius: 10px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      transition: 0.5s;
    }

    .nav-item:hover {
      transform: scale(1.05);
      background-color: red;
      color: white;
    }
    a{
      color: white;
    }
    a:hover {
      color: white;
    }

    .nav-link {
		font-family: Li Ador Noirrit;

      text-decoration: none;
      font-size: 18px;
      font-weight: 500;
      text-transform: uppercase;
    }
  </style>

  </head>
  <body>
    <div class="container">
      <h1>ইউজার ড্যাশবোর্ড</h1>
    </div>
      <div class="container">
      <nav class="navbar">

<ul class="nav-list">
  <li class="nav-item">
    <i class="fas fa-user"><a href="rprofile.php" class="nav-link"></i> আমার একাউন্ট</a>
  </li>
  <li class="nav-item">
   <i class="fas fa-tint"> <a href="blooddinfo.php" class="nav-link"></i> রক্তের তথ্য</a>
  </li>
  <li class="nav-item">
    <i class="fas fa-heart"><a href="abs.php" class="nav-link"></i> রক্তের স্টক </a>
  </li>
  <li class="nav-item">
    <i class="fas fa-clipboard-check"><a href="sentrequest.php" class="nav-link"></i> আবেদনের অবস্থা</a>
  </li>
  <li class="nav-item">
    <i class="fas fa-hands-helping"><a href="blooddonate.php" class="nav-link"></i> রক্ত দানের অনুরোধ</a>
  </li>
  <li class="nav-item">
   <i class="fas fa-sign-out-alt"> <a href="logout.php" class="nav-link"></i> লগ-আউট</a>
  </li>
</ul>

     </nav>
    </div>
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
