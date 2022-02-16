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
                            <a href="<?php echo base_url('authentication/forgot_password') ?>" class="brand-logo">
                                <h2 class="brand-text text-primary ms-1">Lupa Password</h2>
                            </a>
                            <?php echo $this->session->flashdata('forgot_password'); ?>
                            <form class="auth-register-form mt-2" action="<?php echo base_url('authentication/forgot_password'); ?>" method="POST">
                                <div class="mb-1">
                                    <label for="register-email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="register-email" name="email" placeholder="email@sman1anjatan.sch.id" aria-describedby="register-email" tabindex="2" value="<?php echo set_value('email') ?>" />
                                    <?php echo form_error('email', '<small class="badge badge-light-danger d-block mt-1">', '</small>'); ?>
                                </div>
                                <button class="btn btn-primary w-100" tabindex="5"><i data-feather='chevrons-right'></i> Kirim</button>
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