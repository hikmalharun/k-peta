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
                $link1 = base_url('kehadiran/masuk');
                $today = date_default_timezone_set('Asia/Jakarta');
                $today = date('H:i:s');
                $skema_masuk = '07:00:00';
                $skema_pulang = '15:00:00';
                ?>
                <div class="card card-profile">
                    <img src="<?php echo base_url(); ?>assets/images/bg-profile.jpg" class="img-fluid card-img-top" alt="Profile Cover Photo">
                    <div class="card-body">
                        <div class="profile-image-wrapper">
                            <div class="profile-image">
                                <div class="avatar">
                                    <?php if ($user['gambar'] == 'default.jpg') { ?>
                                        <?php if ($today > $skema_pulang) { ?>
                                            <a href="<?php echo $link1; ?>">
                                                <span class="text-warning" style="font-size: 5em; padding-left: 21px; padding-right: 21px;">
                                                    <i class="far fa-bell"></i>
                                                </span>
                                            </a>
                                        <?php } else { ?>
                                            <img src="<?php echo base_URL('assets/images/') . $user['gambar']; ?>" alt="gambar">
                                        <?php } ?>
                                    <?php } else { ?>
                                        <?php if ($today > $skema_pulang) { ?>
                                            <a href="<?php echo $link1; ?>">
                                                <span class="text-warning" style="font-size: 5em; padding-left: 21px; padding-right: 21px;">
                                                    <i class="far fa-bell"></i>
                                                </span>
                                            </a>
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

                <div>
                    <video autoplay="true" id="video-webcam"></video>
                </div>

                <button class="btn btn-success" onclick="takeSnapshot()">Ambil Gambar</button>

                <script type="text/javascript">
                    // seleksi elemen video
                    var video = document.querySelector("#video-webcam");

                    // minta izin user
                    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

                    // jika user memberikan izin
                    if (navigator.getUserMedia) {
                        // jalankan fungsi handleVideo, dan videoError jika izin ditolak
                        navigator.getUserMedia({
                            audio: false,
                            video: true
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
                    function takeSnapshot() {
                        // buat elemen img
                        var img = document.createElement('img');
                        var context;

                        // ambil ukuran video
                        var width = video.offsetWidth,
                            height = video.offsetHeight;

                        // buat elemen canvas
                        canvas = document.createElement('canvas');
                        canvas.width = width;
                        canvas.height = height;

                        // ambil gambar dari video dan masukan 
                        // ke dalam canvas
                        context = canvas.getContext('2d');
                        context.drawImage(video, 0, 0, width, height);

                        // render hasil dari canvas ke elemen img
                        img.src = canvas.toDataURL('image/png');
                        document.body.appendChild(img);
                    }
                </script>
            </section>
            <!-- Dashboard Analytics end -->
        </div>
    </div>
</div>
<!-- END: Content-->

<?php $this->load->view('templates/footer'); ?>