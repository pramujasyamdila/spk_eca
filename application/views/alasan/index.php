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
                <h4>Data Alasan</h4>
                <div class="card-header-action">
                    <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah"> <i class="fas fa fa-plus"> </i> Tambah Alasan</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Alasan</th>
                            <th>Bobot</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($get_all_alasan as $key => $value) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value['kode_alasan'] ?></td>
                                <td><?= $value['nama_alasan'] ?></td>
                                <td><?= $value['densitas'] ?></td>
                                <td>
                                    <a href="javascript:;" data-toggle="modal" data-target="#edit<?= $value['id_alasan'] ?>" class="btn btn-sm btn-warning"><i class="fas fa fa-edit"> </i></a>
                                    <a href="<?= base_url('alasan/hapus/' . $value['id_alasan']) ?>" class="btn btn-sm btn-danger"><i class="fas fa fa-trash"> </i></a>
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
                <h5 class="modal-title">Tambah Alasan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('alasan/tambah') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Kode Alasan</label>
                        <input type="text" name="kode_alasan" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Alasan</label>
                        <input type="text" name="nama_alasan" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">Densitas</label>
                        <input type="text" name="densitas" class="form-control" placeholder="" aria-describedby="helpId">
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
foreach ($get_all_alasan as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id_alasan'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Alasan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('alasan/edit') ?>" method="post">
                    <input type="hidden" name="id_alasan" value="<?= $value['id_alasan'] ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Kode Alasan</label>
                            <input type="text" name="kode_alasan" value="<?= $value['kode_alasan'] ?>"  class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Alasan</label>
                            <input type="text" name="nama_alasan" value="<?= $value['nama_alasan'] ?>"  class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Densitas</label>
                            <input type="text" name="densitas" value="<?= $value['densitas'] ?>"  class="form-control" placeholder="" aria-describedby="helpId">
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