<?php
include "connection.php";
    $reqid=$_GET['reqid'];
	$status = "Accepted";
	$sql = "update bloodrequest SET status = '$status' WHERE reqid = '$reqid'";
    if (mysqli_query($conn, $sql)) {
	$msg="আপনি অনুরোধটি গ্রহন করেছেন.";
	header("location:../bloodrequest.php?msg=".$msg );
    } else {
    $error= "একটি সমস্যা হয়েছে: " . mysqli_error($conn);
    header("location:../bloodrequest.php?error=".$error );
    }
    mysqli_close($conn);
?>