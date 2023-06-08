<html>
    <head>
    <title> TIX.boat-kapal </title>
    <style>
    body {
    margin: 0;
    }

    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #89AEB0;
    position: fixed;
    height: 100%;
    overflow: auto;
    }

    li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
    }

    li a.active {
    background-color: #b7b7b7;
    color: white;
    }

    li a:hover:not(.active) {
    background-color: #555;
    color: white;
    }
    </style>
    </head>

    <body>
        <?php

    session_start();

    if ($_SESSION['status_admin'] == "hidup") {
        echo
            '<ul>
        <li><a href="adminpage.php">Admin</a></li>
        <li><a class="active" href="view-kapal.php">Data kapal</a></li>
        <li><a href="view-tiket.php">Data tiket</a></li>
        <li><a href="view-customer.php">Data customer</a></li>
        <li><a href="view-pembayaran.php">metode pembayaran</a></li>
        <li><a href="view-voucher.php">voucher</a></li>
        <li><a href="view-transaksi.php"> pesanan saya </a></li>
        <li><a href="logout.php">Log out</a></li>
        </ul>';
    }else{
        echo
            '<ul>
        <li><a class="active" href="view-kapal.php">Data kapal</a></li>
        <li><a href="view-tiket.php">Data tiket</a></li>
        <li><a href="view-customer.php">Data customer</a></li>
        <li><a href="view-pembayaran.php">metode pembayaran</a></li>
        <li><a href="view-voucher.php">voucher</a></li>
        <li><a href="view-transaksi.php"> pesanan saya </a></li>
        <li><a href="logout.php">Log out</a></li>
        </ul>';
    }


    ?>
        <div style="margin-left:25%;padding:1px 16px;height:1000px;">
        <h3>Kapal</h3>
        <?php
        if($_SESSION['status_admin'] == "hidup"){
            echo
            '<br>
            <a href="tambah-kapal.php">Tambah Data</a>
            </br>';
        }?>

        <table border="1" align="center" width="100%">
            <tr bgcolor=#D9D9D9>
            <div style="width: 200px">
                <th>no</th>
                <th>jenis kapal</th>
                <th>nama kapal</th>
                <th>kode kapal</th>
                <?php
                if ($_SESSION['status_admin'] == "hidup"){
                    echo
                    '<th>aksi</th>';
                }?>
            </div>
            </tr>
            <?php
            include "koneksi.php";
            $query = mysqli_query($koneksi,"SELECT*FROM kapal") or die(mysqli_error());
            $nomor=1;
            while($data = mysqli_fetch_array($query)){
            ?>
            <tr align="center">
                <td><?php echo $nomor++ ?></td>
                <td><?php echo $data['jenis_kapal']; ?></td>
                <td><?php echo $data['nama_kapal']; ?></td>
                <td><?php echo $data['kode_kapal']; ?></td>
            <?php
            if($_SESSION['status_admin'] == "hidup"){
                echo
                '<td>
                    <a href="ubah-kapal.php?id_kapal='. $data ['id_kapal'].';">Ubah</a>  
                    <a href="delete-kapal.php?id_kapal='. $data ['id_kapal'].';">Hapus</a>
                </td>';
            } ?>
            </tr>
            <?php } ?>
        </table>
    </div>
    </body>
</html>