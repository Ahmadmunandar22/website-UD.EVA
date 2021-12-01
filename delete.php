<?php

require_once("connection.php");

//mendapatkan id produk
if(isset($_GET["id_produk"]))$id_produk=$_GET["id_produk"];
else{
    echo "Id Produk tidak ditemukan! <a href='admin.php'>Kembali</a>";
    exit();
}
//menghapus file
//query get data produk
$query = "SELECT * FROM produk WHERE id_produk = '{$id_produk}'";

//eksekusi query
$result = mysqli_query($mysqli, $query);

//fetaching data
foreach($result as $produk){
    $foto = $produk['foto'];
}

if(!is_null($foto) && !empty($foto)){
    $remove = unlink($foto);
}

//query delete data produk
$query="DELETE FROM produk WHERE id_produk='{$id_produk}'";

//eksekusi query
$result = mysqli_query($mysqli, $query);

if(!$result){
    exit("Gagal menghapus data!");
}

header("location:admin.php");

?>