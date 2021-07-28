<?php
include("database.php");
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
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/taskajax/form.php">Singup</a>
        </li>
      </ul>
     </div>
   </div>
 </nav>
<div class="container  col-md-6">
  <div class="container my-3  " >
  <h2>Mobilestyx login Form</h2>
  <p class="form-message" id="msg"> </p>
  <form action="" id="form" method="POST">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
       </div>
    <div class="form-group">
      <label for="Password">Password:</label>
      <input type="Password" class="form-control" id="pass" placeholder="Enter your Password" name="pass">
    </div>
    <div class="conationer my-2 ">
        <label for="type">select type:</label>
       <select class="form-select" type="usertype"    id="type" name="type" aria-label="Default select example">
          <option selected>Open this select menu</option>
          <option value="newuser">User  </option>
          <option value="admin">Admin</option>
      </select>
    </div>
        <div class="container my-3">
          <button type="submit" name="submit"  id="submit" value="submit" class="btn btn-primary">Login</button>
          </div>
      </form>
  </div>
</div>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
      $('#form').submit(function(e){
          e.preventDefault();
         var email = $("#email").val()
          var password = $("#pass").val();
          var type = $("#type").val();
          //alert(email);
          $.ajax({
               type:"post",
               url:"insertlogin.php",
               data:{email : email,
                     name : name,
                     password : password,
                    type : type},
               dataType:"json",
                cache:false,
               success:function(data){
                if(data.status ==400){
                  $(".form-message").html(data.msg);
                  }
                else{    
                   if(data.type == "newuser"){
                     location.href="onlyuser.php";
                  }
                   if(data.type =="admin"){
                     location.href="admin.php";
                  }
                        }
                                     }
                 
                 

          });
        
             
         });
        
        });
     
  
     </script>
      
  </body>
 </html>