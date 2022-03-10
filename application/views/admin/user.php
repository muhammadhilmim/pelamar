 <!-- DataTales Example -->
            <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h1 class="h3 mb-4 text-gray-800">Data User
                            <div class="table-responsive">
                            <a href="<?= base_url('User/tambah')?>">
                            <button class="btn btn-secondary btn-"><i class="fa fa-plus"></i></button>
                            </a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                           
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Jabatan</th> 
                                            <th>Aksi</th> 
                                        </tr>
                                    </thead>
                                    <?php
                                   foreach($user as $um):
                                   ?>
                                    <tbody>
                                       
                                        <td><?= $um->nama_user ?></td>
                                        <td><?= $um->username ?></td>
                                        <td><?= $um->password ?></td>
                                        <td><?= $um->level ?></td>
                                        <td>
                                        <a href="<?= base_url('User/hapus_u/'.$um->id)?>">
                                        <button class="btn btn-danger btn-"><i class="fa fa-trash"></i></button>
                                        </a>

                                        <a href="<?= base_url('User/edit_u/'. $um->id)?>">
                                        <button class="btn btn-success btn-"><i class="fa fa-edit"></i></button>
                                        </a>
                                        <a href="<?=base_url("User/print_user/".$um->id)?>" class="btn btn-warning btn-"><i class="fa fa-print"></i></a>
                                        </td>
                                    </tbody>
                                    <?php
                                    endforeach;
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>