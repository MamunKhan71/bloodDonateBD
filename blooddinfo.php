<?php 
  require 'file/connection.php';
  session_start();
  if(!isset($_SESSION['rid']))
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
            <div class="card-header title">আপনার কমিউনিটিতে আপনার রক্ত যোগ করুন</div>
        <div class="card-body">
        <form action="file/infoAddd.php" method="post">
          <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" title="click to see">সাধারন শর্তাবলি </a><br>
          <div class="collapse" id="collapseExample">
          যদি আপনার বা আপনার বন্ধু/পরিবারের উল্লিখিত (নীচে) রক্ত থাকে তবে শুধুমাত্র রক্তের গ্রুপ যোগ করুন (কোনও স্প্যাম নেই)।তাই, হাসপাতাল আপনার বা আপনার বন্ধুদের/পরিবারের রক্তের প্রয়োজন হলে আপনার প্রদত্ত বিবরণের সাথে আপনার সাথে যোগাযোগ করতে পারে। একটি প্যাথলজি সংগ্রহ কেন্দ্র, ক্লিনিক বা হাসপাতালে আপনার ডাক্তার, নার্স বা প্রশিক্ষিত ফ্লেবোটোমিস্ট দ্বারা আপনার রক্তের নমুনা পরীক্ষা করা উচিত। রক্তের নমুনা সাধারণত কনুইয়ের ভিতর থেকে নেওয়া হয় যেখানে শিরাগুলি সাধারণত পৃষ্ঠের কাছাকাছি থাকে। নিশ্চিত করুন যে আপনি রক্তদান করার সিদ্ধান্ত নেওয়ার আগে অন্তত এক সপ্তাহ ধরে স্বাস্থ্যকর খাদ্য (ধূমপান/মদ্যপান করবেন না) খাচ্ছেন। টিক চিহ্নে ক্লিক করে আপনি প্রতিশ্রুতি দিচ্ছেন যে আপনি প্রতিশ্রুতি দিচ্ছেন যে আপনি উপরের নির্দেশাবলী পড়েছেন এবং গ্রহণ করেছেন এবং স্বেচ্ছায় রক্তদান করতে ইচ্ছুক।<br><br>
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
          <input type="submit" name="add" value="যোগ" class="btn btn-primary btn-block" style="background-color:red;border:0px"><br>
          <a href="Userpage.php" class="float-right" title="click here">বাতিল</a>
        </form>
         </div>
       </div>
     </div>

<?php   if(isset($_SESSION['rid'])){
    $rid=$_SESSION['rid'];
    $sql = "SELECT * from blooddinfo where rid='$rid'";
    $result = mysqli_query($conn, $sql);
  }
  ?>
    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <table class="table table-striped table-responsive">
            <th colspan="4" class="title">ইউজার</th>
            <tr>
              <th>#</th>

              <th>ইউজার</th>
              <th>পদক্ষেপ</th>
            </tr>
            <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">দেখানোর মতো কিছু নেই</b>';
            }
            ?>
            </div>
            <?php while($row = mysqli_fetch_array($result)) { ?>
            <tr>
              <td><?php echo ++$counter; ?></td>

              <td><?php echo $row['bg'];?></td>
              <td><a href="file/deleted.php?bdid=<?php echo $row['bdid'];?>" class="btn btn-danger" style="background-color:red;border:0px">ডিলিট</a></td>
            </tr>
            <?php } ?>
          </table>
      </div>

   </div>
</div>
<?php require 'footer.php' ?>
</body>
<?php } ?>