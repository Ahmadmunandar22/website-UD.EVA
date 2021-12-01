<?php

require_once("connection.php");

//mendapatkan data Id_barang
if(isset($_GET['id_produk'])) $id_produk = $_GET['id_produk'];
else{
    echo "Id Produk tidak ditemukan <a href='admin.php'>Kembali</a>";
    exit();
}

//query get data barang
$query = "SELECT * FROM produk WHERE id_produk = '{$id_produk}'";

//eksekusi query
$result = mysqli_query($mysqli, $query);

//fetaching data
foreach($result as $produk){
    $foto = $produk['foto'];
}

if(!is_null($foto) && !empty($foto)){
    $remove = unlink($foto);

    if($remove){
        //meiapkan query mysql untuk di eksekusi
        $query = "UPDATE produk SET 
        foto = NULL 
        WHERE id_produk = '{$id_produk}'";

        //mengeksekusi mysqli query
        $update = mysqli_query($mysqli, $query);
    }
}

header("location: form_edit.php?id_produk={$id_produk}");
?>