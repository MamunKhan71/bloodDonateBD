<?php 
require 'file/connection.php'; 
session_start();
if (!isset($_SESSION['hid'])) {
    header('location:login.php');
} else {
    $hid = $_SESSION['hid'];
    $sql = "select bloodrequest.*, receivers.* from bloodrequest, receivers where hid='$hid' && bloodrequest.rid=receivers.id";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php $title = "Bloodbank | Blood Requests"; ?>
<?php require 'head.php'; ?>
<style>
    body {
        font-family: Li Ador Noirrit;
        background: white;
        background-size: cover;
        min-height: 0;
        height: 650px;
    }

    .login-form {
        font-family: Li Ador Noirrit;
        width: calc(100% - 20px);
        max-height: 650px;
        max-width: 450px;
        background-color: white;
		
    }

    .table-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

</style>
<body>
    <?php require 'header.php'; ?>
    <div class="container cont">
        <?php require 'message.php'; ?>

        <div class="table-container">
		<table class="table  table-striped rounded mb-5 centered-table">
                <tr>
                    <th colspan="9" class="title">রক্তের আবেদন সমূহ</th>
                </tr>
                <tr>
                    <th>#</th>
                    <th>নাম</th>
                    <th>ইমেইল</th>
                    <th>শহর</th>
                    <th>মোবাইল</th>
                    <th>রক্তের গ্রুপ</th>
                    <th>বর্তমান অবস্থা</th>
                    <th colspan="2">পদক্ষেপ</th>
                </tr>
                <div>
                    <?php
                    if ($result) {
                        $row = mysqli_num_rows($result);
                        if ($row) {
                            // echo "<b> Total ".$row." </b>";
                        } else {
                            echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">বর্তমানে কেউ আবেদন করেনি </b>';
                        }
                    }
                    ?>
                </div>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo ++$counter; ?></td>
                    <td><?php echo $row['rname']; ?></td>
                    <td><?php echo $row['remail']; ?></td>
                    <td><?php echo $row['rcity']; ?></td>
                    <td><?php echo $row['rphone']; ?></td>
                    <td><?php echo $row['bg']; ?></td>
                    <td><?php echo 'You have ' . $row['status']; ?></td>
                    <td>
                        <?php if ($row['status'] == 'Accepted') { ?>
                            <a href="" class="btn btn-success disabled">গৃহীত</a>
                        <?php } else { ?>
                            <a href="file/accept.php?reqid=<?php echo $row['reqid']; ?>" class="btn btn-success">গ্রহন করুন</a>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if ($row['status'] == 'Rejected') { ?>
                            <a href="" class="btn btn-danger disabled">বাতিল</a>
                        <?php } else { ?>
                            <a href="file/reject.php?reqid=<?php echo $row['reqid']; ?>" class="btn btn-danger">বাতিল করুন</a>
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <?php require 'footer.php'; ?>
</body>
</html>
<?php } ?>
