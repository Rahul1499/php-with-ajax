<?php
 //connecting databse
        $servername="localhost";
        $username="root";
        $password="";
        $database="ajaxtask";

        $conn=mysqli_connect($servername,$username,$password,$database);

       if(!$conn){
           die("sorry".mysqli_connect_error());
        }
    //   else{
    //      echo"success";
    //  }


      // jquery("#form").on('submit',function(e){
                      
      //   jquery.ajax({
      // url:'insertform.php',
      //     type:'POST',
      //     data :  jquery("#form").serialize(),
      //     success : function(result){

      //       alert(result);
      //     }
      //   });
      //   e.preventDefault();

      // });
       
?>