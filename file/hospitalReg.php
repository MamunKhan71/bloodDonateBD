<?php
require 'connection.php';
if(isset($_POST['hregister'])){
	$hname=$_POST['hname'];
	$hemail=$_POST['hemail'];
	$hpassword=$_POST['hpassword'];
	$hphone=$_POST['hphone'];
	$hcity=$_POST['hcity'];
	$check_email = mysqli_query($conn, "SELECT hemail FROM hospitals where hemail = '$hemail' ");
	if(mysqli_num_rows($check_email) > 0){
    $error= 'ইতোমধ্যেই রেজিস্ট্রেশন হয়েছে, দয়া করে লগিন করুন';
    header( "location:../register.php?error=".$error );
}else{
	$sql = "INSERT INTO hospitals (hname, hemail, hpassword, hphone, hcity)
	VALUES ('$hname','$hemail', '$hpassword', '$hphone', '$hcity')";
	if ($conn->query($sql) === TRUE) {
		$msg = 'রেজিস্ট্রেশন সফল হয়েছে, লগিন করুন';
		header( "location:../login.php?msg=".$msg );
	} else {
		$error = "সমস্যা: " . $sql . "<br>" . $conn->error;
        header( "location:../register.php?error=".$error );
	}
	$conn->close();
}
}
?>