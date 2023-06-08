<?php

include "koneksi.php";

$id = $_GET ['id_kapal'];

$hapus = mysqli_query ($koneksi, "delete from kapal where id_kapal='$id'");

if ($hapus){
    echo "<script> alert ('data berhasil dihapus')</script>";
    header ("refresh:2;view-kapal.php");
}else{
    echo "<script> alert ('data gagal dihapus')</script>";
    header ("refresh:2;view-kapal.php");
}

?>