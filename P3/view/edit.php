<?php
include '../model/database.php';
$db = new database();
?>

<h1>CROOD OOP PHP</h1>
<H2>WWW.MALASNGODING.COM</H2>
<H3>Edit data user</H3>

<form action="../controller/proses.php?aksi=update" method="post"> 
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<table>
    <tr>
        <td>Nama</td>
        <td>
             <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
             <input type="text" name="nama" value="<?php echo $d['nama'] ?>">
        </td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>
            <input type="text" name="alamat" value="<?php echo $d['alamat'] ?>">
         </td>
    <tr>
        <td>Usia</td>
        <td>
            <input type="text" name="usia" value="<?php echo $d['usia'] ?>">
         </td>
    </tr>
    <tr>
        <td><input type="submit" value="simpan">
        </td>
    </tr>
</table>
<?php } ?>
</form>