<script type="text/javascript">
    function message(title, icon, text) {
        swal({
            title: title,
            text: text,
            icon: icon,
        });
    }

    function simpan_ganti() {
        var ganti_password = $('#ganti_password')
        var password_baru = $('[name="password_baru"]').val()
        var password_baru2 = $('[name="password_baru2"]').val()
        if (password_baru == '' || password_baru2 == '') {
            message('Gagal!!!', 'warning', 'Form Password Kosong!')

        } else {
            if (password_baru != password_baru2) {
                message('Gagal!!!', 'warning', 'Ulangi Password Tidak Sama!')
            } else {
                $.ajax({
                    method: "POST",
                    url: "<?= base_url('ganti_password/simpan'); ?>",
                    data: ganti_password.serialize(),
                    dataType: "JSON",
                    success: function(response) {
                        if (response == 'success') {
                            message('Berhasil!!!', 'success', 'Password Berhasil Di Ganti')
                            ganti_password[0].reset();
                        } else if (response == 'gagal') {
                            message('Gagal!!!', 'warning', 'Password Lama Salah!')
                        }
                    }
                })
            }

        }

    }
</script>