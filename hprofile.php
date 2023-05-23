<?php
require 'file/connection.php';
session_start();
if(!isset($_SESSION['hid']))
{
  header('location:login.php');
}
else {
	if(isset($_SESSION['hid'])){
		$id=$_SESSION['hid'];
		$sql = "SELECT * FROM hospitals WHERE id='$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
	}
}
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | My Profile"; ?>
<?php require 'head.php';?>
<style>
    body{
	font-family: Li Ador Noirrit;
    background: white;
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

		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-4 col-sm-6 mb-5">
				<div class="card">
					<div class="media justify-content-center mt-1">
						<img src="image/hospital.png" alt="profile" class="rounded-circle" width="70" height="70" style="margin-top: 15px">
					</div>
					<div class="card-body">
					   <form action="file/updateprofile.php" method="post">
					   	<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">হাসপাতাল নাম</label>
						<input type="text" name="hname" value="<?php echo $row['hname']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">হাসপাতাল ইমেইল</label>
						<input type="email" name="hemail" value="<?php echo $row['hemail']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">হাসপাতাল পাসওয়ার্ড</label>
						<input type="text" name="hpassword" value="<?php echo $row['hpassword']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">হাসতাপাল নাম্বার</label>
						<input type="text" name="hphone" value="<?php echo $row['hphone']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">হাসতাপাল শহর</label>
						<input type="text" name="hcity" value="<?php echo $row['hcity']; ?>" class="form-control mb-3">
						<input type="submit" name="update" style="background-color:red; border: 0px;" class="btn btn-block btn-primary " value="হালনাগাদ">
					   </form>
					</div>
					<a href="hospitalpage.php" style="color: red" class="text-center">বাতিল</a><br>
				</div>
			</div>
		</div>
	</div>
	<?php require 'footer.php'; ?>
</body>
</html>