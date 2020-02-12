<body>

	<table class="responsive-table">
		<thead>
			<tr>
				<th>No</th>
				<th>Menu ID</th>
				<th>Menu Nama</th>
				<th>Menu Link</th>
				<th>Menu Diskripsi</th>
				<th>Menu Status</th>
				<th>Create</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($menu as $data) : ?>
				<tr>
					<td> <?php echo $no++; ?> </td>
					<td> <?= $data['MENU_ID']; ?> </td>
					<td> <?= $data['MENU_NAMA']; ?> </td>
					<td> <?= $data['MENU_LINK']; ?> </td>
					<td> <?= $data['MENU_DISKRIPSI']; ?> </td>
					<td> <?= $data['MENU_STATUS']; ?> </td>
					<td> <a href="<?= base_url('menu/create') ?>">Create</a></td>
					<td> <a href="<?= base_url('menu/update') ?>">Update</a> </td>
					<td> <a href="<?= base_url('menu/delete') ?>">Delete</a> </td>

					<td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>

</html>