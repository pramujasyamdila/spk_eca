<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Update Barang</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/modules/jquery-selectric/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="<?= base_url() ?>assets/image/logo.jpeg" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Update Stok</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" id="update_stok">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="frist_name">Kode Produk</label>
                                            <input id="frist_name" type="text" readonly class="form-control" name="frist_name" value="<?= $data['kd_produk'] ?>">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="last_name">ID Site</label>
                                            <input id="last_name" type="text" class="form-control" name="last_name" value="<?= $data['id_site'] ?> " readonly>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Nama Produk</label>
                                        <input id="email" type="email" value="<?= $data['nm_produk'] ?> " readonly class="form-control" name="email">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="frist_name">UOM</label>
                                            <input id="frist_name" type="text" class="form-control" name="frist_name" value="<?= $data['uom'] ?> " readonly>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="last_name">QTY</label>
                                            <input id="qty" value="<?= $data['qty'] ?> " type="text" class="form-control" name="qty">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="frist_name">KG</label>
                                            <input id="frist_name" type="text" class="form-control" name="frist_name" value="<?= $data['kg'] ?> " readonly>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="last_name">Barcode</label>
                                            <input id="last_name" value="<?= $data['barcode'] ?> " readonly type="text" class="form-control" name="barcode">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <a href="javascript:;" onclick="simpan_stok()" class="btn btn-primary btn-lg btn-block">
                                            Simpan
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Indra 2022
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>assets/modules/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/modules/popper.js"></script>
    <script src="<?= base_url() ?>assets/modules/tooltip.js"></script>
    <script src="<?= base_url() ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>assets/modules/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url() ?>assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="<?= base_url() ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url() ?>assets/js/page/auth-register.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>assets/js/custom.js"></script>
</body>

</html>