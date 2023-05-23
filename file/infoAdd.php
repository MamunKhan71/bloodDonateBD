<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['hid']))
{
	header('location:login.php');
}
else {
	if(isset($_POST['add'])){
		$hid=$_SESSION['hid'];
		$bg=$_POST['bg'];
		$check_data = mysqli_query($conn, "SELECT hid FROM bloodinfo where hid='$hid' && bg='$bg'");
		if(mysqli_num_rows($check_data) > 0){
			$error= 'আপনি ইতোমধ্যেই এই রক্তের গ্রুপটি যোগ করেছেন.';
			header( "location:../bloodinfo.php?error=".$error );
}else{
		$sql = "INSERT INTO bloodinfo (bg, hid) VALUES ('$bg', '$hid')";
		if ($conn->query($sql) === TRUE) {
			$msg = "রক্তের গ্রুপ সংরক্ষিত হয়েছে.";
			header( "location:../bloodinfo.php?msg=".$msg );
		} else {
			$error = "সমস্যা: " . $sql . "<br>" . $conn->error;
            header( "location:../bloodinfo.php?error=".$error );
		}
		$conn->close();
	}
}
}
?>