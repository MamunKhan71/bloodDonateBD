<?php
include "connection.php";
    $bdid=$_GET['bdid'];
	$sql = "delete from blooddinfo where bdid='$bdid'";
	if (mysqli_query($conn, $sql)) {
	$msg="আপনি একটি ব্ল্যাড স্যাম্পল মুছে দিয়েছেন.";
	header("location:../blooddinfo.php?msg=".$msg );
    } else {
    $error="মুছতে একটি সমস্যা হয়েছে: " . mysqli_error($conn);
    header("location:../blooddinfo.php?error=".$error );
    }
    mysqli_close($conn);
?>