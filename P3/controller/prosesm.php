<?php
    include '../model/databasem.php';
    $db = new database();

    $aksi = $_GET['aksi'];
    if($aksi == "tambah"){
        $db->input($_POST['nama'],$_POST['prodi'],$_POST['email']);
        header("location:../view/tampilm.php");
    }
    elseif($aksi == "hapus"){
        $db->hapus($_GET['id']);
        header("location:../view/tampilm.php");
    }
    elseif($aksi == "update"){
        $db->update($_POST['id'],$_POST['nama'],$_POST['prodi'],$_POST['email']);
        header("location:../view/tampilm.php");
    }
?>