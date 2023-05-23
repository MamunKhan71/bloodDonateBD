<?php 
session_start();
if (isset($_SESSION['hid'])) {
  header("location:hospitalpage.php");
}elseif (isset($_SESSION['rid'])) {
  header("location:userpage.php");
}else{
?>
<!DOCTYPE html>
<html>
<head>
  
  <style>
    body{
    font-family: Li Ador Noirrit;
    background-size: cover;
    min-height: 0;
    height: 650px;
  }
  .login-form {
    font-family: Li Ador Noirrit;

    width: 100%;
    max-width: 450px;
    height: 100%;
    max-height: 450px;
    background-color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
</style>
</head>
<?php $title="Bloodbank | Login"; ?>
<?php require 'head.php'; ?>
<body>
  <?php require 'header.php'; ?>

    <div class="container cont">
      
      <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">

          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px;">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#hospitals" style="font-family: Li Ador Noirrit">হাসপাতাল</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#receivers"  style="font-family: Li Ador Noirrit">ইউজার</a>
     </li>
    </ul>

  <div style="display: flex; justify-content: center;">
  <div class="tab-content">
    <div class="tab-pane container active" id="hospitals">
      <form action="file/hospitalLogin.php" class="login-form" method="post">
        <label class="text-muted font-weight-bold" style="color: red;">হাসপাতাল ইমেইল</label>
        <input type="email" name="hemail" placeholder="হাসপাতাল ইমেইল" class="form-control mb-4">
        <label class="text-muted font-weight-bold" style="color: red;">পাসওয়ার্ড</label>
        <input type="password" name="hpassword" placeholder="হাসপাতাল পাসওয়ার্ড" class="form-control mb-4">
        <input type="submit" name="hlogin" value="লগিন" class="btn btn-primary btn-block mb-4" style="background-color: red;">
      </form>
    </div>
    <div class="tab-pane container fade" id="receivers">
  <form action="file/receiverLogin.php" class="login-form" method="post">
    <label class="text-muted font-weight-bold" style="color: red;">ইউজার ইমেইল</label>
    <input type="email" name="remail" placeholder="ইউজার ইমেইল" class="form-control mb-4">
    <label class="text-muted font-weight-bold" style="color: red;">ইউজার পাসওয়ার্ড</label>
    <input type="password" name="rpassword" placeholder="ইউজার পাসওয়ার্ড" class="form-control mb-4">
    <input type="submit" name="rlogin" value="লগিন" class="btn btn-primary btn-block mb-4" style="background-color: red;">
  </form>
</div>
</div>
</div>
    <a href="register.php" class="text-center mb-4" title="Click here"  style="font-family: Li Ador Noirrit">একাউন্ট নেই?</a>
</div>
</div>

<?php require 'footer.php' ?>
</body>
</html>
<?php } ?>