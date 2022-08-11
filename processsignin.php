<?php  session_start();
include "db.php";

if (1==1) {
	$email=$_POST['email'];
	$pass=$_POST['password'];

if ($email=="") {
	echo "<script>
		swal('Error','email is empty','error');
	</script>";
}
else if ($pass=="") {
	echo"email is password";	
}
else{
	$select=mysqli_query($conn,"select * from signup where email='$email' and password='$pass'");
	$num=mysqli_num_rows($select);
	if ($num<1) {
		echo "user not found check your password or email";
	}
	else{

		$_SESSION['email']=$email;
		echo header('Location:logmyin.php');
		//echo "<script>window.location.href='logmyin.php';</script>";
	}
}

}

 ?>