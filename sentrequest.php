<?php 
require 'file/connection.php'; 
session_start();
  if(!isset($_SESSION['rid']))
  {
  header('location:login.php');
  }
  else {
    $rid = $_SESSION['rid'];
    $sql = "select bloodrequest.*, hospitals.* from bloodrequest, hospitals where rid='$rid' && bloodrequest.hid=hospitals.id";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Sent Requests"; ?>
<?php require 'head.php'; ?>
<style>
    body{
		font-family: Li Ador Noirrit;

    background-color: #fff;
    background-size: cover;
    min-height: 0;
    height: 650px;
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

	<table class="table table-striped rounded mb-5">
		<tr><th colspan="8" class="title">অনুরোধ পাঠান</th></tr>
		<tr>
			<th>#</th>
			<th>নাম</th>
			<th>ইমেইল</th>
			<th>শহর</th>
			<th>মোবাইল</th>
			<th>রক্তের গ্রুপ</th>
			<th>বর্তমান অবস্থা</th>
			<th>পদক্ষেপ</th>
		</tr>

		    <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">আপনি কোনো অনুরোধ পাঠাননি </b>';
            }
            ?>
            </div>

		<?php while($row = mysqli_fetch_array($result)) { ?>

		<tr>
			<td><?php echo ++$counter;?></td>
			<td><?php echo $row['hname'];?></td>
			<td><?php echo $row['hemail'];?></td>
			<td><?php echo $row['hcity'];?></td>
			<td><?php echo $row['hphone'];?></td>
			<td><?php echo $row['bg'];?></td>
			<td><?php echo $row['status'];?></td>
			<td><?php if($row['status'] == 'Accepted'){ ?>
			<?php }
			else{ ?>
				<a href="file/cancel.php?reqid=<?php echo $row['reqid'];?>" class="btn btn-danger">বাতিল</a>
			<?php } ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
    <?php require 'footer.php'; ?>
</body>
</html>
<?php } ?>