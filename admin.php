<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Oops Anda belum login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['level']!="admin"){
  header('location:manager.php');

}else{
  $username = $_SESSION['username']; 
  $level=$_SESSION['level'];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Admin</title>
  </head>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
   <a class="navbar-brand" href="#">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-item nav-link active" href="#">
  <body style="background: url(walpaper.jpg);">
  <div align='center'>
  <h1 style="text-align: center; font-family: sans-serif; color: white;"><marquee>Selamat Datang <?php echo $level;?> <b><?php echo $username;?></marquee></b>
  </div></h1> 
  </div>
  </div>
  </div>
  </nav> 

  <style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<h1 style="color: black;">SINUS A STORE</h1>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="insert.php">Insert</a>
  <a href="view.php">View</a>
  <a href="logout.php">Logout</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

  <h3 style="text-align: center;">Aplikasi Film Online</h3>
  <h6 style="text-align: center;">&nbsp;&nbsp;Selamat datang.<br>
  Update terus film-film terbaru.<br> 
  Buat para pengguna menyukai aplikasi Anda,<br>
  dan pengguna betah menggunakan aplikasi Anda.<br>
  HAVE A NICE DAY.</h6>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>
</html> 

  <?php
    include 'connect.php';
    $getProduct = $connection ->query("SELECT * FROM product");
    while ($fetchProduct = $getProduct ->fetch_assoc()) { 
  ?>

  <?php
    }
  ?>
</body>

