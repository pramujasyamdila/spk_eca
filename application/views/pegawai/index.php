<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success alert-has-icon">
                <div class="alert-icon"><i class="fas fa fa-check"></i></div>
                <div class="alert-body">
                    <div class="alert-title">Success</div>
                    <?= $this->session->flashdata('success'); ?>
                </div>
            </div>
        <?php } ?>
        <?php if ($this->session->flashdata('danger')) { ?>
            <div class="alert alert-danger alert-has-icon">
                <div class="alert-icon"><i class="fas fa fa-trash"></i></div>
                <div class="alert-body">
                    <div class="alert-title">Success</div>
                    <?= $this->session->flashdata('danger'); ?>
                </div>
            </div>
        <?php } ?>
        <br>
        <div class="card card-danger">
            <div class="card-header">
                <h4>Data pegawai</h4>
                <div class="card-header-action">
                    <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah"> <i class="fas fa fa-plus"> </i> Tambah pegawai</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>No Telpon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($get_all_pegawai as $key => $value) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value['nama_pegawai'] ?></td>
                                <td><?= $value['username'] ?></td>
                                <td><?= $value['email'] ?></td>
                                <td><?= $value['no_telpon'] ?></td>
                                <td>
                                    <a href="javascript:;" data-toggle="modal" data-target="#edit<?= $value['id_pegawai'] ?>" class="btn btn-sm btn-warning"><i class="fas fa fa-edit"> </i></a>
                                    <a href="<?= base_url('pegawai/hapus/' . $value['id_pegawai']) ?>" class="btn btn-sm btn-danger"><i class="fas fa fa-trash"> </i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('pegawai/tambah') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama pegawai</label>
                        <input type="text" name="nama" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" name="password" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">No Telpon</label>
                        <input type="text" name="no_telpon" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
foreach ($get_all_pegawai as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id_pegawai'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('pegawai/edit') ?>" method="post">
                    <input type="hidden" name="id_pegawai" value="<?= $value['id_pegawai'] ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nama Pegawai</label>
                            <input type="text" name="nama" value="<?= $value['nama_pegawai'] ?>" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" value="<?= $value['username'] ?>" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" value="<?= $value['email'] ?>" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">No Telpon</label>
                            <input type="text" name="no_telpon" value="<?= $value['no_telpon'] ?>" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Ganti Password?</label> <input type="checkbox" onclick="check()" id="checkdeh">
                            <input type="text" name="password" class="form-control" placeholder="" aria-describedby="helpId" disabled>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>