<?php


include "koneksi.php";
$id = $_GET['id'];
$sql = "select * from customer where id_customer = $id";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
$nama = $row['nama'];
$kelamin = $row['jenis_kelamin'];
$asal = $row['asal'];
$ttl = $row['tanggal_lahir'];
$telp = $row['no_telp'];
$eml = $row['email'];
$uname = $row['username'];
$pw = $row['password'];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kelamin = $_POST['jenis_kelamin'];
    $asal = $_POST['asal'];
    $ttl = $_POST['tanggal_lahir'];
    $telp = $_POST['no_telp'];
    $eml = $_POST['email'];
    $uname = $_POST['username'];
    $pw = $_POST['password'];



    $sql = "update customer set nama='$nama', jenis_kelamin='$kelamin', asal='$asal', tanggal_lahir='$ttl',
    no_telp='$telp', email='$eml', username='$uname', password='$pw' where id_customer='$id'";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        header("location:view-customer.php");
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
    <h3>Data cust</h3>
    <form action="" method="post">
        <table width="25%" border="0">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value=<?php echo $nama; ?>>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <select name="jenis_kelamin" value=<?php echo $kelamin; ?>>
                        <option value="">Pilih</option>
                        <option value="Perempuan" <?php if ($kelamin == "Perempuan") {
                            echo "selected";
                        } ?>>perempuan</option>
                        <option value="laki laki" <?php if ($kelamin == "laki laki") {
                            echo "selected";
                        } ?>>laki laki</option>
                    </select>
                </td>

            </tr>
            <tr>
                <td>asal</td>
                <td>:</td>
                <td><input type="text" name="asal" value=<?php echo $asal; ?>>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir" value=<?php echo $ttl; ?>>
                </td>
            </tr>
            <tr>
                <td>NO telpon</td>
                <td>:</td>
                <td><input type="text" name="no_telp" value=<?php echo $telp; ?>>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email" value=<?php echo $eml; ?>>
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" value=<?php echo $uname; ?>>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="password" value=<?php echo $pw; ?>>
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