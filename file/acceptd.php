<?php
include "connection.php";
    $donoid=$_GET['donoid'];
	$status = 'Accepted';
	$sql = "UPDATE blooddonate SET status = '$status' WHERE donoid = '$donoid'";
    if (mysqli_query($conn, $sql)) {
	$msg="আপনি অনুরোধটি গ্রহন করেছেন..";
	header("location:../blooddonate.php?msg=".$msg );
    } else {
    $error= "একটি সমস্যা হয়েছে:: " . mysqli_error($conn);
    header("location:../blooddonate.php?error=".$error );
    }
    mysqli_close($conn);
?>