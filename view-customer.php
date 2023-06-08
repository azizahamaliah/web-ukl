<html>
    <head>
        <title>register</title>
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
        <li><a href="view-kapal.php">Data kapal</a></li>
        <li><a href="view-tiket.php">Data tiket</a></li>
        <li><a class="active" href="view-customer.php">Data customer</a></li>
        <li><a href="view-pembayaran.php">metode pembayaran</a></li>
        <li><a href="view-voucher.php">voucher</a></li>
        <li><a href="view-transaksi.php"> pesanan saya </a></li>
        <li><a href="logout.php">Log out</a></li>
        </ul>';
    }else{
        echo
            '<ul>
        <li><a href="view-kapal.php">Data kapal</a></li>
        <li><a href="view-tiket.php">Data tiket</a></li>
        <li><a class="active" href="view-customer.php">Data customer</a></li>
        <li><a href="view-pembayaran.php">metode pembayaran</a></li>
        <li><a href="view-voucher.php">voucher</a></li>
        <li><a href="view-transaksi.php"> pesanan saya </a></li>
        <li><a href="logout.php">Log out</a></li>
        </ul>';
    }


    ?>
        <div style="margin-left:25%;padding:1px 16px;height:1000px;">
        <h3>register - customer</h3>
        <table border="1" align="center" width="100%">
            <tr bgcolor=#D9D9D9>
                <th>no</th>
                <th>nama</th>
                <th>jenis_kelamin</th>
                <th>asal</th>
                <th>tanggal_lahir</th>
                <th>no_telp</th>
                <th>email</th>
                <th>username</th>
                <th>password</th>
                <th>aksi</th>
            </tr>
            <?php
            include "koneksi.php";
            if($_SESSION['status_admin'] == "mati"){$sql = "SELECT * FROM customer where id_customer = $_SESSION[id_customer]";}else{$sql = "SELECT*FROM customer";}
            $query_mysql = mysqli_query($koneksi,$sql) or die(mysqli_error());
            $nomor=1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>
            <tr>
                <td><?php echo $nomor++ ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['jenis_kelamin']; ?></td>
                <td><?php echo $data['asal']; ?></td>
                <td><?php echo $data['tanggal_lahir']; ?></td>
                <td><?php echo $data['no_telp']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['password']; ?></td>

                <td>
                <a href="ubah-cust.php?id=<?php echo $data['id_customer'];?>;">Ubah</a>
                <a href="deletecust.php?id=<?php echo $data['id_customer'];?>;">Hapus</a>
                </td>
                
            </tr>
            <?php } ?>
        </table>
    </div>
    </body>     
</html>
