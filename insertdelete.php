<?php
      //validation for url
      include("database.php");
      session_start();
      //if($_SESSION['email']!= $Email){
        //header("location:login.php");
      //}

$mail = $_GET['email'];
$id = $_SESSION['email'];

if($mail ==  $id){
    echo'<div class="alert alert-Danger alert-dismissible fade show" role="alert">
    <strong>Sorry </Denger>you can not delete your Self .
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
 

       }
else{
  $delete = "delete from `ajaxdb` where  `email` = '$mail'";
  //echo $delete;
  $result = mysqli_query($conn,$delete);
  if($result)
  {
    echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>success </strong>Delete successfully .
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  header("location:admin.php");
    }
}
?>