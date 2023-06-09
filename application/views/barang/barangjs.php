<script src="<?= base_url('assets/sweetalert.min.js') ?>"></script>
<script>
    $(document).ready(function() {
        $('#table_barang').DataTable({
            "responsive": true,
            "autoWidth": false,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('barang/get_data') ?>",
                "type": "POST"
            },
            "columnDefs": [{
                "target": [-1],
                "orderable": false
            }],
            "oLanguage": {
                "sSearch": "Pencarian : ",
                "sEmptyTable": "Data Tidak Tersedia",
                "sLoadingRecords": "Silahkan Tunggu - loading...",
                "sLengthMenu": "Menampilkan &nbsp;  _MENU_  &nbsp;   Data",
                "sZeroRecords": "Tidak Ada Data Area Yang Di Cari",
                "sProcessing": "Memuat Data...."
            },
        });
    });

    function relodTable() {
        $('#table_barang').DataTable().ajax.reload();
    }

    var modal_tambah = $('#modal_tambah')
    var form_tambah = $('#form_tambah')

    function get_lokasi() {
        var id_site = $('#id_site').val()
        $.ajax({
            type: 'GET',
            url: '<?= base_url('barang/get_lokasi/') ?>' + id_site,
            dataType: 'json',
            success: function(response) {
                $('#nama_site').val(response.nama_site)
            }
        })
    }

    function add() {

        modal_tambah.modal('show')
        form_tambah[0].reset()
    }

    function simpan() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('barang/tambah'); ?>",
            data: form_tambah.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('Berhasil', 'success', 'Data Berhasil Disimpan!')
                    modal_tambah.modal('hide')
                    // relodTable();
                } else {

                }
            }
        })

    }

    function byid(barcode, type) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('barang/get_id/'); ?>" + barcode,
            dataType: "JSON",
            success: function(response) {
                if (type == 'hapus') {
                    hapusQuestion(response.barcode, response.nm_produk)
                } else {

                }
            }
        })
    }

    function hapusQuestion(barcode, nm_produk) {
        swal({
                title: "Apakah Anda Yakin!! ",
                text: "Ingin Menghapus Barang   " + nm_produk + "?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    hapusAset(barcode);
                }
            });
    }

    function hapusAset(barcode) {
        $.ajax({
            type: "POST",
            url: "<?= base_url('barang/hapus/') ?>" + barcode,
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('Berhasil', 'success', 'Data Berhasil Di Hapus!!!')
                    relodTable();
                }
            }
        })
    }

    function hanyaAngka(evt) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57))



            return false;

        return true;

    }

    function hitung_berat() {
        var qty = $('#qty').val()
        var kg = $('#kg').val()
        $('#total_berat').val(qty * kg)
    }

    function message(title, icon, text) {
        swal({
            title: title,
            text: text,
            icon: icon,
        });
    }

    function simpan_stok() {
        var update_stok = $('#update_stok');
        $.ajax({
            method: "POST",
            url: "<?= base_url('barang/update'); ?>",
            data: update_stok.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('Berhasil', 'success', 'Data Berhasil Disimpan!')
                    // relodTable();
                } else {

                }
            }
        })

    }
</script>