<?php

$mysqli= new mysqli("jongkreatif.com", "u5250287_eva", "eva1234eva", "u5250287_eva");
//check connection
if ($mysqli->connect_errno) {
    echo "gagal menyambungkan ke MySQL : " . $mysqli->connect_errno;
    exit();
}


?>