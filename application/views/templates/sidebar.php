<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto">
                <?php if ($user['role_id'] == 1) { ?>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>admin/dashboard">
                        <span class="brand-logo"></span>
                        <h2 class="brand-text">K-PETA</h2>
                    </a>
                <?php } else { ?>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>dashboard">
                        <span class="brand-logo"></span>
                        <h2 class="brand-text">K-PETA</h2>
                    </a>
                <?php } ?>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
                    <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                    <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="navigation-header"><span data-i18n="Apps &amp; Pages">MENU UTAMA</span><i data-feather="more-horizontal"></i>
                <?php if ($user['role_id'] == 1) { ?>
            <li class="<?php if ($this->uri->segment(2) == 'dashboard') {
                            echo 'active ';
                        } ?>nav-item">
                <a class="d-flex align-items-center" href="<?php echo base_url(); ?>admin/dashboard">
                    <i data-feather="home"></i>
                    <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span>
                </a>
            </li>
        <?php } else { ?>
            <li class="<?php if ($this->uri->segment(1) == 'dashboard') {
                            echo 'active ';
                        } ?>nav-item">
                <a class="d-flex align-items-center" href="<?php echo base_url(); ?>dashboard">
                    <i data-feather="home"></i>
                    <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span>
                </a>
            </li>
        <?php } ?>
        <li class="<?php if ($this->uri->segment(2) == 'dinas_luar') {
                        echo 'active ';
                    } ?>nav-item">
            <a class="d-flex align-items-center" href="<?php echo base_url(); ?>kehadiran/dinas_luar">
                <i data-feather='disc'></i>
                <span class="menu-title text-truncate" data-i18n="Dinas Luar">Dinas Luar</span>
            </a>
        </li>
        <li class="<?php if ($this->uri->segment(2) == 'cuti') {
                        echo 'active ';
                    } ?>nav-item">
            <a class="d-flex align-items-center" href="<?php echo base_url(); ?>kehadiran/cuti">
                <i data-feather='check-circle'></i>
                <span class="menu-title text-truncate" data-i18n="Cuti">Cuti</span>
            </a>
        </li>
        <li class="<?php if ($this->uri->segment(2) == 'izin') {
                        echo 'active ';
                    } ?>nav-item">
            <a class="d-flex align-items-center" href="<?php echo base_url(); ?>kehadiran/izin">
                <i data-feather='circle'></i>
                <span class="menu-title text-truncate" data-i18n="Izin">Izin</span>
            </a>
        </li>
        <li class="navigation-header"><span data-i18n="Apps &amp; Pages">MENU LAPORAN</span><i data-feather="more-horizontal"></i>
        <li class="<?php if ($this->uri->segment(2) == 'lap_rekap') {
                        echo 'active ';
                    } ?>nav-item">
            <a class="d-flex align-items-center" href="<?php echo base_url(); ?>laporan/lap_rekap">
                <i data-feather='edit'></i>
                <span class="menu-title text-truncate" data-i18n="Laporan & Rekapitulasi">Laporan & Rekapitulasi</span>
            </a>
        </li>
        <li class="<?php if ($this->uri->segment(2) == 'lap_tahun') {
                        echo 'active ';
                    } ?>nav-item">
            <a class="d-flex align-items-center" href="<?php echo base_url(); ?>laporan/lap_tahun">
                <i data-feather='edit-3'></i>
                <span class="menu-title text-truncate" data-i18n="Laporan Tahunan">Laporan Tahunan</span>
            </a>
        </li>
        <li class="<?php if ($this->uri->segment(2) == 'kal_agenda') {
                        echo 'active ';
                    } ?>nav-item">
            <a class="d-flex align-items-center" href="<?php echo base_url(); ?>laporan/kal_agenda">
                <i data-feather='calendar'></i>
                <span class="menu-title text-truncate" data-i18n="Kalender / Agenda">Kalender / Agenda</span>
            </a>
        </li>
        <li class="navigation-header"><span data-i18n="Apps &amp; Pages">LAIN LAIN</span><i data-feather="more-horizontal"></i>
            <?php if ($user['role_id'] == 1) { ?>
        <li class="<?php if ($this->uri->segment(3) == 'profile' || $this->uri->segment(3) == 'edit_profile') {
                        echo 'active ';
                    } ?>nav-item">
            <a class="d-flex align-items-center" href="<?php echo base_url(); ?>admin/pegawai/profile">
                <i data-feather="user"></i>
                <span class="menu-title text-truncate" data-i18n="Profile">Profile</span>
            </a>
        </li>
    <?php } else { ?>
        <li class="<?php if ($this->uri->segment(2) == 'profile' || $this->uri->segment(2) == 'edit_profile') {
                        echo 'active ';
                    } ?>nav-item">
            <a class="d-flex align-items-center" href="<?php echo base_url(); ?>pegawai/profile">
                <i data-feather="user"></i>
                <span class="menu-title text-truncate" data-i18n="Profile">Profile</span>
            </a>
        </li>
    <?php } ?>
    <li class="<?php if ($this->uri->segment(2) == 'settings') {
                    echo 'active ';
                } ?>nav-item">
        <a class="d-flex align-items-center" href="<?php echo base_url(); ?>pengaturan">
            <i data-feather='settings'></i>
            <span class="menu-title text-truncate" data-i18n="Settings">Settings</span>
        </a>
    </li>
    <li class="<?php if ($this->uri->segment(2) == 'tentang') {
                    echo 'active ';
                } ?>nav-item">
        <a class="d-flex align-items-center" href="<?php echo base_url(); ?>guide/tentang">
            <i data-feather='coffee'></i>
            <span class="menu-title text-truncate" data-i18n="Tentang K-PETA">Tentang K-PETA</span>
        </a>
    </li>
    <li class="<?php if ($this->uri->segment(2) == 'panduan') {
                    echo 'active ';
                } ?>nav-item">
        <a class="d-flex align-items-center" href="<?php echo base_url(); ?>guide/panduan">
            <i data-feather='file'></i>
            <span class="menu-title text-truncate" data-i18n="Panduan K-PETA">Panduan K-PETA</span>
        </a>
    </li>
    <?php if ($this->session->userdata('role_id') == 1) { ?>
        <li class="navigation-header"><span data-i18n="Apps &amp; Pages">ADMIN</span><i data-feather="more-horizontal"></i>
        <li class="<?php if ($this->uri->segment(3) == 'data_pegawai') {
                        echo 'active ';
                    } ?>nav-item">
            <a class="d-flex align-items-center" href="<?php echo base_url(); ?>admin/pegawai/data_pegawai">
                <i data-feather='users'></i>
                <span class="menu-title text-truncate" data-i18n="Laporan & Rekapitulasi">Data Pegawai</span>
            </a>
        </li>
        <li class="<?php if ($this->uri->segment(3) == 'data_pengguna') {
                        echo 'active ';
                    } ?>nav-item">
            <a class="d-flex align-items-center" href="<?php echo base_url(); ?>admin/pegawai/data_pengguna">
                <i data-feather='users'></i>
                <span class="menu-title text-truncate" data-i18n="Laporan & Rekapitulasi">Data Pengguna</span>
            </a>
        </li>
    <?php } ?>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->