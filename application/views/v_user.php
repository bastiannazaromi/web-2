<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<title><?php echo $title; ?></title>
</head>

<body>
	<h1><?php echo $title; ?></h1>

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

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>