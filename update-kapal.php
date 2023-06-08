<?php
    include "koneksi.php";

    $id = $_POST ['id_kapal'];
    $jenis = $_POST ['jenis_kapal'];
    $nama = $_POST ['nama_kapal'];
    $kodekpl = $_POST ['kode_kapal'];

    $update = mysqli_query($koneksi, "update kapal set jenis_kapal='$jenis' nama_kapal='$nama' kode_kapal='$kodekpl' where id_kapal = '$id')");

    if ($update){
        echo"<script> alert ('Data Berhasil Di Ubah')</script>";
        header ("refresh:0;view-kapal.php");
    }else{
        echo "<script> alert ('Data Tidak Berhasil Di Ubah')</script>";
        header ("refresh:0;view-kapal.php");
    }

?>