<?php
include "connection.php";
    $bid=$_GET['bid'];
	$sql = "delete from bloodinfo where bid='$bid'";
	if (mysqli_query($conn, $sql)) {
	$msg="আপনি ব্ল্যাড স্যাপল মুছে দিয়েছেন";
	header("location:../bloodinfo.php?msg=".$msg );
    } else {
    $error="মুছতে একটি সমস্যা হয়েছে: " . mysqli_error($conn);
    header("location:../bloodinfo.php?error=".$error );
    }
    mysqli_close($conn);
?>