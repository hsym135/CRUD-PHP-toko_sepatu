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

$produk = query("SELECT * FROM produk");

?>

<?php 
    require '../layout/sidebar.php' ; ?>

<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<div class="container main bg-light mt-3 ">
    <h3>Table Data Produk</h3>
    
    <a href="tambah_produk.php" class="btn btn-primary">Tambah produk</a>
    <table class=" table table-striped table-hover">
        <tr>
            <th>No.</th>
            <th>Nama produk</th>
            <th>harga</th>
            <th>foto</th>
            <th>stok</th>
            <th>size</th>
            <th>deskripsi</th>
            <th>aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($produk as $data) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["nama_produk"]; ?></td>
            <td><?= $data["harga"]; ?></td>
            <td><img src="../foto/<?= $data["foto"]; ?>" width="80px" alt="foto"></td>
            <td><?= $data["stok"]; ?></td>
            <td><?= $data["size"]; ?></td>
            <td><?=  $data["deskripsi"]; ?></td>
            <td>
                <a href="edit_produk.php?id=<?= $data["id_produk"];  ?>" class="btn btn-success">Edit</a>
                <a href="hapus_produk.php?id=<?= $data["id_produk"]; ?>" class="btn btn-danger" onClick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</div>