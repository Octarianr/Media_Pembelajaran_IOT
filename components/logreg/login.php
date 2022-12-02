<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["login"])){
  $nomoremail = $_POST["nomoremail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE nomor = '$nomoremail' OR email = '$nomoremail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}

if(isset($_POST["register"])){
  $name = $_POST["name"];
  $nomor = $_POST["nomor"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE nomor = '$nomor' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('nomor or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$nomor','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="image/png" sizes="96x96" rel="icon" href="./img/logo.png">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Login & Register</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-in-form"  action="" method="post" autocomplete="off">
            <h2 class="title">Login</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                  <input type="text" placeholder="Nomor Atau E-mail" name="nomoremail" id = "nomoremail" required value="">
              </div>

              <div class="input-field">
                <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Password" name="password" id = "password" required value="">
              </div>
              
            <button type="submit" value="login" class="btn solid" name="login">Login</button>
          </form>

          <form action="#" class="sign-up-form" method="post" autocomplete="off">
            <h2 class="title">Register</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                  <input type="text" placeholder="Nama" name="name" id = "name" required value="" />
              </div>

              <div class="input-field">
                <i class='fas fa-phone-alt'></i>
                  <input type="int" placeholder="Nomor" name="nomor" id = "nomor" required value="">
              </div>

              <div class="input-field">
                <i class="fas fa-envelope"></i>
                  <input type="email" placeholder="E-mail" name="email" id = "email" required value="">
              </div>
              
              <div class="input-field">
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                  <input type="password" placeholder="Password" name="password" id = "password" required value="">
              </div>
             
              <div class="input-field">
                <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Konfirmasi Password" name="confirmpassword" id = "confirmpassword" required value="">
              </div>
            <button type="submit" class="btn" name="register">Register</button>

          </form>
      </div>
    </div>
    <!-- <a href="registration.php">Registration</a> -->

    <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Belum Punya Akun ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Register
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Sudah Punya Akun ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Login
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
