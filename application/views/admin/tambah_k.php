<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Karyawan</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah Karyawan</h1>

	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('Karyawan/save_k')?>" autocomplete="off">
						<div class="form-group col-lg-12">
							<label>Nama Karyawan : </label>
							<input type="text" name="nama_karyawan" class="form-control js-single" id="nama_karyawan">
						</div>
						<div class="form-group col-lg-12">
							<label>Jabatan: </label>
							<input type="text" name="jabatan" class="form-control js-single" id="jabatan">
						</div>
						<div class="form-group col-lg-12">
							<label>Jenis Kelmain: </label>
							
							    <select class="form-control" name="jk" id="jk">
                                    <option value="p">Perempuan</option>
                                    <option value="l">Laki-laki</option>
                                </select>
							
						</div>
						<div class="form-group col-lg-12">
							<label>No Hp : </label>
							<input type="text" name="no_hp" class="form-control js-single" id="no_hp">
						</div>
						<div class="form-group col-lg-12">
							<label>Alamat : </label>
							<input type="text" name="alamat" class="form-control js-single" id="alamat">
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