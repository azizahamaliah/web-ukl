<?php

include "koneksi.php";

$id = $_GET ['id'];

$hapus = mysqli_query ($koneksi, "delete from voucher where id_voucher='$id'");

if ($hapus){
    echo "<script> alert ('data berhasil dihapus')<?script>";
    header ("refresh:2;view-voucher.php");
}else{
    echo "<script> alert ('data gagal dihapus')<?script>";
    header ("refresh:2;view-voucher.php");
}

?>