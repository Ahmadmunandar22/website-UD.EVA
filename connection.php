<?php

$mysqli= new mysqli("localhost", "root", "", "ud.eva");
//check connection
if ($mysqli->connect_errno) {
    echo "gagal menyambungkan ke MySQL : " . $mysqli->connect_errno;
    exit();
}


?>