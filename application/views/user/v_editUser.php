<div class="row">
	<div class="col-xl-4">
		<div class="card">
			<div class="card-header bg-primary">
				<h3 class="card-title">Form Edit User</h3>
			</div>
			<div class="card-body">
				<form action="<?php echo base_url('user/update'); ?>" method="POST">
					<input type="hidden" name="id" value="<?php echo $user->id; ?>">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control" value="<?php echo $user->nama; ?>" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" value="<?php echo $user->email; ?>" required autocomplete="off">
					</div>
					<button type="submit" class="btn btn-warning">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>