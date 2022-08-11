<?php session_start();
include "db.php";
if ($_SERVER['REQUEST_METHOD']=="POST"){

	$mylike=$_POST['like'];
	$email=$_SESSION['email'];
	$time=time();


	$select=mysqli_query($conn, "select * from likes where email='$email' and postid='$mylike'");
	$num=mysqli_num_rows($select);
	if ($num>0) {
		$delect=mysqli_query($conn,"delete from likes where email='$email' and postid='$mylike'");
	}

	else{
		$insertlikes=mysqli_query($conn," insert into likes(email,postid,time)value('$email','$mylike','$time')");

	}
}





  ?>