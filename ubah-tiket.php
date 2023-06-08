<?php


include "koneksi.php";
$id = $_GET['id'];
$sql = "select * from tiket where id_tiket = $id";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
$rute = $row['rute_berangkat'];
$tujuan = $row['rute_sampai'];
$jadwal = $row['jadwal_berangkat'];
$jumlah = $row['jumlah_pembelian'];
$kelas = $row['kelas_layanan'];
$kodet = $row['kode_tiket'];
$total = $row['harga'];

if (isset($_POST['submit'])) {
    $rute = $_POST['rute_berangkat'];
    $tujuan = $_POST['rute_sampai'];
    $jadwal = $_POST['jadwal_berangkat'];
    $jumlah = $_POST['jumlah_pembelian'];
    $kelas = $_POST['kelas_layanan'];
    $kodet = $_POST['kode_tiket'];
    $total = $_POST['harga'];
    


    $sql = "update tiket set rute_berangkat='$rute', rute_sampai='$tujuan', jadwal_berangkat='$jadwal', jumlah_pembelian='$jumlah',
    kelas_layanan='$kelas', kode_tiket='$kodet', harga='$total' where id_tiket='$id'";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        header("location:view-tiket.php");
    } else {
        die(mysqli_error($koneksi));
    }
}

?>

<html>
<head>
    <h1>Update</h1>
</head>

<body>
    <h3>Data Voucher</h3>
    <form action="" method="post">
        <table width="25%" border="0">
            <tr>
                <td>Rute</td>
                <td>:</td>
                <td><input type="text" name="rute_berangkat" value=<?php echo $rute; ?>>
                </td>
            </tr>
            <tr>
                <td>Tujuan</td>
                <td>:</td>
                <td><input type="text" name="rute_sampai" value=<?php echo $tujuan; ?>>
                </td>
            </tr>
            <tr>
                <td>Jadwal</td>
                <td>:</td>
                <td><input type="text" name="jadwal_berangkat" value=<?php echo $jadwal; ?>>
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah_pembelian" value=<?php echo $jumlah; ?>>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas_layanan" value=<?php echo $kelas; ?>>
                </td>
            </tr>
            <tr>
                <td>Kode</td>
                <td>:</td>
                <td><input type="text" name="kode_tiket" value=<?php echo $kodet; ?>>
                </td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" value="<?php echo $total; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Kirim"></td>
            </tr>
        </table>
    </form>
</body>
</html>