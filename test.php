<?php
  $con = mysqli_connect("localhost","root","root","ajax_course");
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sel = "select * from users where email='$email'";
  
  $run = mysqli_query($con, $sel);

  $check_email = mysqli_num_rows($run);

  if ($check_email == 1) {
    echo "<p>Email already registered.</p>";
    exit();
  } else {
    $insert = "insert into users (name, password, email) values ('$name','$password','$email')";
    $run_insert = mysqli_query($con, $insert);
    
    if ($run_insert) {
      echo "<p>Registration Successful!</p>";
    }
  }
?>