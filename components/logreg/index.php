<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../Matematika/style.css">
  <link type="image/png" sizes="96x96" rel="icon" href="./img/logo.png">
  <title>Penjumlahan</title>
  
</head>
<body>
  
  <audio id="myAudio">
    <source src="../Matematika/wrong.mp3" type="audio/mpeg">
  </audio>

  <header>
    <div class="container">
      <div class="nav">
        <h2><span><i class="fa fa-trophy" aria-hidden="true"></i></span>  Selamat Datang <b><?php echo $row["name"]; ?></b> !   .</h2>
        <a href="logout.php">Logout</a>
        <nav>
          <ul>
            <li class="current"><a href="index.php">Penjumlahan</a></li>
            <li><a href="../Matematika/subtract.php">Pengurangan</a></li>
            <li><a href="../Matematika/multiply.php">Perkalian</a></li>
            <li><a href="../Matematika/divide.php">Pembagian</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  
  <div class="wrapper">
      <div class="equation">
        <h1  id="num1" style="color:#FE4A49"></h1>
        <h1 style="color: #2AB7CA;">+</h1>
        <h1  id="num2" style="color: #FED766">1</h1>
        <h1  style="color: #F86624">=</h1>
        <h1  style="color: #FFF">?</h1>
      </div>
      <div class="answer-options">
        <div class="options" style="background-color: #FE4A49;">
          <h1 id="option1">1</h1>
        </div>
        <div class="options" style="background-color: #2AB7CA;">
          <h1 id="option2">2</h1>
        </div>
        <div class="options" style="background-color: #FED766;">
          <h1 id="option3">3</h1>
        </div>
      </div>
  </div>

  <script src="../Matematika/add.js"></script>
  
</body>
</html>

  </body>
</html>
