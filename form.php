<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Registration Form</title>
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
            <a class="nav-link active" aria-current="page" href="/taskajax/login.php">log in</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container my-3   col-md-6">
    <h2>Mobilestyx Form</h2>
    <p class="form-message"> </p>
    <div class="contanier ">
      <form action="/taskajax/insertform.php" id="form" method="POST">
        <div class="form-group my-2  ">
          <label for="name">Name:</label>
          <input type="name" class="form-control" id="name" name="name" placeholder=" Please Enter Your name" Required>
        </div>
        <div class="form-group  my-2  ">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Please Enter Your Email" Required>
        </div>
        <div class="form-group  my-2">
          <label for="number">phone_number:</label>
          <input type="number" class="form-control" id="number" name="number" placeholder="Please Enter Your Number" Required>
        </div>
        <div class="form-group  my-2 ">
          <label for="pass">Password:</label>
          <input type="password" class="form-control" id="pass" name="pass" placeholder="Please Enter Your password" Required>
        </div>
        <div class="form-group  my-2 ">
          <label for="gender">Gender:</label>
          <div class="form-check ">
            <input class="form-check-input" type="radio" value="male" name="gender" name="gender" id="gender">
            <label class="form-check-label" for="inlineRadio1" Required>
              Male
            </label>
          </div>
          <div class="form-check ">
            <input class="form-check-input" type="radio" value="female" name="gender" id="gender">
            <label class="form-check-label" for="inlineRadio2" Required>
              Female
            </label>
          </div>
        </div>
        <div class="contanier my-2 ">
          <select class="form-select" type="usertype" name="type" id="type" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="newuser">New User </option>
            <option value="admin">Admin</option>
          </select>
        </div>
        <div class="contanier my-4">
          <button type="submit" id="submit" class="btn btn-primary" name="submit">SignUp</button>
        </div>
      </form>

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
      $(document).ready(function() {
        $("#form").submit(function(e) {
          e.preventDefault();

          var name = $("#name").val();
          var email = $("#email").val();
          var number = $("#number").val();
          var password = $("#pass").val();
          var gender = $("#gender:checked").val();
          var type = $("#type").val();
          var submit = $("#submit").val();
          $(".form-message").load("/taskajax/insertform.php", {
            name: name,
            email: email,
            number: number,
            password: password,
            gender: gender,
            type: type,
            submit: submit
          });
          $('#form')[0].reset();

        });
      });
    </script>

</body>

</html>