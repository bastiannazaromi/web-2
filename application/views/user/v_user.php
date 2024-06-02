<div class="row mb-3">
	<div class="col-xl-12">
		<a href="<?php echo base_url('user/add'); ?>" class="btn btn-primary">Tambah</a>
	</div>
</div>
<div class="row">
	<div class="col-xl-12">
		<table class="table table-bordered tabled-striped">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Username</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
			<?php foreach ($user as $i => $usr) : ?>
				<tr>
					<td><?php echo $i + 1; ?></td>
					<td><?php echo $usr->nama; ?></td>
					<td><?php echo $usr->username; ?></td>
					<td><?php echo $usr->email; ?></td>
					<td>
						<a href="<?php echo base_url('user/edit/') . $usr->id; ?>" class="btn btn-warning">Edit</a>
						<a href="<?php echo base_url('user/delete/') . $usr->id; ?>" class="btn btn-danger">Hapus</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>