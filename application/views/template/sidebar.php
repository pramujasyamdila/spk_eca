<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"><img src="<?= base_url('assets/image/logo.jpeg') ?>" alt="" width="100px"></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li>
                <a class="nav-link" href="<?= base_url('dashboard') ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
            </li>
            <li class="menu-header">Master Data</li>
            <li>
                <a class="nav-link" href="<?= base_url('deksripsi') ?>"><i class="fas fa-fire"></i> <span> Deksripsi</span></a>
            </li>
            <li><a class="nav-link" href="<?= base_url('mobil') ?>"><i class="fas fa-fire"></i> <span> Mobil</span></a></li>
            <li class="menu-header">Data Master Dempster Shafer</li>
            <li>
                <a class="nav-link" href="<?= base_url('tbl_alasan') ?>"><i class="fas fa-fire"></i> <span> Alasan</span></a>
            </li>
            <li>
                <a class="nav-link" href="<?= base_url('tbl_alasan') ?>"><i class="fas fa-fire"></i> <span> Solusi</span></a>
            </li>
            <li>
                <a class="nav-link" href="<?= base_url('tbl_alasan') ?>"><i class="fas fa-fire"></i> <span> Relasi</span></a>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="<?= base_url('auth/logout') ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Logout
            </a>
        </div>
    </aside>
</div>