<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Pelamar</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah Pelamar</h1>

	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('Pelamar/save_p')?>" autocomplete="off">
						<div class="form-group col-lg-12">
							<label>Nama Pelamar : </label>
							<input type="text" name="nama_pelamar" class="form-control js-single" id="nama_pelamar">
						</div>
						<div class="form-group col-lg-12">
							<label>Tempat lahir : </label>
							<input type="text" name="tempat_lahir" class="form-control js-single" id="tempat_lahir">
						</div>
						<div class="form-group col-lg-12">
							<label>Tanggal Lahir : </label>
							<input type="date" name="tl" class="form-control js-single" id="tl">
						</div>
						<div class="form-group col-lg-12">
							<label>No Hp : </label>
							<input type="text" name="no_hp" class="form-control js-single" id="no_hp">
						</div>
						<div class="form-group col-lg-12">
							<label>Alamat : </label>
							<input type="text" name="alamat" class="form-control js-single" id="alamat">
						</div>
						<div class="form-group col-lg-12">
							<label>Tanggal Masuk : </label>
							<input type="date" name="tgl_masuk" class="form-control js-single" id="tgl_masuk">
						</div>
						<div class="form-group col-lg-12">
							<label>Tanggal Interview: </label>
							<input type="date" name="tgl_interview" class="form-control js-single" id="tgl_interview">
						</div>
						<div class="form-group col-lg-12">
							<label>Tanggal Mop : </label>
							<input type="date" name="tgl_mop" class="form-control js-single" id="tgl_mop">
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