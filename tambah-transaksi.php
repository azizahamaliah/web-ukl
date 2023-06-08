<?php  

session_start();
?>

<html>
<head>
    <title> Halaman Admin</title>
</head>
 
<body>
<h3 align="center"> Tambah Data Tiket </h3>

<form action="" method="post">
<table align="center" width="40%" bgcolor="#008B8B">
    <tr>
    <td> voucher </td>
         <td> : </td>
         <td>
            <select name="voucher">
                <option value="">--Pilih--</option>
                <option value ="910">potongan 50%</option>
                <option value ="911">potongan 20%</option>
            </select>
        </td>
    </tr>
    <tr>
    <td> pembayaran </td>
         <td> : </td>
         <td>
            <select name="jenis_pembayaran">
                <option value="">--Pilih--</option>
                <option value ="161">transfer bank</option>
                <option value ="162">dana</option>
                <option value ="163">cash</option>
            </select>
        </td>
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
    $idt = $_GET['id'];
    $idv = $_POST['voucher'];
    $idp = $_POST['jenis_pembayaran'];
    $idc = $_SESSION['id_customer'];
    $sql = "INSERT INTO transaksi values
    ('','$idt','$idv','$idp','$idc')";
    $result = mysqli_query($koneksi, $sql);
    if($result){
        header("location:view-transaksi.php");
    }else{
        die(mysqli_error($koneksi));
    }
}   
?>
</body>
</html>