<?php
if(isset($_POST['rregister'])){
	require 'connection.php';
	$rname=$_POST['rname'];
	$remail=$_POST['remail'];
	$rpassword=$_POST['rpassword'];
	$rphone=$_POST['rphone'];
	$rcity=$_POST['rcity'];
	$rbg=$_POST['rbg'];
	$check_email = mysqli_query($conn, "SELECT remail FROM receivers where remail = '$remail' ");
	if(mysqli_num_rows($check_email) > 0){
    $error= 'ইতোমধ্যেই রেজিস্ট্রেশন হয়েছে, দয়া করে লগিন করুন';
    header( "location:../register.php?error=".$error );
}else{
	$sql = "INSERT INTO receivers (rname, remail, rpassword, rphone, rcity, rbg)
	VALUES ('$rname','$remail', '$rpassword', '$rphone', '$rcity', '$rbg')";
	if ($conn->query($sql) === TRUE) {
		$msg = "রেজিস্ট্রেশন সফল হয়েছে, লগিন করুন";
		header( "location:../login.php?msg=".$msg);
	} else {
		$error = "সমস্যা: " . $sql . "<br>" . $conn->error;
        header( "location:../register.php?error=".$error );
	}
	$conn->close();
}
}
?>