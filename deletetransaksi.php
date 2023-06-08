<?php

include "koneksi.php";

$id = $_GET ['id_transaksi'];

$hapus = mysqli_query ($koneksi, "delete from transaksi where id_transaksi='$id'");

if ($hapus){
    echo "<script> alert ('data berhasil dihapus')<?script>";
    header ("refresh:2;view-transaksi.php");
}else{
    echo "<script> alert ('data gagal dihapus')<?script>";
    header ("refresh:2;view-transaksi.php");
}

?>