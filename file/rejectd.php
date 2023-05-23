<?php
include "connection.php";
    $donoid=$_GET['donoid'];
	$status = "Rejected";
	$sql = "UPDATE blooddonate SET status = '$status' WHERE donoid = '$donoid'";
    if (mysqli_query($conn, $sql)) {
	$msg="আপনি অনুরোধটি প্রত্যাখ্যান করেছেন.";
	header("location:../blooddonate.php?msg=".$msg );
    } else {
    $error= "স্ট্যাটাস চেইঞ্জ করতে একটি সমস্যা হয়েছে:" . mysqli_error($conn);
    header("location:../blooddonate.php?error=".$error );
    }
    mysqli_close($conn);
?>