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
    if(tambahUser($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data user berhasil ditambahkan');
            window.location = 'user.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data user gagal ditambahkan');
            window.location = 'user.php';
        </script>
    ";
    }
    }   

require '../layout/sidebar.php'; 
?>

<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <div class="container main bg-light mt-3">
        <div class="box">
            
        <h3>Tambah Data User</h3>

        <form action="" method="POST">
            <label for="username">Username</label> 
            <input type="text" name="username" id="username" class="form-control"> 

            <label for="nama_lengkap">Nama Lengkap</label> 
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">

            <label for="password">Password</label> 
            <input type="password" name="password" id="password" class="form-control">
            <label for="roles">Roles</label> 
            <select name="roles" class="form-control">
                <option value="Admin">Admin</option>
                <option value="User">User</option>
            </select>
            <button type="submit" class="btn btn-primary mt-2" name="submit">Tambah</button>

        </form>
        </div>
    </div>