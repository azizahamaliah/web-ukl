<html>
    <head>
    <h1>view tabel</h1>
    </head>

    <body>
        <h3>admin</h3>
        <table border="1" class="table">
            <tr>
                <th>no</th>
                <th>id_admin</th>
                <th>nama</th>
                <th>no_telp</th>
            </tr>
            <?php
            include "koneksi.php";
            $query_mysql = mysqli_query($koneksi,"SELECT*FROM admin") or die(mysqli_error());
            $nomor=1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>
            <tr>
                <td><?php echo $nomor++ ?></td>
                <td><?php echo $data['id_admin']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['no_telp']; ?></td>
            </tr>  
            <?php } ?>
        </table>
    </body>
</html>