
<?php session_start(); include "db.php";
	
$selt=mysqli_query($conn, "select * from storiepost");
while($x=mysqli_fetch_array($selt)){
	$email=$x['email'];

	
$s=mysqli_query($conn, "select * from storiepost where email='$email'");



}

$y=mysqli_num_rows($s);
if($y>1){
	$y=1;

}

echo $y;
?>



<!--

<div class="overflow">
	<div class="smalloverflow"></div>
							
</div>

-->