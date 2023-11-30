<h2>Edit Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/update" method="pel">
<input type="hidden" name="id" value="<?php echo $data['row']['pel_id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td>
                <select name="pel_id_gol">
                    <?php foreach ($data['optgol'] as $opt) { ?>
                        <option value="<?php echo $opt['pel_id']; ?>" <?php echo $opt['pel_id'] == $data['row']['pel_id_gol'] ? "selected" : ""; ?>><?php echo $opt['pel_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="pel_alamat" value="<?php echo $data['row']['pel_alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>HP</td>
            <td>
                <textarea name="pel_hp" cols="30" rows="10"><?php echo $data['row']['pel_hp']; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>KTP</td>
            <td>
                <textarea name="pel_ktp" cols="30" rows="10"><?php echo $data['row']['pel_ktp']; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>SERI</td>
            <td>
                <textarea name="pel_seri" cols="30" rows="10"><?php echo $data['row']['pel_seri']; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>meteran</td>
            <td>
                <textarea name="pel_meteran" cols="30" rows="10"><?php echo $data['row']['pel_meteran']; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>AKTIF</td>
            <td>
                <textarea name="pel_aktif" cols="30" rows="10"><?php echo $data['row']['pel_akti']; ?></textarea>
            </td>
        </tr>
        <tr>
            <td>USER ID</td>
            <td>
                <textarea name="pel_aktif" cols="30" rows="10"><?php echo $data['row']['pel_akti']; ?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>