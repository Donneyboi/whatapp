<?php
session_start();
include "db.php";

if (1==1) {
	$storie=nl2br($_POST['smessage']);
	 $email=$_SESSION['email'];


     if ($storie==""  and $_FILES['files']=="") {
     	
     }
     else{
     	$insertstorie=mysqli_query($conn, "insert into storiepost(email,message)values('$email','$storie')");
         $lastid=mysqli_insert_id($conn);
         if ($lastid>0) {

        if ($_FILES['files']=="") {
        	
        }


        else{
        	  foreach ($_FILES['files']['name'] as $value => $key) {

        	 $rand=mt_rand().mt_rand().mt_rand();
            $filename=$rand.$_FILES['files']['name'][$value];
            $folder="storieimage/";
            $mainfile=$folder.$rand.$filename;
            $mainfile2=$rand.$filename;
              $filename2=$_FILES['files']['tmp_name'][$value];
            if (move_uploaded_file($filename2, $mainfile)) {
            //	 $insertstorie=mysqli_query($conn,"insert into storieimage(email,postid,storieimagename)values('$email','$lastid','$storie')");

             $insertstorie=mysqli_query($conn,"insert into storieimage(email,postid,storieimagename)values('$email','$lastid','$mainfile2')");

             if ($insertstorie) {
             	
             }
             else{
             //	echo mysqli_error($conn);
             }
            }
        	
        	  }
         }
        }
     }


}


  ?>