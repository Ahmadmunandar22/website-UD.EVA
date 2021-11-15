<?php 

require_once("connection.php");

//mendapatkan data id produk_keripik
if(isset($_POST['id_produk']))$id_produk=$_POST['id_produk'];
else{
    echo "Id Produk tidak ditemukan! <a href='admin.com'>Kembali</a>";
    exit();
}

//query untuk get data produk_keripik
$query = "SELECT * FROM produk_keripik WHERE id_produk='{$id_produk}'";

//eksekusi query
$result=mysqli_query($mysqli, $query);

//fetching data
foreach($result as $produk_keripik){
    $foto = $produk_keripik['foto'];
    $nama_produk=$produk_keripik['nama_produk'];
    $rasa=$produk_keripik['rasa'];
    $harga=$produk_keripik['harga'];
}

if (isset($_POST['nama_produk'])) $nama_produk=$_POST['nama_produk'];
if (isset($_POST['rasa'])) $rasa=$_POST['rasa'];
if (isset($_POST['harga'])) $harga=$_POST['harga'];

//mengambil data file upload
$files =$_FILES['foto'];
$path = "penyimpanan/";

//menangani file upload
if(!empty($files['name'])){
    $filepath = $path . $files['name'];

    $upload = move_uploaded_file($files['tmp_name'], $filepath);

    if($upload){
        unlink($foto);
    }
} else{
    $filepath='';
    $upload=false;
}

//menangani error saat mengupoad
if($upload != true && $filepath != $foto) {
    exit("gagal mengupload file <a href='form_edit.php?id_produk={$id_produk}'>Kembali</a>");

}
//menyiapkan query untuk diekssekusi
$query="
UPDATE produk_keripik SET
nama_produk='{$nama_produk}',
rasa='{$rasa}',
harga='{$harga}',
foto='{$filepath}'
WHERE id_produk = '{$id_produk}'
";

    //mengeksekusi myql query
    $insert = mysqli_query($mysqli, $query);

    //menangani jika eror pada saat eksekusi query
    if ($insert = false){
        echo "error dalam mengubah data. <a href='admin.php'>Kembali</a>";
    } else {
        header("location:admin.php");
    }


?>