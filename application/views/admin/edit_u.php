<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data User</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data User</h4>
                        <br>
                        <?php 
                               foreach($edit_u as $um): 
                                $id = $um->id;
                                endforeach ;
                        ?>
                        <form action="<?=base_url('User/simpat_edit') ?>" method="post">
                        <input type="hidden" name="id" value="<?= $id ?>">
                            <div class="form-group">
                                <label for="name">Nama User</label>
                                <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?=$um->nama_user ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?=$um->username ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Password</label>
                                <input type="text" class="form-control" id="password" name="password" value="<?=$um->password ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Jabatan</label>
                                <input type="text" class="form-control" id="level" name="level" value="<?=$um->level ?>">
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