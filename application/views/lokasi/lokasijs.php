<script src="<?= base_url('assets/sweetalert.min.js') ?>"></script>
<script>
    $(document).ready(function() {
        $('#table_lokasi').DataTable({
            "responsive": true,
            "autoWidth": false,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('lokasi/get_data') ?>",
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
                "sZeroRecords": "Tidak Ada Data Yang Di Cari",
                "sProcessing": "Memuat Data...."
            },
        });
    });

    function message(title, icon, text) {
        swal({
            title: title,
            text: text,
            icon: icon,
        });
    }

    function relodTable() {
        $('#table_lokasi').DataTable().ajax.reload();
    }
    var modal_tambah = $('#modal_tambah')
    var form_tambah = $('#form_tambah')

    function add() {

        modal_tambah.modal('show')
        form_tambah[0].reset()
    }

    function simpan() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('lokasi/tambah'); ?>",
            data: form_tambah.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('Berhasil', 'success', 'Data Berhasil Disimpan!')
                    modal_tambah.modal('hide')
                    relodTable();
                } else {

                }
            }
        })

    }


    var form_edit = $('#form_edit');

    function edit() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('lokasi/edit'); ?>",
            data: form_edit.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('Berhasil', 'success', 'Data Berhasil Disimpan!')
                    modal_edit.modal('hide')
                    relodTable();
                } else {

                }
            }
        })
    }

    var modal_edit = $('#modal_edit');

    function byid(id_site, type) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('lokasi/get_id/'); ?>" + id_site,
            dataType: "JSON",
            success: function(response) {
                if (type == 'edit') {
                    $('#id_site2').val(response.id_site)
                    $('#nama_site2').val(response.nama_site)
                    modal_edit.modal('show')
                } else {
                    hapusQuestion(response.id_site, response.nama_site)
                }
            }
        })
    }

    function hapusQuestion(id_site, nama_site) {
        swal({
                title: "Apakah Anda Yakin!! ",
                text: "Ingin Menghapus Barang   " + nama_site + "?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    hapus__(id_site);
                }
            });
    }

    function hapus__(id_site) {
        $.ajax({
            type: "POST",
            url: "<?= base_url('lokasi/hapus/') ?>" + id_site,
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('Berhasil', 'success', 'Data Berhasil Di Hapus!!!')
                    relodTable();
                }
            }
        })
    }
</script>