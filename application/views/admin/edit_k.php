<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data Karyawan</title>
</head>
<body>
<div class="container-fluid">
    <div class="row"> 
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data Karyawan</h4>
                        <br>
                        <?php 
                               foreach($edit_k as $km): 
                                $nik = $km->nik;
                                endforeach ;
                        ?>
                        <form action="<?=base_url('Karyawan/simpan_edit_k') ?>" method="post">
                        <input type="hidden" name="nik" value="<?= $nik ?>">
                            <div class="form-group">
                                <label for="name">Nama Karyawan</label>
                                <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" value="<?=$km->nama_karyawan ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?=$km->jabatan ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Jenis Kelamin</label>
                                <select type="text" class="form-control" id="jk" name="jk" value="<?=$km->jk ?>">
                                    <option value="p">Perempuan</option>
                                    <option value="l">Laki-laki</option>
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="name">No Hp</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?=$km->no_hp ?>">
                            
                            </div>
                            <div class="form-group">
                                <label for="name">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$km->alamat ?>">
                            </div>
                           
                            <button type="submit" class="btn btn-secondary">simpan</button>
                            </form>
                    </div>    
                </div>      
            </div>    
        </div>              
    </div>                   
</div> 
</body>

</html>