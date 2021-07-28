<?php
include("database.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $type = $_POST['type'];
    
//Email validation...
    $existSql = "SELECT * From `ajaxdb` WHERE email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $num_rows = mysqli_num_rows($result);
    
    if($num_rows  > 0){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry !!</strong> This a  llready exits!!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }else{
     //Password hashing ...
     $hash=hash('sha256',$password);
     $sql = "INSERT INTO `ajaxdb` ( `name`, `email`, `number`, `password`, `gender`, `type`) VALUES ( '$name', '$email', '$number', '$hash', '$gender', '$type')"; 
             $result=mysqli_query($conn,$sql);
            
             $num = 22;
             $num2 = '22';

             if($num === $num2) echo "yes";

        if($result === true){
            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Succes</strong>Your  Account has been Created Now You can Login.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
                    }
        else{
        echo"error".mysqli_error($conn);

            }
          }
        }
?>