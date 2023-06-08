<html>
<head>
    <title>Ubah Data Kapal</title>
</head>
<body>
    <h3 align="center"> Form Ubah Data</h3>

    <?php


include "koneksi.php";
$id = $_GET['id_kapal'];
$sql = "select * from kapal where id_kapal = '$id'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
$jenis = $row['jenis_kapal'];
$nama = $row['nama_kapal'];
$kodekpl = $row['kode_kapal'];

if (isset($_POST['simpan'])) {
    $jenis = $_POST['jenis_kapal'];
    $nama = $_POST['nama_kapal'];
    $kodekpl = $_POST['kode_kapal'];


    $sql = "update kapal set jenis_kapal='$jenis', nama_kapal='$nama', kode_kapal='$kodekpl' where id_kapal='$id'";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        header("location:view-kapal.php");

    } else {
        die(mysqli_error($koneksi));

    }
}

?>

<form action="" method="post">
<table align="center" bgcolor="grey" width="50%">
    <tr>
        <td>ID Kapal</td>
        <td> : </td>
        <td><input type="text" size="5" name="id_kapal"  value=<?php echo $id; ?>>
        </td>
    </tr>
    <tr>
        <td>Jenis Kapal</td>
        <td> : </td>
        <td>
            <select name="jenis_kapal" value=<?php echo $jenis;?>>
                <option value="">Pilih</option>
                <option value ="Penumpang" <?php if($jenis == "Penumpang"){echo "selected";}?>>penumpang</option>
                <option value ="Barang" <?php if($jenis == "Barang"){echo "selected";}?>>barang</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Nama Kapal</td>
        <td> : </td>
        <td><input type="text"  size="25" placeholder="masukan nama"name="nama_kapal" value=<?php echo $nama; ?>>
        </td>
    </tr>
    <tr>
        <td>Kode Kapal</td>
        <td> : </td>
        <td><input type="text" size="25" placeholder="masukan kode" name="kode_kapal" value=<?php echo $kodekpl; ?>>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
            <input type="submit" name="simpan" value="simpan">
            <input type="reset" name="batal" value="Batal">
            <input type="button" name="kembali" value="Kembali" onclick="self.history.back()">
        </td>
    </tr>
</table>
</form>


</body>
</html>