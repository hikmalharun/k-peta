<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="auth-wrapper auth-basic px-2">
                <div class="auth-inner my-2">
                    <!-- Register basic -->
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="<?php echo base_url('authentication/verify'); ?>" class="brand-logo">
                                <h2 class="brand-text text-primary ms-1">Verifikasi Akun</h2>
                            </a>
                            <?php echo $this->session->flashdata('pesan_token'); ?>
                            <form class="auth-register-form mt-2" action="<?php echo base_url('authentication/verify'); ?>" method="POST">
                                <div class="mb-1">
                                    <label for="register-username" class="form-label">Sekolah</label>
                                    <select class="form-control" id="register-username" name="sekolah" aria-describedby="register-username" tabindex="1">
                                        <option value="">Pilih Sekolah</option>
                                        <?php foreach ($sekolah as $s) : ?>
                                            <option value="<?php echo $s->nama; ?>"><?php echo $s->nama; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('sekolah', '<small class="badge badge-light-danger d-block">', '</small>'); ?>
                                </div>
                                <div class="mb-1">
                                    <label for="register-email" class="form-label">Email</label>
                                    <input value="<?php echo set_value('email') ?>" type="text" class="form-control" id="register-email" name="email" placeholder="email@sman1anjatan.sch.id" aria-describedby="register-email" tabindex="2" />
                                    <?php echo form_error('email', '<small class="badge badge-light-danger d-block">', '</small>'); ?>
                                </div>
                                <button class="btn btn-primary w-100" tabindex="5"><i data-feather='user-check'></i> Verifikasi</button>
                            </form>

                            <p class="text-center mt-2">
                                <a href="<?php echo base_url('authentication'); ?>">
                                    <span>Login</span>
                                </a>
                            </p>

                            <div class="divider my-2">
                                <div class="divider-text">SMA NEGERI 1 ANJATAN</div>
                            </div>
                        </div>
                    </div>
                    <!-- /Register basic -->
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END: Content-->