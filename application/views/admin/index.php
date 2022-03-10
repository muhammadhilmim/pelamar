
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h1 class="h3 mb-4 text-gray-800">Data Pelamar
                            <div class="table-responsive">
                            <a href="<?= base_url('Pelamar/tambah')?>">
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
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>No Hp</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Tanggal Interview</th>
                                            <th>Tanggal MOP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                   <?php
                                   foreach($pelamar as $pm):
                                   ?>
                                    <tbody>
                                        
                                        <td><?= $pm->nama_pelamar ?></td>
                                        <td><?= $pm->tempat_lahir ?></td>
                                        <td><?= $pm->tl ?></td>
                                        <td><?= $pm->no_hp ?></td>
                                        <td><?= $pm->alamat?></td>
                                        <td><?= $pm->tgl_masuk?></td>
                                        <td><?= $pm->tgl_interview?></td>
                                        <td><?= $pm->tgl_mop?></td>
                                        <td>
                                        <a href="<?= base_url('Pelamar/hapus_p/'.$pm->nip)?>">
                                        <button class="btn btn-danger btn-"><i class="fa fa-trash"></i></button>
                                        </a>

                                        <a href="<?= base_url('Pelamar/edit_p/'.$pm->nip)?>">
                                        <button class="btn btn-success btn-"><i class="fa fa-edit"></i></button>
                                        </a> 
                                        <a href="<?=base_url("Pelamar/print_pelamar/".$pm->nip)?>" class="btn btn-warning btn-"><i class="fa fa-print"></i></a>
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