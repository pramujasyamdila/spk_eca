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
                <h4>Data Deskripsi</h4>
                <div class="card-header-action">
                    <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah"> <i class="fas fa fa-plus"> </i> Tambah Deskripsi</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($get_all_deskripsi as $key => $value) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value['nama_deskripsi'] ?></td>
                                <td>
                                    <a href="javascript:;" data-toggle="modal" data-target="#edit<?= $value['id_deskripsi_mobil'] ?>" class="btn btn-sm btn-warning"><i class="fas fa fa-edit"> </i></a>
                                    <a href="<?= base_url('deskripsi/hapus/' . $value['id_deskripsi_mobil']) ?>" class="btn btn-sm btn-danger"><i class="fas fa fa-trash"> </i></a>
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
                <h5 class="modal-title">Tambah Deskripsi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('deskripsi/tambah') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama Deskripsi</label>
                        <input type="text" name="nama_deskripsi" class="form-control" placeholder="" aria-describedby="helpId">
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


<?php
foreach ($get_all_deskripsi as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id_deskripsi_mobil'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Deskripsi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('deskripsi/edit') ?>" method="post">
                    <input type="hidden" name="id_deskripsi_mobil" value="<?= $value['id_deskripsi_mobil'] ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nama Deskripsi</label>
                            <input type="text" name="nama_deskripsi" value="<?= $value['nama_deskripsi'] ?>" class="form-control" placeholder="" aria-describedby="helpId">
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