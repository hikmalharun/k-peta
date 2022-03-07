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
                $tanggal_now = date_default_timezone_set('Asia/Jakarta');
                $tanggal_now = date('d-m-Y');
                $jam_now = date_default_timezone_set('Asia/Jakarta');
                $jam_now = date('H:i:s');
                $skema_masuk = '07:00:00';
                $skema_pulang = '12:00:00';
                ?>
                <div class="card card-profile">
                    <img src="<?php echo base_url(); ?>assets/images/bg-profile.jpg" class="img-fluid card-img-top" alt="Profile Cover Photo">
                    <div class="card-body">
                        <div class="profile-image-wrapper">
                            <div class="profile-image">
                                <div class="avatar">
                                    <?php if ($user['gambar'] == 'default.jpg') { ?>
                                        <?php if ($jam_now > $skema_masuk) { ?>
                                            <span class="text-warning" style="font-size: 5em; padding-left: 20px; padding-right: 20px;" data-bs-toggle="modal" data-bs-target="#absen">
                                                <i class="far fa-bell"></i>
                                            </span>
                                        <?php } else { ?>
                                            <img src="<?php echo base_URL('assets/images/') . $user['gambar']; ?>" alt="gambar">
                                        <?php } ?>
                                    <?php } else { ?>
                                        <?php if ($jam_now > $skema_masuk) { ?>
                                            <span class="text-warning" style="font-size: 5em; padding-left: 20px; padding-right: 20px;" data-bs-toggle="modal" data-bs-target="#absen">
                                                <i class="far fa-bell"></i>
                                            </span>
                                        <?php } else { ?>
                                            <img src="<?php echo base_URL('assets/images/profile/') . $user['gambar']; ?>" alt="gambar">
                                        <?php } ?>
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
                <h6 class="fs-6">SKEMA : ABSESNSI DI KANTOR</h6>
                <h6 class="fs-6">LOKASI : SMAN 1 ANJATAN</h6>
                <table style="width: 100%;" class="mt-1">
                    <tr>
                        <td>
                            <i class="far fa-clock fs-1"></i>
                            <h3>07:00:00</h3>
                            <h6 class="text-muted">Masuk Kantor</h6>
                            <span class="badge badge-light-success rounded-pill fs-3">06:55:00</span>
                        </td>
                        <td>
                            <i class="far fa-clock fs-1"></i>
                            <h3>15:00:00</h3>
                            <h6 class="text-muted">Pulang Kantor</h6>
                            <span class="badge badge-light-danger rounded-pill fs-3">16:35:00</span>
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
            <section>
                <div class="disabled-backdrop-ex">
                    <div class="modal fade text-start" id="absen" tabindex="-1" aria-labelledby="myModalLabel4" data-bs-backdrop="false" aria-hidden="true" style="background-color: rgba(0,0,0,2);">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" id="absen">
                                        <input type="hidden" id="nama" value="<?php echo $user['name']; ?>">
                                        <input type="hidden" id="email" value="<?php echo $user['email']; ?>">
                                        <input type="hidden" id="sekolah" value="<?php echo $user['sekolah']; ?>">
                                        <?php
                                        $abs = $this->db->get_where('absen', ['tanggal_absen' => date('d-m-Y')])->num_rows();
                                        $abs = $this->db->get_where('absen', ['email' => $user['email']])->num_rows();
                                        ?>
                                        <?php
                                        if ($abs > 0) { ?>
                                            <input type="hidden" id="status_absen" value="Pulang">
                                        <?php } else { ?>
                                            <input type="hidden" id="status_absen" value="Masuk">
                                        <?php } ?>
                                        <input type="hidden" id="tanggal_absen" value="<?php echo date('d-m-Y'); ?>">
                                        <input type="hidden" id="jam_absen" value="<?php echo date('H:i:s'); ?>">
                                        <video autoplay="true" id="gambar" style="width: 100%;"></video>
                                        <button type="submit" class="btn btn-danger waves-effect waves-float waves-light avatar pt-2 pb-2 position-absolute bottom-0 start-50 translate-middle-x mb-2">
                                            <i class="fas fa-camera"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    // seleksi elemen video
                    var video = document.querySelector("#gambar");
                    // minta izin user
                    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;
                    // jika user memberikan izin
                    if (navigator.getUserMedia) {
                        // jalankan fungsi handleVideo, dan videoError jika izin ditolak
                        navigator.getUserMedia({
                            audio: false,
                            video: true,
                        }, handleVideo, videoError);
                    }
                    // fungsi ini akan dieksekusi jika  izin telah diberikan
                    function handleVideo(stream) {
                        video.srcObject = stream;
                    }
                    // fungsi ini akan dieksekusi kalau user menolak izin
                    function videoError(e) {
                        // do something
                        alert("Izinkan menggunakan camera")
                    }
                </script>
                <script>
                    $(document).on('submit', '#absen', function(event) {
                        event.preventDefault();
                        var nama = $('#nama').val();
                        var email = $('#email').val();
                        var sekolah = $('#sekolah').val();
                        var status_absen = $('#status_absen').val();
                        var tanggal_absen = $('#tanggal_absen').val();
                        var jam_absen = $('#jam_absen').val();
                        var gambar = $("#gambar").val();
                        $.ajax({
                            url: "<?php echo base_url() . 'pegawai/absen' ?>",
                            method: 'POST',
                            data: new FormData(this),
                            contentType: false,
                            processData: false,
                            success: function() {
                                $('#absen').modal('hide');
                                alert('Absen berhasil.');
                            }
                        });
                    });
                </script>
            </section>
            <!-- Dashboard Analytics end -->
        </div>
    </div>
</div>
<!-- END: Content-->

<?php $this->load->view('templates/footer'); ?>