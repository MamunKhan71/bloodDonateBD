<?php 
  require 'file/connection.php';
  session_start();
  if(!isset($_SESSION['hid']))
  {
  header('location:login.php');
  }
  else {
?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Add blood samples"; ?>
<?php require 'head.php'; ?>
<style>
    body{
      font-family: Li Ador Noirrit;
    background: white;
    background-size: cover;
    min-height: 0;
    height: 100%;
  }
.login-form{
    font-family: Li Ador Noirrit;
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
}
</style>
<body>
  <?php require 'header.php'; ?>

    <div class="container cont">

      <?php require 'message.php'; ?>

      <div class="row justify-content-center">
          
         <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <div class="card">
            <div class="card-header title">আপনার হাসপাতালে নতুন ব্লাড গ্রুপ যুক্ত করুন</div>
        <div class="card-body">
        <form action="file/infoAdd.php" method="post">
          <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" title="click to see">সাধারন শর্তাবলী </a><br>
          <div class="collapse" id="collapseExample">
          আপনার ডাক্তার, নার্স বা প্রশিক্ষিত ফ্লেবোটোমিস্টের দ্বারা প্যাথলজি সংগ্রহ কেন্দ্র, ক্লিনিক বা হাসপাতালে আপনার রক্তের নমুনা পরীক্ষা করা থাকলে। রক্তের নমুনাগুলি সাধারণত কনুইয়ের ভিতর থেকে নেওয়া হয় যেখানে শিরাগুলি সাধারণত পৃষ্ঠের কাছাকাছি থাকে। যদি সুই ঢোকানোর আগে, এলাকাটি একটি এন্টিসেপটিক কাপড় দিয়ে পরিষ্কার করা হয় এবং রক্তের নমুনা সঠিক প্রিজারভেটিভযুক্ত টিউবে স্থানান্তর করা হয় তাহলে আপনার হাসপাতালে উপলব্ধ আপনার রক্তের গ্রুপ আপনার ব্লাড ব্যাঙ্কে যোগ করুন।
        </div>
          <input type="checkbox" name="condition" value="agree" required> রাজি<br><br>
          <select class="form-control" name="bg" required="">
                
                <option>A-</option>
                <option>A+</option>
                <option>B-</option>
                <option>B+</option>
                <option>AB-</option>
                <option>AB+</option>
                <option>O-</option>
                <option>O+</option>
          </select><br>
          <input type="submit" name="add" value="যোগ করুন" class="btn btn-primary btn-block" style="background-color: red; border:0px"><br>
          <a href="hospitalpage.php" class="text-centre" >বাতিল করুন</a><br>
        </form>
         </div>
       </div>
     </div>

<?php   if(isset($_SESSION['hid'])){
    $hid=$_SESSION['hid'];
    $sql = "select * from bloodinfo where hid='$hid'";
    $result = mysqli_query($conn, $sql);
  }
  ?>
    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <table class="table table-striped table-responsive">
            <th colspan="4" class="title">ব্লাড ব্যাংক</th>
            <tr>
              <th>#</th>

              <th>রক্তের স্যাম্পল</th>
              <th>কার্যক্রম</th>
            </tr>
            <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">দেখানোর মতো কিছুই নেই</b>';
            }
            ?>
            </div>
            <?php while($row = mysqli_fetch_array($result)) { ?>
            <tr>
              <td><?php echo ++$counter; ?></td>

              <td><?php echo $row['bg'];?></td>
              <td><a href="file/delete.php?bid=<?php echo $row['bid'];?>" class="btn" style="background-color:red; color: white; border:0px">ডিলিট</a></td>
            </tr>
            <?php } ?>
          </table>
      </div>

   </div>
</div>
<?php require 'footer.php' ?>
</body>
<?php } ?>