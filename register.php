<?php 
session_start();
if (isset($_SESSION['hid'])) {
  header("location:bloodrequest.php");
}elseif (isset($_SESSION['rid'])) {
  header("location:sentrequest.php");
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
  body {
    font-family: Li Ador Noirrit;
    background-size: cover;
    min-height: 100vh;
    align-items: center;
  }
  .nav-font{
    font-family: Li Ador Noirrit;
  }
  </style>
</head>
<?php $title="Bloodbank | Register"; ?>
<?php require 'head.php'; ?>
<body>
  <?php include 'header.php'; ?>

    <div class="container cont">

    <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px">
              <li class="nav-item">
                <a class="nav-link active nav-font" data-toggle="tab" href="#hospitals">হাসপাতাল</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link nav-font" data-toggle="tab" href="#receivers">ইউজার</a>
              </li>
            </ul>

    <div class="tab-content">

       <div class="tab-pane container active nav-font" id="hospitals" >

        <form action="file/hospitalReg.php" method="post" enctype="multipart/form-data">
          <input type="text" name="hname" placeholder="হাসপাতাল নাম" class="form-control mb-3" required>
          <input type="text" name="hcity" placeholder="হাসপাতাল শহর" class="form-control mb-3" required>
          <input type="tel" name="hphone" placeholder="হাসপাতাল মোবাইল" class="form-control mb-3">
          <input type="email" name="hemail" placeholder="হাসপাতাল ইমেইল" class="form-control mb-3" required>
          <input type="password" name="hpassword" placeholder="হাসপাতাল পাসওয়ার্ড" class="form-control mb-3" ">
          <input type="submit" name="hregister" value="রেজিস্টার" class="btn btn-primary btn-block mb-4" style="background-color: red;
style="background-color: red;>
        </form>

       </div>


       <div class="tab-pane container fade nav-font" id="receivers">

         <form action="file/receiverReg.php" method="post" enctype="multipart/form-data">
          <input type="text" name="rname" placeholder="ইউজার নাম" class="form-control mb-3" required>
          <select name="rbg" class="form-control mb-3" required>
                <option disabled="" selected="">রক্তের গ্রুপ</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
          </select>
          <input type="text" name="rcity" placeholder="শহর" class="form-control mb-3" required>
          <input type="tel" name="rphone" placeholder="মোবাইল নাম্বার" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
          <input type="email" name="remail" placeholder="ই-মেইল" class="form-control mb-3" required>
          <input type="password" name="rpassword" placeholder="পাসওয়ার্ড" class="form-control mb-3" required minlength="6">
          <input type="submit" name="rregister" value="রেজিস্টার" class="btn btn-primary btn-block mb-4" style="background-color:red">
        </form>

       </div>
    </div>
    <a href="login.php" class="text-center mb-4" title="Click here" style="font-family:Li Ador Noirrit ">ইতমধ্যেই একাউন্ট রয়েছে?</a>
</div>
</div>
</div>
</div>
<?php require 'footer.php' ?>
</body>
</html>
<?php } ?>