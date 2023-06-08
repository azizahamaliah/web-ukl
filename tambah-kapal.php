<h3 align="center">Tambah barang</h3>

<form action="simpan-kapal.php" method="post">
<table align="center" bgcolor="grey" width="50%">
    <tr>
        <td>ID Kapal</td>
        <td> : </td>
        <td><input type="text" size="5" name="id_kapal"></td>
    </tr>
    <tr>
        <td>Jenis Kapal</td>
        <td> : </td>
        <td>
            <select name="jenis_kapal">
                <option value="">Pilih</option>
                <option value ="Penumpang">penumpang</option>
                <option value ="Barang">barang</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Nama Kapal</td>
        <td> : </td>
        <td><input type="text"  size="25" placeholder="masukan nama"name="nama_kapal"></td>
    </tr>
    <tr>
        <td>Kode Kapal</td>
        <td> : </td>
        <td><input type="text" size="25" placeholder="masukan kode" name="kode_kapal"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
            <input type="submit" name="simpan" value="simpan">
            <input type="reset" name="batal" value="Batal">
            <input type="button" name="kembali" value="Kembali" onclick="self.history.back()">
        </td>
    </tr>
</table>
</form>
