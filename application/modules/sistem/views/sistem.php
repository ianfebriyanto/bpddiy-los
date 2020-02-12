<body>

    <table class="responsive-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Sistem ID</th>
                <th>Sistem Nama</th>
                <th>Sistem Diskripsi</th>
                <th>Sistem Versi</th>
                <th>Create</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($sistem as $data) : ?>
                <tr>
                    <td> <?php echo $no++; ?> </td>
                    <td> <?= $data['SISTEM_ID']; ?> </td>
                    <td> <?= $data['SISTEM_NAMA']; ?> </td>
                    <td> <?= $data['SISTEM_DISKRIPSI']; ?> </td>
                    <td> <?= $data['SISTEM_VERSI']; ?> </td>
                    <td> <a href="<?= base_url('sistem/create') ?>">Create</a></td>
                    <td> <a href="<?= base_url('sistem/update') ?>">Update</a> </td>
                    <td> <a href="<?= base_url('sistem/delete') ?>">Delete</a> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>