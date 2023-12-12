<h2>Edit Student</h2>

<form action="<?php echo URL; ?>/students/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>IDENTITY NUMBER</td>
            <td><input type="number" name="identity_number" value="<?php echo $data['row']['identity_number']; ?>" required></td>
        </tr>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="name" value="<?php echo $data['row']['name']; ?>" required></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="email" value="<?php echo $data['row']['email']; ?>" required></td>
        </tr>
        <tr>
            <td>PHONE</td>
            <td><input type="number" name="phone" value="<?php echo $data['row']['phone']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>