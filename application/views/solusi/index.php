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
                <h4>Data solusi</h4>
                <div class="card-header-action">
                    <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah"> <i class="fas fa fa-plus"> </i> Tambah solusi</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama solusi</th>
                            <th>Nama mobil</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($get_all_solusi as $key => $value) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value['nama_solusi'] ?></td>
                                <td><?= $value['nama_mobil'] ?></td>
                                <td>
                                    <a href="javascript:;" data-toggle="modal" data-target="#edit<?= $value['id_solusi'] ?>" class="btn btn-sm btn-warning"><i class="fas fa fa-edit"> </i></a>
                                    <a href="<?= base_url('solusi/hapus/' . $value['id_solusi']) ?>" class="btn btn-sm btn-danger"><i class="fas fa fa-trash"> </i></a>
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
                <h5 class="modal-title">Tambah solusi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('solusi/tambah') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama solusi</label>
                        <input type="text" name="nama_solusi" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Mobil</label>
                        <select name="id_mobil" class="form-control">
                            <?php foreach ($get_mobil as $key => $value) { ?>
                                <option value="<?= $value['id_mobil'] ?>"><?= $value['nama_mobil'] ?></option>
                            <?php } ?>
                        </select>
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
foreach ($get_all_solusi as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id_solusi'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah solusi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('solusi/edit') ?>" method="post">
                    <input type="hidden" name="id_solusi" value="<?= $value['id_solusi'] ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nama solusi</label>
                            <input type="text" name="nama_solusi" value="<?= $value['nama_solusi'] ?>" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <select name="id_mobil" class="form-control">
                            <?php foreach ($get_mobil as $key => $value2) { ?>
                                <option value="<?= $value['id_mobil'] ?>"><?= $value['nama_mobil'] ?></option>
                                <option value="<?= $value2['id_mobil'] ?>"><?= $value2['nama_mobil'] ?></option>
                            <?php } ?>
                        </select>
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