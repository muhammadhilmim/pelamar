<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah User</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah User</h1>

	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('User/save_u')?>" autocomplete="off">
						<div class="form-group col-lg-12">
							<label>Nama User : </label>
							<input type="text" name="nama_user" class="form-control js-single" id="nama_user">
						</div>
						<div class="form-group col-lg-12">
							<label>Username: </label>
							<input type="text" name="username" class="form-control js-single" id="username">
						</div>
						<div class="form-group col-lg-12">
							<label>Password: </label>
							<input type="text" name="password" class="form-control js-single" id="password">
						</div>
						<div class="form-group col-lg-12">
							<label>Jabatan : </label>
							<input type="text" name="level" class="form-control js-single" id="level">
						</div>
						

						<div class="form-group col-lg-6">
							<button type="submit" class="btn btn-info btn-flat">
								<i class="fa fa-pencil"></i> Simpan</button>
							
						</div>
				</div>
			</div>
		</div>

	</div>

</div>
	</div>