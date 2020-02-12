<body>

    <table class="responsive-table">
        <thead>
            <tr>
                <th>No</th>
                <th>User ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Host</th>
                <th>Date Create</th>
                <th>Status</th>
                <th>Create</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($user as $data) : ?>
                <tr>
                    <td> <?php echo $no++; ?> </td>
                    <td> <?= $data['USER_ID']; ?> </td>
                    <td> <?= $data['USERNAME']; ?> </td>
                    <td> <?= $data['PASSWORD']; ?> </td>
                    <td> <?= $data['NAMA_LENGKAP']; ?> </td>
                    <td> <?= $data['EMAIL']; ?> </td>
                    <td> <?= $data['HOST']; ?> </td>
                    <td> <?= $data['DATE_CREATE']; ?> </td>
                    <td> <?= $data['STATUS']; ?> </td>
                    <td> <a href="<?= base_url('user/create') ?>">Create</a></td>
                    <td> <a href="<?= base_url('user/update') ?>">Update</a> </td>
                    <td> <a href="<?= base_url('user/delete') ?>">Delete</a> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>