<?php
include "connection.php";
    $reqid=$_GET['reqid'];
	$status = "Rejected";
	$sql = "update bloodrequest SET status = '$status' WHERE reqid = '$reqid'";
    if (mysqli_query($conn, $sql)) {
	$msg="আপনি অনুরোধটি প্রত্যাখ্যান করেছেন.";
	header("location:../bloodrequest.php?msg=".$msg );
    } else {
    $error= "স্ট্যাটাস চেইঞ্জ করতে একটি সমস্যা হয়েছে: " . mysqli_error($conn);
    header("location:../bloodrequest.php?error=".$error );
    }
    mysqli_close($conn);
?>