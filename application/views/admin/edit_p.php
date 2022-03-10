<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data Pelamar</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data Pelamar</h4>
                        <br>
                        <?php 
                               foreach($edit_p as $pm): 
                                $nip = $pm->nip;
                                endforeach ;
                        ?>
                        <form action="<?=base_url('Pelamar/simpan_edit_p') ?>" method="post">
                        <input type="hidden" name="nip" value="<?= $nip ?>">
                            <div class="form-group">
                                <label for="name">Nama Pelamar</label>
                                <input type="text" class="form-control" id="nama_pelamar" name="nama_pelamar" value="<?=$pm->nama_pelamar ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?=$pm->tempat_lahir ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tl" name="tl" value="<?=$pm->tl ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">No Hp</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?=$pm->no_hp ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$pm->alamat ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Tanggal Masuk</label>
                                <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" value="<?=$pm->tgl_masuk ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Tanggal Interview</label>
                                <input type="date" class="form-control" id="tgl_interview" name="tgl_interview" value="<?=$pm->tgl_interview ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Tanggal MOP</label>
                                <input type="date" class="form-control" id="tgl_mop" name="tgl_mop" value="<?=$pm->tgl_mop ?>">
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