<?php
include "connection.php";
    $donoid=$_GET['donoid'];
	$sql = "DELETE from blooddonate where donoid='$donoid'";
	if (mysqli_query($conn, $sql)) {
	$msg="আপনার রক্তের অনুরোধটি বাতিল করেছেন.";
	header("location:../sentrequestd.php?msg=".$msg );
    } else {
    $error="বাতিল করতে একটি সমস্যা হয়েছে: " . mysqli_error($conn);
    header("location:../sentrequestd.php?error=".$error );
    }
    mysqli_close($conn);
?>