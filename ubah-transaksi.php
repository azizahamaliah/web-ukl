<?php


include "koneksi.php";
$id = $_GET['id_transaksi'];
$sql = "select * from transaksi where id_transaksi = '$id'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
$idt = $row['id_tiket'];
$idv = $row['id_voucher'];
$idp = $row['id_pembayaran'];
$idc = $row['id_customer'];


if (isset($_POST['proses'])) {
    $idt = $_POST['id_tiket'];
    $idv = $_POST['id_voucher'];
    $idp = $_POST['id_pembayaran'];
    $idc = $_POST['id_customer'];



    $sql = "update transaksi set id_tiket='$idt', id_voucher='$idv', id_pembayaran='$idp', id_customer='$idc' where id_transaksi='$id'";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        header("location:view-transaksi.php");

    } else {  
        die(mysqli_error($koneksi));

    }
}

?>

<h3 align="center"> update </h3>

<form action="" method="post">
<table align="center" width="40%" bgcolor="#008B8B">
    <tr>
        <td>Tiket</td>
        <td> : </td>
        <td><input type="text"  name="id_tiket" value=<?php echo $idt; ?> ></td>
    </tr>
    <tr>
        <td>Voucher</td>
        <td> : </td>
        <td><input type="text" name="id_voucher" value=<?php echo $idv; ?> ></td>
    </tr>
    <tr>
        <td>Pembayaran</td>
        <td> : </td>
        <td><input type="text" name="id_pembayaran" value=<?php echo $idp; ?> ></td>
    </tr>
    <tr>
        <td>Nama Customer</td>
        <td> : </td>
        <td><input type="text" name="id_customer" value=<?php echo $idc; ?> ></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="simpan" name="proses"></td>
    </tr>
</table>
</form>