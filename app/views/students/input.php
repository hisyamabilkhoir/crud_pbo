<h2>Input Student</h2>

<form action="<?php echo URL; ?>/students/save" method="post">
    <table>
        <tr>
            <td>IDENTITY NUMBER</td>
            <td><input type="number" name="identity_number" required></td>
        </tr>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td>PHONE</td>
            <td><input type="number" name="phone" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>