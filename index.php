<?php

$insert = false;
if(isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("Connection to this database failed due to ".mysqli_connect_error());
    }else{
       // echo "Success Connecting to the DataBase...!!!";
    }

    $name = $_POST['name'];
    $age  = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['desc'];

    $sql = "INSERT INTO `trip`.`trip` (`name`,`age`,`gender`,`email`,`phone`,`other`,`dt`) VALUES ('$name','$age','$gender','$email','$phone','$other', current_timestamp());";
    // echo $sql;

    if($con->query($sql)==true){
        echo "Success";
        $insert = true;
    }else{
        echo "ERROR : $sql <br> $con->error";
    }

    $con->close();

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <title>Welcome To Travel Form</title>
  </head>
  <body>
    <div class="container">
    <h3>Welcome To Cedcoss US Trip Form</h3>
    <p>Enter your details and submit this form to confirm your participation in the Trip...</p>
    <?php
    if($insert == true){
    echo "<p class='submitMsg'>Thank You For Submitting Your Form. We ARe Happy to see You Joining Our Team.</p>";
    }
    ?>


    <form action="index.php" method="post">

    <input type="text" name="name" id="name" placeholder="Enter Your Name : ">
    <input type="text" name="age" id="age" placeholder="Enter Your Age : ">
    <input type="text" name="gender" id="gender" placeholder="Enter Your Gender : ">
    <input type="email" name="email" id="email" placeholder="Enter Your Email ID : ">
    <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone Number : ">
    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Something Which You to share with us.."></textarea>
    <button class="btn btn-success">Submit</button>
   

    </form>



    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="index.js"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>




