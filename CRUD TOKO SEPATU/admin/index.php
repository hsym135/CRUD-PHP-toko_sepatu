<?php 
session_start();
require '../koneksi.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

?>

<?php require '../layout/sidebar.php'?>

<link rel="stylesheet" href="../css/style.css">

<div class="container-fluid row text-center justify-content-center">
    <div class="judul col-7">
    <h2>Halo selamat datang di JPSPort SMK Jakarta Pusat 1</h2>
    <h3>Toko Sepatu terbaik dan berkualitas hanya di JPSPort</h3>
    </div>
</div>