<html>
    <head>
        <title> transaksi </title>
    </head>
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

    <body>
    <?php

session_start();

if ($_SESSION['status_admin'] == "hidup") {
    echo
        '<ul>
    <li><a href="adminpage.php">Admin</a></li>
    <li><a href="view-kapal.php">Data kapal</a></li>
    <li><a href="view-tiket.php">Data tiket</a></li>
    <li><a href="view-customer.php">Data customer</a></li>
    <li><a href="view-pembayaran.php">metode pembayaran</a></li>
    <li><a href="view-voucher.php">voucher</a></li>
    <li><a class="active" href="view-transaksi.php"> pesanan saya </a></li>
    <li><a href="logout.php">Log out</a></li>
    </ul>';
}else{
    echo
        '<ul>
    <li><a href="view-kapal.php">Data kapal</a></li>
    <li><a href="view-tiket.php">Data tiket</a></li>
    <li><a href="view-customer.php">Data customer</a></li>
    <li><a href="view-pembayaran.php">metode pembayaran</a></li>
    <li><a href="view-voucher.php">voucher</a></li>
    <li><a class="active" href="view-transaksi.php"> pesanan saya </a></li>
    <li><a href="logout.php">Log out</a></li>
    </ul>';
}


?>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
        <h3>pesanan</h3>
        <table border="1" align="center" width="100%">
            <tr bgcolor=#D9D9D9>
            <div style="width: 200px">
                <th>no</th>
                <th>jadwal_berangkat</th>
                <th>jenis_voucher</th>
                <th>nama_pembayaran</th>
                <th>nama</th>
                <th>aksi</th>
            </div>
            </tr>
            <?php
            include "koneksi.php";
            $idcust = $_SESSION['id_customer'];
            $query_mysql = mysqli_query($koneksi,"SELECT transaksi.*, tiket.jadwal_berangkat, voucher.jenis_voucher, jenis_pembayaran.nama_pembayaran, customer.nama FROM transaksi
            INNER JOIN tiket ON tiket.id_tiket = transaksi.id_tiket 
            INNER JOIN voucher ON voucher.id_voucher = transaksi.id_voucher 
            INNER JOIN jenis_pembayaran ON jenis_pembayaran.id_pembayaran = transaksi.id_pembayaran 
            INNER JOIN customer ON customer.id_customer = transaksi.id_customer WHERE transaksi.id_customer = $idcust ;");
            $nomor=1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>
            <tr>
                 <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['jadwal_berangkat']; ?></td>
                <td><?php echo $data['jenis_voucher']; ?></td>
                <td><?php echo $data['nama_pembayaran']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td>
                <a href="ubah-transaksi.php?id_transaksi=<?php echo $data ['id_transaksi']; ?>">Ubah</a>
                <a href="deletetransaksi.php?id_transaksi=<?php echo $data ['id_transaksi']; ?>">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
    </body>
</html>
        