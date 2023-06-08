<?php


include "koneksi.php";
$id = $_GET['id'];
$sql = "select * from voucher where id_voucher = '$id'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
$nama = $row['jenis_voucher'];

if (isset($_POST['submit'])) {
    $nama = $_POST['jenis_voucher'];


    $sql = "update voucher set jenis_voucher='$nama' where id_voucher='$id'";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        header("location:view-voucher.php");

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

                <td>Nama Voucher</td>

                <td>:</td>

                <td><input type="text" name="jenis_voucher" value=<?php echo $nama; ?>>
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