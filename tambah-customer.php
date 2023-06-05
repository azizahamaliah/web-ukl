<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIX.boat-register</title>
</head>
<body>

<h3 align="center"> Register </h3>

<form action="" method="post">
<table align="center"  width=80% bgcolor="#008B8B">
    <tr>
        <td>Nama</td>
        <td><input type="text" placeholder="...." name="nama"></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><input type="text" placeholder="...."name="jenis_kelamin"></td>
    </tr>
    <tr>
        <td>Asal</td>
        <td><input type="text" placeholder="..." name="asal"></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td><input type="date" placeholder="...." name="tanggal_lahir"></td>
    </tr>
    <tr>
        <td>No Handphone</td>
        <td><input type="text" placeholder="....." name="no_telp"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" placeholder="..." name="email"></td>
    </tr>
    <tr>
        <td>Username</td>
        <td><input type="text" placeholder="....." name="username"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="text" placeholder="....." name="password"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="simpan" name="proses"></td>
    </tr>
</table>
</form>
</body>
</html>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){ 
    $nama = $_POST['nama'];
    $jeniskel = $_POST['jenis_kelamin'];
    $asal = $_POST['asal'];
    $ttl = $_POST['tanggal_lahir'];
    $nohp = $_POST['no_telp'];
    $eml = $_POST['email'];
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "INSERT INTO customer values
    ('','$nama','$jeniskel','$asal','$ttl','$nohp','$eml','$uname','$pass')";
    $result = mysqli_query($koneksi, $sql);
    header("location:view-customer.php");
}  
?>