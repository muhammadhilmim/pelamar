 <!-- DataTales Example -->
             <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="h3 mb-4 text-gray-800"> Data Karyawan
                             <div class="table-responsive">
                             <a href="<?= base_url('Karyawan/tambah')?>">
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
                                            <th>Jabatan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>No Hp</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                   <?php
                                   foreach($karyawan as $km):
                                   ?>
                                    <tbody>
                                        
                                        <td><?= $km->nama_karyawan ?></td>
                                        <td><?= $km->jabatan ?></td>
                                        <td><?= $km->jk ?></td>
                                        <td><?= $km->no_hp ?></td>
                                        <td><?= $km->alamat?></td>
                                        <td>
                                        <a href="<?= base_url('Karyawan/hapus_k/'.$km->nik)?>">
                                        <button class="btn btn-danger btn-"><i class="fa fa-trash"></i></button>
                                        </a>

                                        <a href="<?= base_url('Karyawan/edit_k/'.$km->nik)?>">
                                        <button class="btn btn-success btn-"><i class="fa fa-edit"></i></button>
                                        </a> 
                                        <a href="<?=base_url("Karyawan/print_karyawan/".$km->nik)?>" class="btn btn-warning btn-"><i class="fa fa-print"></i></a>
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