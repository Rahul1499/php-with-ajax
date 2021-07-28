<?php
session_start();
include("database.php");
// $Email = $_GET['email'];
 if(!isset ($_SESSION['loggedin'])){
     
      header("location:login.php");
      }
    
else{
//     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//     <strong>Welcome..</strong> To Your user Page.
//     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//   </div>';
  }

session_unset();
session_destroy();
 
echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>Thankyoy for logout..!</strong> plase again login for used...
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  
 



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
 
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mobilestyx Form</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
      <form class="d-flex" method="post" action="">
        <!--//<button  class="btn btn-danger" type="button" onclick="location.href='login.php'" value="Cancle ></button>-->
        <button type="button"   class="btn btn-danger"  onclick="location.href='login.php'">Login</button>
    
      </form>
    </div>
  </div>
</nav>

  </body>
</html> 





