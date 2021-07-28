<?php
include("database.php");
  session_start();
  $pic =$_SESSION['photo'];
  $Name =$_SESSION['name'];
  $id = $_GET['id'];

    $sql = "SELECT * From `ajaxdb` where `id` = '$id'";     
    $result = mysqli_query($conn,$sql); 
    $num = mysqli_fetch_array($result);
  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="http://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
          <a class="nav-link active" aria-current="page" href="/taskajax/logout.php">logout</a>
        </li>
      </ul>
      <form class="d-grid">
      <a class="nav-link active font-weight-bold text-info display-7" aria-current="page" href="">Hello  <img src=  "<?php  echo $pic ?>" class="rounded-circle"  width="50" height="40"/> <?php echo $Name?> </a></a>
        
      </form>
    </div>
  </div>
</nav>

<div class="container my-3 ">
  <h2> Update :</h2>
  <form method="post" id="update1" enctype="multipart/form-data">
    <div class="form-mg"></div>
 
    <div class="form-group my-2  col-md-6 ">
      <label for="name">Name:</label>
      <input type="name" class="form-control"   value="<?php echo $num['name'];  ?>"  placeholder=" Please Enter Your name" name="name" Required >
    </div>
   
    <div class="form-group  my-2  col-md-6">
      <label for="number">phone_number:</label>
      <input type="number" class="form-control"  value="<?php echo $num['number'];  ?>" placeholder="Please Enter Your Number" name="number" Required>
    </div>
    <div class="form-group  my-2  col-md-6">
      <label for="file">profile:</label>
      <input type="file" class="form-control"  value="img src='<?php echo $num['pic'];  ?>'" placeholder="upload your profile" name="photo" >
    </div>

    
    <div class="form-group  my-2  col-md-6">
      <label for="gender">Gender:</label>
      <div class="form-check  col-md-6">
    <input class="form-check-input" type="radio"  value="male" name="gender" id="inlineRadio1"<?php echo($num['gender']=='male'?'checked="checked"':''); ?>>
    <label class="form-check-label" for="inlineRadio1" Required>
        Male
    </label>
    </div>
<div class="form-check  col-md-6">
  <input class="form-check-input" type="radio" value="female" name="gender" id="inlineRadio2"  <?php echo($num['gender']=='female'?'checked="checked"':''); ?>>
  <label class="form-check-label" for="inlineRadio2" Required>
    Female
  </label>
  </div>
  <input  class="form-check-input" type="hidden" value="<?php echo $num['email']; ?>" name="email" id="email">
     </div>
    <div class="form-group form-check ">
       </div>
    <button type="submit" class="btn btn-primary" name="submit" value="submit" id="submit1">Update</button>
    <input type="button" onclick="location.href='admin.php'"   class="btn btn-danger" value="Cancle"/>
  </form>
</div>
  <script type="text/javascript">
  $('#submit1').on('click', function(e){
    e.preventDefault();
   // alert("AAya na ander");
    var formData = new FormData ($("#update1")[0]);
    $.ajax({
      type:"POST",
      url:"insertadminupdate.php",
      data:formData,
      enctype:"multipart/form-data",
      dataType:'json',
      cache: false,
      processData: false,
      contentType: false,
      success:function(data){
        if (data.status == 200) {
          $('.form-mg').html(data.msg);
          location.href="admin.php";
        }
      }

    });





  });

</script>

  </body>
</html> 
