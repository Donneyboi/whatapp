<?php  session_start();
include "db.php";

if (1==1) {

$firstn=$_POST['firstname'];
$lastn= $_POST['lastname'];
$email= $_POST['email'];
$date= $_POST['date'];
$gender= $_POST['gender'];
$country=$_POST['country'];
$pass=$_POST['password'];
$cpass=$_POST['confirmpassword'];

if ($firstn=="") {
	echo "input firstname";
}
else if ($lastn=="") {
	echo "input lastname";
}

else if ($email=="") {
	echo "input email";
}

else if ($date=="") {
	echo "input date";
}

else if ($gender=="") {
	echo "input  gender";
}

else if ($country=="") {
	echo "input country";
}

else if ($pass=="") {
	echo "input password";
}
else if ($pass!=$cpass) {
	echo "password not match";
}

else{
	$select=mysqli_query($conn,"select * from signup where email='$email'");
	$num=mysqli_num_rows($select);
	if ($num>0) {
	echo "your email exit";
	}

	else{

		$insert=mysqli_query($conn," insert into signup(firstname,lastname,email,date,gender,country,password)values
			('$firstn','$lastn','$email','$date','$gender','$country','$pass')");

		if ($insert) {
			$_SESSION['email']=$email;
			header("Location:index:html");
		}
	}
}


}



?>