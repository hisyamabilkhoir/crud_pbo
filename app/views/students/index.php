<h2>Students</h2>

<a href="<?php echo URL; ?>/students/input" class="btn">Input Student</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>IDENTITY NUMBER</th>
        <th>PHONE</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    <?php $no = 1;
    foreach ($data['rows'] as $row) { ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['identity_number']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><a href="<?php echo URL; ?>/students/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
            <td><a href="<?php echo URL; ?>/students/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
        </tr>
    <?php $no++;
    } ?>

</table>