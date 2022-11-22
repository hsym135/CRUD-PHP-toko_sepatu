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

$user = query("SELECT * FROM user");

?>

<?php 
    require '../layout/sidebar.php' ; ?>

<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<div class="container main bg-light mt-3">
    <h3>Data User</h3>
    
    <a href="tambah_user.php" class="btn btn-primary">Tambah user</a>
    <table class=" table table-striped table-hover">
        <tr>
            <th>No.</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Password</th>
            <th>Roles</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($user as $data) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["nama_lengkap"]; ?></td>
            <td><?= $data["username"]; ?></td>
            <td><?= $data["password"]; ?></td>
            <td><?= $data["roles"]; ?></td>
            <td>
                <a href="edit_user.php?id=<?= $data["id_user"];  ?>" class="btn btn-success">Edit</a>
                <a href="hapus_user.php?id=<?= $data["id_user"]; ?>" class="btn btn-danger" onClick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>