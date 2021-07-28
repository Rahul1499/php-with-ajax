<?php
include("database.php");
  $email = $_POST['email'];
  $password = $_POST['password'];
  $type = $_POST['type'];

      $password=hash('sha256',$password);
      $sql="SELECT * From `ajaxdb` WHERE `email`='$email' and `password`='$password' and `type`='$type'";
        
      $result=mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
      // print_r($row);die();
       $count = mysqli_num_rows($result); 
       
        if($count==1){
            if($type == 'newuser'){   
                  session_start();
                  $_SESSION['loggedin']=true;
                  $_SESSION['type']=$type;
                  $_SESSION['email'] = $email;
                  $_SESSION['name'] = $row['name'];
                $_SESSION['photo'] = $row['pic'];
                $_SESSION['id']=$row['id'];
               
            
              echo json_encode(array('status'=>200,'type'=>"newuser"));
            
            }
             else if($type == 'admin'){   
              session_start();
                  $_SESSION['loggedin']=true;
                  $_SESSION['type']=$type;
                  $_SESSION['email'] = $email;
                  $_SESSION['name'] = $row['name'];
                  $_SESSION['photo'] = $row['pic'];
                  $_SESSION['id']=$row['id'];
               
        
          echo json_encode(array('status'=>200,'type'=>"admin"));
        
        }
        
            else{
            
              echo json_encode(array('status'=>400,'msg'=>"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                  <strong>Error!</strong> invalid credentiales.
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>"));
                    // die("sorry".mysqli_connect_error());
            }
          }else{
                  
              echo json_encode(array('status'=>400,'msg'=>"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                  <strong>Error!</strong> Data Not Found.
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>"));
                }
?>