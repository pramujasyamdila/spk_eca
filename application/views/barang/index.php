<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Table Produk</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Data Produk</div>
            </div>
        </div>
        <div class="section-body">

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <button type="button" onclick="add()" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-plus"></i> Tambah Produk
                            </button>
                        </div>
                        <div class="card-body">
                            <table id="table_barang" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Barcode</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
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