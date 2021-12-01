<?php 

require_once("connection.php");

//status tidak error
$error=0;

//memvalidasi inputan
if(isset($_POST['id_produk'])) $id_produk = $_POST['id_produk'];
else $error=1; //status error

if(isset($_POST['nama_produk'])) $nama_produk = $_POST['nama_produk'];
else $error=1; //status error

if(isset($_POST['detail'])) $detail = $_POST['detail'];
else $error=1; //status error

if(isset($_POST['harga'])) $harga = $_POST['harga'];
else $error=1; //status error

//mengatasi jika terdapat error pada input
if($error==1){
    echo "terjadi kesalahan pada proses input data";
    exit();
}

//mengambil data file upload
$files = $_FILES['foto'];
$path = "penyimpanan/";

//menangani file upload
if(!empty($files['name'])) {
    $filepath = $path . $files["name"];
    $upload = move_uploaded_file($files["tmp_name"], $filepath);
}
else{
    $filepath = "";
    $upload = false ;
}

//menangani error saat mengupload
if($upload != true && $filepath != ""){
    exit("Gagal Mengupload file <a href='admin.php'>Kembali</a>");
}

//menyiapkan query mysql untuk dieksekusi
$query = "
    INSERT INTO produk 
    (id_produk, nama_produk, detail, harga, foto)
    VALUES
    ('{$id_produk}', '{$nama_produk}','{$detail}', '{$harga}','{$filepath}');";

//mengeksekusi mysql query
$insert=mysqli_query($mysqli, $query);

//menangani jika error pada saat eksekusi query
if($insert == false){
    echo "error dalam menambahkan data. <a href='admin.php'>kembali</a>";
} else{
    header("location:admin.php");
}

?>