<html>
<head>
    <title>Tambah Data Voucher</title>
</head>
<body>
    
<h3 align="center">voucher</h3>

<form action="" method="post">
<table align="center"  width=60% bgcolor="#008B8B">
    <tr>
        <td>jenis voucher</td>
        <td><input type="text" name="jenis_voucher"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan" name="proses"></td>
    </tr>
</table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){ 
    $nama = $_POST['jenis_voucher'];
    $sql = "INSERT INTO voucher values
    ('','$nama')";
    $result = mysqli_query($koneksi, $sql);
    header("location:view-voucher.php");
}  
?>
</body>
</html>