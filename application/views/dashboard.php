<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section>
                <div class="container-fluid">
                    <table style="width:100%;" class="mb-2">
                        <tr>
                            <td style="float: left;"><?php echo $tanggal; ?></td>
                            <td style="float: right;">
                                <div id='txt'></div>
                                <script>
                                    function startTime() {
                                        const today = new Date();
                                        let h = today.getHours();
                                        let m = today.getMinutes();
                                        let s = today.getSeconds();
                                        m = checkTime(m);
                                        s = checkTime(s);
                                        document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
                                        setTimeout(startTime, 1000);
                                    }

                                    function checkTime(i) {
                                        if (i < 10) {
                                            i = "0" + i
                                        }; // add zero in front of numbers < 10
                                        return i;
                                    }
                                </script>
                            </td>
                        </tr>
                    </table>
                </div>

                <?php
                if ($countAbsen == 1) {
                    // Absen Masuk
                    $lat1 = $masuk['latitude'];
                    $lat2 = $skema['latitude'];
                    $long1 = $masuk['longitude'];
                    $long2 = $skema['longitude'];
                    $theta = $long1 - $long2;
                    $miles = (sin(deg2rad($lat1))) * sin(deg2rad($lat2)) + (cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
                    $miles = acos($miles);
                    $miles = rad2deg($miles);
                    $miles = $miles * 60 * 1.1515;
                    $masuk_meters = $miles * 1609;
                } elseif ($countAbsen == 2) {
                    // Absen Masuk
                    $lat1 = $masuk['latitude'];
                    $lat2 = $skema['latitude'];
                    $long1 = $masuk['longitude'];
                    $long2 = $skema['longitude'];
                    $theta = $long1 - $long2;
                    $miles = (sin(deg2rad($lat1))) * sin(deg2rad($lat2)) + (cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
                    $miles = acos($miles);
                    $miles = rad2deg($miles);
                    $miles = $miles * 60 * 1.1515;
                    $masuk_meters = $miles * 1609;
                    // Absen Pulang
                    $lat1 = $pulang['latitude'];
                    $lat2 = $skema['latitude'];
                    $long1 = $pulang['longitude'];
                    $long2 = $skema['longitude'];
                    $theta = $long1 - $long2;
                    $miles = (sin(deg2rad($lat1))) * sin(deg2rad($lat2)) + (cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
                    $miles = acos($miles);
                    $miles = rad2deg($miles);
                    $miles = $miles * 60 * 1.1515;
                    $pulang_meters = $miles * 1609;
                } else {
                    $masuk_meters = 0;
                    $pulang_meters = 0;
                }
                ?>
                <div class="card card-profile">
                    <img src="<?php echo base_url(); ?>assets/images/bg-profile.jpg" class="img-fluid card-img-top" alt="Profile Cover Photo">
                    <div class="card-body">
                        <div class="profile-image-wrapper">
                            <div class="profile-image">
                                <div class="avatar">
                                    <?php
                                    $nows = date_default_timezone_set('Asia/Jakarta');
                                    $nows = date('H:i:s');
                                    $jam = strtotime($nows);
                                    $jam_masuk = strtotime($skema['masuk']);
                                    //$jam_masuk = strtotime('13:30:00');
                                    $jam_pulang = strtotime($skema['pulang']);
                                    //$jam_pulang = strtotime('19:00:00');
                                    $batas_awal_masuk = $jam_masuk - 7200;
                                    $batas_akhir_masuk = $jam_masuk + 7200;
                                    $batas_akhir_pulang = $jam_pulang + 7200;
                                    ?>
                                    <?php if ($jam < $batas_akhir_masuk) { ?>
                                        <?php if ($jam > $batas_awal_masuk) { ?>
                                            <?php if ($countAbsen == 1) { ?>
                                                <img src="<?php echo base_URL('assets/images/profile/') . $user['gambar']; ?>" alt="gambar">
                                            <?php } else { ?>
                                                <?php if ($user['role_id'] == 2) { ?>
                                                    <a href="<?php echo base_url('pegawai/absen') ?>">
                                                        <i class="fas fa-bell text-warning" style="font-size: 80px; padding: 10px 14px 10px 14px;"></i>
                                                    </a>
                                                <?php } else { ?>
                                                    <a href="<?php echo base_url('admin/pegawai/absen') ?>">
                                                        <i class="fas fa-bell text-warning" style="font-size: 80px; padding: 10px 14px 10px 14px;"></i>
                                                    </a>
                                                <?php } ?>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <img src="<?php echo base_URL('assets/images/profile/') . $user['gambar']; ?>" alt="gambar">
                                        <?php } ?>
                                    <?php } elseif ($jam > $jam_pulang) { ?>
                                        <?php if ($jam < $batas_akhir_pulang) { ?>
                                            <?php if ($countAbsen == 2) { ?>
                                                <img src="<?php echo base_URL('assets/images/profile/') . $user['gambar']; ?>" alt="gambar">
                                            <?php } else { ?>
                                                <?php if ($user['role_id'] == 2) { ?>
                                                    <a href="<?php echo base_url('pegawai/absen') ?>">
                                                        <i class="fas fa-bell text-warning" style="font-size: 80px; padding: 10px 14px 10px 14px;"></i>
                                                    </a>
                                                <?php } else { ?>
                                                    <a href="<?php echo base_url('admin/pegawai/absen') ?>">
                                                        <i class="fas fa-bell text-warning" style="font-size: 80px; padding: 10px 14px 10px 14px;"></i>
                                                    </a>
                                                <?php } ?>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <img src="<?php echo base_URL('assets/images/profile/') . $user['gambar']; ?>" alt="gambar">
                                        <?php } ?>
                                    <?php } else { ?>
                                        <img src="<?php echo base_URL('assets/images/profile/') . $user['gambar']; ?>" alt="gambar">
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h3><?php echo strtoupper($user['name']); ?></h3>
                                <h6 class="text-muted"><?php echo $user['jabatan']; ?></h6>
                            </div>
                            <div class="col-sm-6">
                                <h3>DINAS PENDIDIKAN</h3>
                                <h6 class="text-muted"><?php echo $user['sekolah']; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="text-center mt-2">
                <h6 class="fs-6">SKEMA : ABSESNSI DI <?php echo $skema['lokasi']; ?></h6>
                <h6 class="fs-6">LOKASI : <?php echo $skema['lokasi']; ?></h6>
                <table style="width: 100%;" class="mt-1">
                    <tr>
                        <td>
                            <?php if ($masuk) { ?>
                                <i class="far fa-clock fs-1"></i>
                                <h3><?php echo $skema['masuk']; ?></h3>
                                <h6 class="text-muted">Masuk Kantor</h6>
                                <span class="badge badge-light-success rounded-pill fs-3"><?php echo $masuk['jam_absen']; ?></span><br>
                                <p class="badge badge-light-success rounded-pill fs-5"><?php echo round($masuk_meters, 0); ?> Meter</p>
                            <?php } else { ?>
                                <i class="far fa-clock fs-1"></i>
                                <h3><?php echo $skema['masuk']; ?></h3>
                                <h6 class="text-muted">Masuk Kantor</h6>
                                <span class="badge badge-light-success rounded-pill fs-3">-</span><br>
                                <p class="badge badge-light-success rounded-pill fs-5">0 Meter</p>
                            <?php } ?>
                        </td>
                        <td>
                            <?php if ($pulang) { ?>
                                <i class="far fa-clock fs-1"></i>
                                <h3><?php echo $skema['pulang']; ?></h3>
                                <h6 class="text-muted">Pulang Kantor</h6>
                                <span class="badge badge-light-danger rounded-pill fs-3"><?php echo $pulang['jam_absen']; ?></span><br>
                                <p class="badge badge-light-danger rounded-pill fs-5"><?php echo round($pulang_meters, 0); ?> Meter</p>
                            <?php } else { ?>
                                <i class="far fa-clock fs-1"></i>
                                <h3><?php echo $skema['pulang']; ?></h3>
                                <h6 class="text-muted">Pulang Kantor</h6>
                                <span class="badge badge-light-danger rounded-pill fs-3">-</span><br>
                                <p class="badge badge-light-danger rounded-pill fs-5">0 Meter</p>
                            <?php } ?>
                        </td>
                    </tr>
                </table>
            </section>
            <section class="text-center mt-2">
                <div class="card">
                    <div class="container-fluid">
                        <table style="width: 100%; font-family: 'Arial Narrow', Arial, sans-serif; font-size: 0.69em;" class="mt-1 mb-1">
                            <tr>
                                <td style="width: 30%;">
                                    <span class="pt-1 pb-1 mb-1">KEHADIRAN <br> 4/19</span>
                                    <div class="progress progress-bar-primary" style="height: 2em;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="37" aria-valuemin="37" aria-valuemax="100" style="width: 37%;">
                                            37%
                                        </div>
                                    </div>
                                </td>
                                <td style="width: 30%;">
                                    <span class="pt-1 pb-1 mb-1">CAPAIAN MENIT <br> 285/856</span>
                                    <div class="progress progress-bar-success" style="height: 2em;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="23" aria-valuemin="23" aria-valuemax="100" style="width: 23%;">
                                            23%
                                        </div>
                                    </div>
                                </td>
                                <td style="width: 30%;">
                                    <span class="pt-1 pb-1 mb-1">TANPA KETERANGAN <br> 295.3/8550</span>
                                    <div class="progress progress-bar-danger" style="height: 2em;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="89" aria-valuemin="89" aria-valuemax="100" style="width: 89%;">
                                            89%
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
            <section class="text-center mt-2">
                <h6 class="fs-6">REKAPITULASI KEHADIRAN</h6>
                <h6 class="fs-6">BULAN BERJALAN</h6>
                <div class="card">
                    <div class="card-body" style="font-family: 'Arial Narrow', Arial, sans-serif;">
                        <table style="width: 100%;">
                            <tr>
                                <td style="width: 25%;" class="text-success">MASUK</td>
                                <td style="width: 25%;" class="text-warning">CUTI</td>
                                <td style="width: 25%;" class="text-danger">ALPA</td>
                                <td style="width: 25%;" class="text-primary">DINAS</td>
                            </tr>
                            <tr>
                                <td class="text-success">5</td>
                                <td class="text-warning">0</td>
                                <td class="text-danger">0</td>
                                <td class="text-primary">0</td>
                            </tr>
                            <tr>
                                <td class="text-success">HARI</td>
                                <td class="text-warning">HARI</td>
                                <td class="text-danger">HARI</td>
                                <td class="text-primary">HARI</td>
                            </tr>
                        </table>
                        <hr>
                        <table style="width: 100%;">
                            <tr>
                                <td style="width: 25%;">ALPA</td>
                                <td style="width: 25%;">TERLAMBAT</td>
                                <td style="width: 25%;">TAP</td>
                                <td style="width: 25%;">TOTAL TK</td>
                            </tr>
                            <tr>
                                <td class="text-danger">0</td>
                                <td class="text-danger">0</td>
                                <td class="text-danger">0</td>
                                <td class="text-danger">0</td>
                            </tr>
                            <tr>
                                <td>JAM</td>
                                <td>MENIT</td>
                                <td>MENIT</td>
                                <td>MENIT</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->

<?php $this->load->view('templates/footer'); ?>