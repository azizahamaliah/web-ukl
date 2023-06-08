<html>
<head>
    <title> Halaman Admin</title>
</head>
 
<body>
<h3 align="center"> Tiket </h3>

<form action="" method="post">
<table align="center" width="40%" bgcolor="#008B8B">
    <tr>
        <td>Nama Kapal</td>
        <td> : </td>
        <td>
            <select name="id_kapal">
                <option value="">--Pilih--</option>
                <option value ="102">kapal ferry 2309</option>
                <option value ="104">kapal ferry 7230</option>
                <option value ="105">kapal ferry 3358</option>
                <option value ="126">kapal ferry 3367</option>
                <option value ="128">kapal ferry 1109</option>
                <option value ="135">kapal ferry 1230</option>
                <option value ="136">kapal ferry 7130</option>
            </select>
        </td>
    <tr>
        <td> Rute </td>
        <td> : </td>
        <td><input type="text" name="rute_berangkat"></td>
    </tr>
    <tr>
        <td> tujuan </td>
        <td> : </td>
        <td><input type="text" name="rute_sampai"></td>
    </tr>
    <tr>
        <td> Tanggal Berangkat</td>
        <td> : </td>
        <td><input type="datetime-local" name="jadwal_berangkat"></td>
    </tr>
    <tr>
        <td> Jumlah Beli</td>
        <td> : </td>
        <td><input type="number" name="jumlah_pembelian"></td>
    </tr>
         <td> Kelas </td>
         <td> : </td>
         <td>
            <select name="kelas_layanan">
                <option value="">--Pilih--</option>
                <option value ="Ekonomi">ekonomi</option>
                <option value ="Bisnis">bisnis</option>
                <option value ="VIP">vip</option>
            </select>
        </td>
    <tr>
        <td> Kode Tiket </td>
        <td> : </td>
        <td><input type="text" name="kode_tiket"></td>
    </tr>
    <tr>
        <td> Harga </td>
        <td> : </td>
        <td><input type="text" name="total_harga"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="simpan" name="proses"></td>
    </tr>
</table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){ 
    $idk = $_POST['id_kapal'];
    $asal = $_POST['rute_berangkat'];
    $tujuan = $_POST['rute_sampai'];
    $jadwal = $_POST['jadwal_berangkat'];
    $jumlah = $_POST['jumlah_pembelian'];
    $kelas = $_POST['kelas_layanan'];
    $kodet = $_POST['kode_tiket'];
    $total = $_POST['total_harga'];
    $sql = "INSERT INTO tiket values
    ('','$idk','$asal','$tujuan','$jadwal','$jumlah','$kelas','$kodet','$total')";
    $result = mysqli_query($koneksi, $sql);
    header("location:view-tiket.php");
}  
?>
</body>
</html>
