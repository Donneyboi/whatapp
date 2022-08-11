<?php session_start();
include "db.php";
 
 if($_SERVER['REQUEST_METHOD']=="POST"){
     

     $textpost=nl2br($_POST['textpost']);
     $email=$_SESSION['email'];
     $time=time();
     if ($textpost=="" and $_FILES['myfile']==""){
    
     }
     else{
     	$insert=mysqli_query($conn,"insert into post(message,email,time)values('$textpost','$email','$time')");
        $lastid=mysqli_insert_id($conn);
         if ($lastid>0) {
          
          if ($_FILES['myfile']=="") {
            
          }
           
           else{

            foreach ($_FILES['myfile']['name'] as $value => $key) {
            $rand=mt_rand().mt_rand().mt_rand();
            $filename=$rand.$_FILES['myfile']['name'][$value];
            $folder="img/";
            $mainfile=$folder.$rand.$filename;
            $mainfile2=$rand.$filename;
            $filename2=$_FILES['myfile']['tmp_name'][$value];
            if (move_uploaded_file($filename2, $mainfile)) {
             $insertpic=mysqli_query($conn,"insert into postimage(postid,imagename,time)values('$lastid','$mainfile2','$time')");
            }

            }
           }



         }

     }

 }





 ?>