<h2>Input User</h2>

<form action="<?php echo URL; ?>/users/save" method="post">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="password" required></td>
        </tr>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td>POS</td>
            <td><input type="text" name="pos" required></td>
        </tr>
        <tr>
            <td>ROLE</td>
            <td><input type="text" name="role" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>