<?php
include "connection.php";
    $reqid=$_GET['reqid'];
	$sql = "delete from bloodrequest where reqid='$reqid'";
	if (mysqli_query($conn, $sql)) {
	$msg="আপনার রক্তের অনুরোধটি বাতিল করেছেন.";
	header("location:../sentrequest.php?msg=".$msg );
    } else {
    $error="বাতিল করতে একটি সমস্যা হয়েছে: " . mysqli_error($conn);
    header("location:../sentrequest.php?error=".$error );
    }
    mysqli_close($conn);
?>