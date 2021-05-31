<?php
include '../model/databasem.php';
$db = new database();
?>
<h1>DATA MAHASISWA BARU</h1>
<h3>Data Mahasiswa</h3>

<a href="inputm.php">Input Data</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Program Studi</th>
        <th>Email</th>
        <th>Opsi</th>
    </tr>
    <?php
    $no = 1;
    foreach ($db->tampil_data() as $x) {
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $x ['nama'];?></td>
        <td><?php echo $x ['prodi'];?></td>
        <td><?php echo $x ['email'];?></td>
    <td>
        <a href="editm.php?id=<?php echo $x ['id']; ?>&aksi=edit">Edit</a>
        <a href="../controller/prosesm.php?id=<?php echo $x ['id']; ?>&aksi=hapus">Hapus</a>
        </td>
    </tr>
    <?php
    }
    ?>