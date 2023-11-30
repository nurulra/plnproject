<h2>Input Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/save" method="post">
    <table>
         <tr>
            <td>NAMA</td>
            <td><input type="text" name="pel_nama" required></td>
        </tr>
        <tr>
            <td>GOL ID</td>
            <td><input type="text" name="gol_id" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="pel_alamat" required></td>
        </tr>
        <tr>
            <td>HP</td>
            <td><input type="text" name="pel_hp" required></td>
        </tr>
        <tr>
            <td>KTP</td>
            <td><input type="text" name="pel_ktp" required></td>
        </tr>
        <tr>
            <td>SERI</td>
            <td><input type="text" name="pel_seri" required></td>
        </tr>
        <tr>
            <td>METERAN</td>
            <td><input type="text" name="pel_meteran" required></td>
        </tr>
        <tr>
            <td>AKTIF</td>
            <td><input type="text" name="pel_aktif" required></td>
        </tr>
        <tr>
            <td>USER ID</td>
            <td><input type="text" name="user_id" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>