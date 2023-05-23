<?php
session_start(); 
require 'connection.php';
if(!isset($_SESSION['hid']))
{
	header('location:../login.php');
}
else {
	if(isset($_POST['request'])){
		$rid = $_POST['rid'];
		$hid = $_SESSION['hid'];
		$bg = $_POST['bg'];
		$check_data = mysqli_query($conn, "SELECT donoid FROM blooddonate where rid='$rid' and hid='$hid'");
		if(mysqli_num_rows($check_data) > 0){
		$sql="INSERT INTO blooddonate (bg, rid, hid) VALUES ('$bg', '$rid', '$hid')";
		if ($conn->query($sql) === TRUE) {
			$msg = 'আপনি রক্তের জন্য অনুরোধ করেছেনঃ '.$bg.'.আবেদনের সর্বশেষ অবস্থা দেখুন.';
			header( "location:../deleteit.php?msg=".$msg);
		} else {
			$error = "সমস্যা: " . $sql . "<br>" . $conn->error;
            header( "location:../deleteit.php?error=".$error );
		}
}else{
		$sql="INSERT INTO blooddonate (bg, rid, hid) VALUES ('$bg', '$rid', '$hid')";
		if ($conn->query($sql) === TRUE) {
			$msg = 'আপনি রক্তের জন্য অনুরোধ করেছেনঃ '.$bg.'.আবেদনের সর্বশেষ অবস্থা দেখুন.';
			header( "location:../deleteit.php?msg=".$msg);
		} else {
			$error = "সমস্যা: " . $sql . "<br>" . $conn->error;
            header( "location:../deleteit.php?error=".$error );
		}
		$conn->close();
	}
}
}
?>