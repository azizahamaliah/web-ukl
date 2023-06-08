<?php

include "koneksi.php";

$id = $_GET ['id'];

$hapus = mysqli_query ($koneksi, "delete from tiket where id_tiket='$id'");

if ($hapus){
    echo "<script> alert ('data berhasil dihapus')<?script>";
    header ("refresh:2;view-tiket.php");
}else{
    echo "<script> alert ('data gagal dihapus')<?script>";
    header ("refresh:2;view-tiket.php");
}

?>