<?php 
session_start();
require 'file/connection.php';
if(isset($_GET['search'])){
    $searchKey = $_GET['search'];
    $sql = "SELECT blooddinfo.*, receivers.* from blooddinfo, receivers where blooddinfo.rid=receivers.id && bg='$searchKey'";
}else{
    $sql = "SELECT blooddinfo.*, receivers.* from blooddinfo, receivers where blooddinfo.rid=receivers.id";
}
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Available Blood Samples"; ?>
<?php require 'head.php'; ?><style>
    body{
        font-family: Li Ador Noirrit;

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
        
        <div class="row col-lg-8 col-md-8 col-sm-12 mb-3">
            <form method="get" action="" style="margin-top:-20px; ">
            <label class="font-weight-bolder">রক্তের গ্রুপ নির্বাচন করুন:</label>
               <select name="search" class="form-control">
               <option><?php echo @$_GET['search']; ?></option>
               <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
               </select><br>
               <a href="deleteit.php" class="btn btn-info mr-4" style="background-color:red;border:0px"> রিসেট</a>
               <input type="submit" name="submit" class="btn btn-info" value="সার্চ" style="background-color:red;border:0px">
           </form>
        </div>

        <table class="table  table-striped rounded mb-5">
            <tr><th colspan="7" class="title">রক্তের স্যাম্পল সমুহ</th></tr>
            <tr>
                <th>#</th>
                <th>দাতার নাম</th>
                <th>দাতার শহর</th>
                <th>দাতার ইমেইল</th>
                <th>দাতার মোবাইল</th>
                <th>দাতার গ্রুপ</th>
                <th>পদক্ষেপ</th>
            </tr>

            <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">কিছু দেখানোর নেই</b>';
            }
            ?>
            </div>

        <?php while($row = mysqli_fetch_array($result)) { ?>

            <tr>
                <td><?php echo ++$counter;?></td>
                <td><?php echo $row['rname'];?></td>
                <td><?php echo ($row['rcity']); ?></td>
                <td><?php echo ($row['remail']); ?></td>
                <td><?php echo ($row['rphone']); ?></td>
                <td><?php echo ($row['bg']); ?></td>

                <?php $bdid= $row['bdid'];?>
                <?php $rid= $row['rid'];?>
                <?php $bg= $row['bg'];?>
                <form action="file/requestd.php" method="post">
                    <input type="hidden" name="bdid" value="<?php echo $bdid; ?>">
                    <input type="hidden" name="rid" value="<?php echo $rid; ?>">
                    <input type="hidden" name="bg" value="<?php echo $bg; ?>">

                <?php if (isset($_SESSION['rid'])) { ?>
                <td><a href="javascript:void(0);" class="btn btn-info hospital" style="background-color:red;border:0px">রক্তদানের অনুরোধন</a></td>
                <?php } else {(isset($_SESSION['hid']))  ?>
                <td><input type="submit" name="request" class="btn btn-info" style="background-color:red;border:0px" value="স্যাম্পল অনুরোধ"></td>
                <?php } ?>
                
                </form>
            </tr>

        <?php } ?>
        </table>
    </div>
        <script type="text/javascript">
    $('.receivers').on('click', function(){
        alert("হাসপাতালের ব্যবহারকারী রক্তের অনুরোধ করতে পারবেন না.");
    });
</script>
    <?php require 'footer.php' ?>
</body>
</html>
