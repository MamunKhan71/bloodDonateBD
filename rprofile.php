<?php
require 'file/connection.php';
session_start();
if(!isset($_SESSION['rid']))
{
  header('location:login.php');
}
else {
	if(isset($_SESSION['rid'])){
		$id=$_SESSION['rid'];
		$sql = "SELECT * FROM receivers WHERE id='$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
	}
}
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Receiver Profile"; ?>
<?php require 'head.php';?>
<style>
    body{
		font-family: Li Ador Noirrit;

    background: white;
    background-size: cover;
    min-height: 0;
    height: 800px;
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
			<div class="col-lg-4 col-md-6 col-sm-8 mb-5">
				<div class="card">
					<div class="media justify-content-center mt-1">
						<img src="image/user.png" alt="profile" class="rounded-circle" width="60" height="60" style="margin-top: 15px;">
					</div>
					<div class="card-body">
					   <form action="file/updateprofile.php" method="post">
					   	<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">গ্রহীতার নাম</label>
						<input type="text" name="rname" value="<?php echo $row['rname']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">গ্রহীতার ইমেইল</label>
						<input type="email" name="remail" value="<?php echo $row['remail']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">গ্রহীতার পাসওয়ার্ড</label>
						<input type="text" name="rpassword" value="<?php echo $row['rpassword']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">গ্রহীতার মোবাইল নাম্বার</label>
						<input type="text" name="rphone" value="<?php echo $row['rphone']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">গ্রহীতার শহর</label>
						<input type="text" name="rcity" value="<?php echo $row['rcity']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">গ্রহীতার রক্তের গ্রুপ</label>
						<select class="form-control mb-3" name="bg" required>
                             <option selected><?php echo $row['rbg']; ?></option>
                             <option>A-</option>
                             <option>A+</option>
                             <option>B-</option>
                             <option>B+</option>
                             <option>AB-</option>
                             <option>AB+</option>
                             <option>O-</option>
                             <option>O+</option>
                        </select>
						<input type="submit" name="update" class="btn btn-block btn-primary" style="background-color: red; border:0px" value="আপডেট">
					   </form>
					</div>
					<a href="Userpage.php" class="text-center">বাতিল</a><br>
				</div>
			</div>
		</div>
	</div>
	<?php require 'footer.php'; ?>
</body>
</html>