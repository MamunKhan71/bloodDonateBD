<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,700" rel="stylesheet"/>
  <title>Hospital/Clinic</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    body {
      font-family: "Dosis", sans-serif;
      width: 100%;
      height: 100%;
      background: #fff;
      background-size: cover;
    }

.nav-icon {
  font-size: 40px;
  margin-bottom: 10px;
}

.nav-link {
  text-decoration: none;
  font-size: 18px;
  color: #fff;
  font-weight: 500;
  text-transform: uppercase;
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
}


    .nav-icon {
      font-size: 40px;
      margin-bottom: 10px;
    }

    .nav-link {      
      font-family: Li Ador Noirrit;
      text-decoration: none;
      font-size: 18px;
      color: white;
      font-weight: 500;
      text-transform: uppercase;
      
    }
    .nav-item:hover {
      transform: scale(1.05);
      transition: 0.5s;
    }
  </style>
</head>
<body>
  <nav>
    <div class="container">
      <h1 style="font-size: 35px; background-color:red;text-align: center; height: 70px; color:white; font-family: Li Ador Noirrit; text-align:center">হাসতাপাল ড্যাশবোর্ড</h1>
    </div>
  </nav>
  <div class="container">
    <nav class="navbar">
      <ul class="nav-list">
        <li class="nav-item" >
          <i class="nav-icon fas fa fa-user"></i>
          <a href="hprofile.php" class="nav-link">আমার একাউন্ট</a>
        </li>
        <li class="nav-item">
          <i class="nav-icon fas  fa fa-heart"></i>
          <a href="bloodinfo.php" class="nav-link">রক্তের স্টক</a>
        </li>
        <li class="nav-item">
          <i class="nav-icon fas fa fa-tint"></i>
          <a href="bloodrequest.php" class="nav-link">রক্তের অনুরোধ</a>
        </li>
        <li class="nav-item">
          <i class="nav-icon fas fa fa fa-h-square"></i>
          <a href="deleteit.php" class="nav-link">রক্ত লাগবে</a>
        </li>
        <li class="nav-item">
          <i class="nav-icon fas fa fa-check-circle"></i>
          <a href="sentrequestd.php" class="nav-link">রক্তের অনুরোধের অবস্থা</a>
        </li>
        <li class="nav-item">
          <i class="nav-icon fas fa fa-sign-out"></i>
          <a href="logout.php" class="nav-link">লগ-আউট</a>
        </li>
      </ul>
    </nav>
  </div>
  </div>
  <script src="script.js"></script>
</body>
<?php require 'footer.php' ?>
</html>
