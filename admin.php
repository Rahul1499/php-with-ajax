<?php

include("database.php");
session_start();
$email = $_SESSION['email'];
$Name = $_SESSION['name'];
$pic = $_SESSION['photo'];
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Welcome</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <p class="form-message"> </p>
    <div class="container-fluid">


      <a class="navbar-brand" href="#">Mobilestyx Form</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/taskajax/logout.php">logout</a>
          </li>
        </ul>
        <form class="d-grid">
          <a class="nav-link active font-weight-bold text-info display-7" aria-current="page" href="">Hello <img src="<?php echo $pic ?>" class="rounded-circle" width="50" height="40" /> <?php echo $Name ?> </a>

        </form>
      </div>
    </div>
  </nav>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

  <table class="table my-4">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>phone_number</th>
        <th>Profile</th>
        <th>type</th>
        <th>gender</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
         $sql = "SELECT * From `ajaxdb`";
         $result = mysqli_query($conn, $sql);
         $num = mysqli_num_rows($result);
     
   
      if ($num > 0) {
        $id = 0;

         while ($num = mysqli_fetch_array($result)) {
          $id++;
          if ($num['email'] == $email) {
            echo "<tr>
                    <td>" . $num['id'] . "</td>
                    <td>" . $num['name'] . "</td>
                    <td>" . $num['email'] . "</td>
                    <td>" . $num['number'] . "</td>
                    <td><img src=" . $num['pic'] . " width=30 height=50></td>
                    <td>" . $num['type'] . "</td>
                    <td>" . $num['gender'] . "</td>
                    <td><a class='btn btn-outline-primary mx-3' href='/taskajax/adminupdate.php?id="  . $num['id'] .  "'>Edit</a></td></td>
                    </tr>";
          } else {
            echo "<tr>
                <td>" . $id . "</td>
                <td>" . $num['name'] . "</td>
                <td>" . $num['email'] . "</td>
                <td>" . $num['number'] . "</td>
                <td><img src=" . $num['pic'] . " width=30 height=60></td>
                <td>" . $num['gender'] . "</td>
                <td>" . $num['type'] . "</td>
                <td><a class='btn btn-outline-primary mx-3' href='/taskajax/adminupdate.php?id="  . $num['id'] .  "'>Edit</a>
                </a><a class='btn btn-danger delete' id=" . $num['id'] . " href='/taskajax/delete.php?id=" . $num['id'] .  "'>Delete</a></td>
                </tr>";
          }

        }
      
      }
      
      ?>

    </tbody>
</table>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.delete').click(function() {
        var did = $(this).attr('id');
        // alert(did);
        $.ajax({
          type: "post",
          url: "delete.php",
          data: {
            id: did
          },
          success: function(data) {
            alert('data delete..')

          }

        });

      });


    });
  </script>
</body>

</html>