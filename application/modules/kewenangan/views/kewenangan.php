<body>
	<a href="<?= base_url('vendor/'); ?>chart.js/Chart.bundle.js">ij</a>
	<table class="responsive-table">
		<thead>
			<tr>
				<th>No</th>
				<th>Grup ID</th>
				<th>Menu ID</th>
				<th>Create</th>
				<th>Update</th>
				<th>Delete</th>
				<th>Create</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($kewenangan as $data) : ?>
				<tr>
					<td> <?php echo $no++; ?> </td>
					<td> <?= $data['GRUP_ID']; ?> </td>
					<td> <?= $data['MENU_ID']; ?> </td>
					<td> <?= $data['CREATE']; ?> </td>
					<td> <?= $data['UPDATE']; ?> </td>
					<td> <?= $data['DELETE']; ?> </td>
					<td> <a href="<?= base_url('kewenangan/create') ?>">Create</a></td>
					<td> <a href="<?= base_url('kewenangan/update') ?>">Update</a> </td>
					<td> <a href="<?= base_url('kewenangan/delete') ?>">Delete</a> </td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>

</html>