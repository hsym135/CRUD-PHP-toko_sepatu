<?php 
session_start();
require 'functions.php';

$id = $_GET["id"];
$user = query("SELECT * FROM user WHERE id_user = '$id'")[0];

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
} 

if(isset($_POST["kirim"])){
    if(editUser($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data user berhasil diubah');
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
            <input type="hidden" name="id_user" value="<?= $user["id_user"]; ?>">

            <label for="username">Username</label> 
            <input type="text" name="username" id="username" class="form-control" value="<?= $user["username"]; ?>"> 

            <label for="nama_lengkap">Nama Lengkap</label> 
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $user["nama_lengkap"]; ?>">

            <label for="password">Password</label> 
            <input type="password" name="password" id="password" class="form-control" value="<?= $user["password"]; ?>">

            <label for="roles">Roles</label> 
            <select name="roles" class="form-control" value="<?= $username["roles"]; ?>">
                <option value="Admin">Admin</option>
                <option value="User">User</option>
            </select>
            <button type="submit" name="kirim" class="btn btn-success mt-2">edit</button>
        </form>
        </div>
    </div>