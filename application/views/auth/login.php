<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="auth-wrapper auth-cover">
                <div class="auth-inner row m-0">
                    <!-- Brand logo-->
                    <a class="brand-logo" href="<?= base_url(); ?>">
                        <h2 class="brand-text text-primary ms-1 mt-2">K-PETA</h2>
                    </a>
                    <!-- /Brand logo-->
                    <!-- Left Text-->
                    <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                        <div class="w-100 d-lg-flex align-items-center justify-content-center px-5">
                            <img class="img-fluid" src="<?= base_url(); ?>assets/images/logo.png" alt="smanja" />
                        </div>
                    </div>
                    <!-- /Left Text-->
                    <!-- Login-->
                    <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                            <?php echo $this->session->flashdata('pesan_token'); ?>
                            <h2 class="card-title fw-bold mb-1">Selamat datang</h2>
                            <p class="card-text small mb-2">Di Aplikasi Kehadiran Pegawai Tidak Tetap (K-PETA) <br> SMA NEGERI 1 ANJATAN</p>
                            <form class="auth-login-form mt-2" action="<?php echo base_url('authentication'); ?>" method="POST">
                                <div class="mb-1">
                                    <label class="form-label" for="login-email">Email</label>
                                    <input name="email" class="form-control" id="login-email" type="text" placeholder="email@sman1anjatan.sch.id" aria-describedby="login-email" autofocus="" tabindex="1" value="<?php echo set_value('email') ?>" />
                                </div>
                                <?php echo form_error('email', '<small class="badge badge-light-danger mb-1 d-block">', '</small>'); ?>
                                <div class="mb-1">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="login-password">Password</label><a href="<?php echo base_url('authentication/forgot_password'); ?>"><small>Lupa password?</small></a>
                                    </div>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input name="password" class="form-control form-control-merge" id="login-password" type="password" placeholder="Password" aria-describedby="login-password" tabindex="2" value="<?php echo set_value('password') ?>" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                    </div>
                                </div>
                                <?php echo form_error('password', '<small class="badge badge-light-danger mb-1 d-block">', '</small>'); ?>
                                <button type="submit" class="btn btn-primary w-100" tabindex="4"><i data-feather='log-in'></i> Login</button>
                            </form>
                            <p class="text-center mt-2"><a href="<?php echo base_url('authentication/verify'); ?>"><span>&nbsp;Verifikasi akun</span></a></p>
                            <div class="divider my-2">
                                <div class="divider-text">SMA NEGERI 1 ANJATAN</div>
                            </div>
                        </div>
                    </div>
                    <!-- /Login-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->