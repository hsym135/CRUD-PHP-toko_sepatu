<?php 
session_start();
require 'functions.php';


if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
} 

if(isset($_POST["submit"])){
    if(tambahProduk($_POST) > 0){
    // echo "
    //     <script type='text/javascript'>
    //         alert('Data produk berhasil ditambahkan');
    //         window.location = 'produk.php';
    //     </script>
    // ";
    }else{
    //     echo "
    //     <script type='text/javascript'>
    //         alert('Data produk gagal ditambahkan');
    //         window.location = 'produk.php';
    //     </script>
    // ";
    }
    }   

require '../layout/sidebar.php'; 
?>

<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <div class="container main bg-light mt-3">
        <div class="box">
            
        <h3>Tambah Data Produk</h3>

        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nama_produk">nama produk</label> 
            <input type="text" name="nama_produk" id="nama_produk" class="form-control"> 

            <label for="harga">harga</label> 
            <input type="text" name="harga" id="harga" class="form-control">

            <label for="foto">foto</label> 
            <input type="file" name="foto" id="foto" class="form-control">

            <label for="stok">stok</label> 
            <input type="text" name="stok" id="stok" class="form-control">

            <label for="size">size</label> 
            <input type="text" name="size" id="size" class="form-control">

            <label for="deskripsi">deskripsi</label> 
            <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10"></textarea>

            <button type="submit" name="submit" class="btn btn-primary mt-2">Tambah</button>

        </form>
        </div>
    </div>