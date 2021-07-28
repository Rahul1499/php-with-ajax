<?php

 session_start();
 include("database.php");
 
                    
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone_number = $_POST['number'];
                $gender = $_POST['gender'];
                $file = $_FILES['photo'];
        //    profile upload..
                $filename=$file['name'];
                $filepath=$file['tmp_name'];
                $filerror=$file['error'];
                if($filerror == 0){
                    $destfile = 'upload/'.$filename;
                    //echo"$destfile";
                    move_uploaded_file($filepath,$destfile);
                }
  
  $update = "update `ajaxdb` set `name` = '$name' , `number` ='$phone_number' , `gender` = '$gender' , `pic`='$destfile'  where `email` = '$email' ";
  //print_r($update);die();
    $result = mysqli_query($conn,$update);
  if($result){
    $_SESSION['photo']=$destfile; 
      
   echo json_encode(array('status'=>200,'msg'=>"<div class='alert alert-success alert-dismissible fade show' role='alert'>
   <strong>form updated!</strong> successfully.
   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
   </div>"));
       
  }
   else{
    echo json_encode(array('status'=>500,'msg'=>"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
   <strong>Error!</strong> invalid credentiales.
   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
   </div>"));


}
          
                                
        
        
?>