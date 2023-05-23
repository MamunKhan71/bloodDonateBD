<?php
session_start(); 
require 'connection.php';
if(!isset($_SESSION['rid']))
{
	header('location:../login.php');
}
else {
	if(isset($_POST['request'])){
		$hid = $_POST['hid'];
		$rid = $_SESSION['rid'];
		$bg = $_POST['bg'];
		$check_data = mysqli_query($conn, "SELECT reqid FROM bloodrequest where hid='$hid' and rid='$rid'");
		if(mysqli_num_rows($check_data) > 0){
		$sql="INSERT INTO bloodrequest (bg, hid, rid) VALUES ('$bg', '$hid', '$rid')";
		if ($conn->query($sql) === TRUE) {
			$msg = 'আপনি রক্তের জন্য অনুরোধ করেছেনঃ '.$bg.'.আবেদনের সর্বশেষ অবস্থা দেখুন.';
			header( "location:../abs.php?msg=".$msg);
		} else {
			$error = "সমস্যা: " . $sql . "<br>" . $conn->error;
            header( "location:../abs.php?error=".$error );
		}
}else{
		$sql="INSERT INTO bloodrequest (bg, hid, rid) VALUES ('$bg', '$hid', '$rid')";
		if ($conn->query($sql) === TRUE) {
			$msg = 'আপনি রক্তের জন্য অনুরোধ করেছেনঃ '.$bg.'.আবেদনের সর্বশেষ অবস্থা দেখুন.';
			header( "location:../abs.php?msg=".$msg);
		} else {
			$error = "সমস্যা: " . $sql . "<br>" . $conn->error;
            header( "location:../abs.php?error=".$error );
		}
		$conn->close();
	}
}
}
?>