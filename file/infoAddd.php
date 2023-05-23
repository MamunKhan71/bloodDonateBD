<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['rid']))
{
	header('location:login.php');
}
else {
	if(isset($_POST['add'])){
		$rid=$_SESSION['rid'];
		$bg=$_POST['bg'];
		$check_data = mysqli_query($conn, "SELECT rid FROM blooddinfo where rid='$rid' && bg='$bg'");
		if(mysqli_num_rows($check_data) > 0){
			$error= 'আপনি ইতোমধ্যেই এই রক্তের গ্রুপটি যোগ করেছেন.';
			header( "location:../blooddinfo.php?error=".$error );
}else{
		$sql = "INSERT INTO blooddinfo (bg, rid) VALUES ('$bg', '$rid')";
		if ($conn->query($sql) === TRUE) {
			$msg = "রক্তের গ্রুপ সংরক্ষিত হয়েছে.";
			header( "location:../blooddinfo.php?msg=".$msg );
		} else {
			$error = "সমস্যা: " . $sql . "<br>" . $conn->error;
            header( "location:../blooddinfo.php?error=".$error );
		}
		$conn->close();
	}
}
}
?>