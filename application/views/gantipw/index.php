<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1> </h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Ganti Password</div>
            </div>
        </div>
        <div class="section-body">

            <div class="row">
                <div class="col-6 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <form id="ganti_password" class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label>Password Baru</label>
                                    <input type="password" id="password_baru" name="password_baru" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ulangi Password Baru</label>
                                    <input type="password" name="password_baru2" class="form-control">
                                </div>
                            </form>
                        </div>
                        <a href="javascript:;" onclick="simpan_ganti()" class="btn btn-primary">Simpan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<!-- Modal -->
<div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="form_tambah">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pilih Kode Lokasi</label>
                                <select name="id_site" id="id_site" onchange="get_lokasi()" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <?php foreach ($data_lokasi as $key => $value) { ?>
                                        <option value="<?= $value['id_site'] ?>"><?= $value['id_site'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Lokasi</label>
                                <input type="text" id="nama_site" readonly class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Kode Produk</label>
                                <input type="text" name="kd_produk" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" name="nm_produk" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Barcode</label>
                                <input type="text" name="barcode" class="form-control">
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Satuan</label>
                                <input type="text" name="uom" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Qty</label>
                                <input type="text" onkeypress="return hanyaAngka(event)" name="qty" id="qty" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Berat</label>
                                <input type="text" name="kg" id="kg" onkeypress="return hanyaAngka(event)" onkeyup="hitung_berat()" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Total Berat (Qty x Berat)</label>
                                <input type="text" id="total_berat" readonly class="form-control">
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="simpan()" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>