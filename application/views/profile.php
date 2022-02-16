<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-body">
            <div class="content-header row"></div>
            <section>
                <?php echo $this->session->flashdata('profile'); ?>
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">PROFILE</h4>
                        <div class="btn-group">
                            <?php if ($user['role_id'] == 1) { ?>
                                <a href="<?php echo base_url('admin/pegawai/edit_profile') ?>">
                                    <button type="button" class="btn btn-outline-success">
                                        <i data-feather='edit'></i> Edit Profile
                                    </button>
                                </a>
                            <?php } else { ?>
                                <a href="<?php echo base_url('pegawai/edit_profile') ?>">
                                    <button type="button" class="btn btn-outline-success">
                                        <i data-feather='edit'></i> Edit Profile
                                    </button>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid mt-2">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label for="nama">Nama Lengkap <span class="text-danger">*</span></label>
                                    <input type="text" id="nama" class="form-control mb-1" placeholder="Nama Lengkap" value="<?php echo $user['name']; ?>" required readonly disabled>
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" id="email" class="form-control mb-1" placeholder="Email" value="<?php echo $user['email']; ?>" required readonly disabled>
                                    <label for="password">Password <span class="text-danger">*</span></label>
                                    <table style="width: 100%;">
                                        <tr>
                                            <td style="width: 100%;">
                                                <input type="password" id="password" class="form-control mb-1" placeholder="Password" value="<?php echo $user['password']; ?>" required readonly disabled>
                                            </td>
                                            <td>
                                                <span class="btn btn-outline-success mb-1" aria-disabled="true"><i data-feather='edit'></i></span>
                                            </td>
                                        </tr>
                                    </table>
                                    <label for="role_id">Jenis Pengguna <span class="text-danger">*</span></label>
                                    <input type="text" id="role_id" class="form-control mb-1" value="<?php if ($user['role_id'] == 1) { ?>Admin<?php } else { ?>Pengguna<?php } ?>" required readonly disabled>
                                </div>
                                <div class="col-lg-5">
                                    <label for="jabatan">Jabatan <span class="text-danger">*</span></label>
                                    <input type="text" id="jabatan" class="form-control mb-1" placeholder="Jabatan" value="<?php echo $user['jabatan']; ?>" required readonly disabled>
                                    <label for="skl">Sekolah <span class="text-danger">*</span></label>
                                    <input type="text" id="skl" class="form-control mb-1" placeholder="Sekolah" value="<?php echo $user['sekolah']; ?>" required readonly disabled>
                                    <label for="npsn">NPSN <span class="text-danger">*</span></label>
                                    <input type="text" id="npsn" class="form-control mb-1" placeholder="NPSN" value="<?php echo $user['npsn']; ?>" required readonly disabled>
                                    <label for="alamat">Alamat <span class="text-danger">*</span></label>
                                    <input type="text" id="alamat" class="form-control mb-1" placeholder="Alamat" value="<?php echo $user['alamat']; ?>" required readonly disabled>
                                </div>
                                <div class="col-lg-2 text-center mt-2">
                                    <?php if ($user['gambar'] == 'default.jpg') { ?>
                                        <img src="<?php echo base_URL('assets/images/') . $user['gambar']; ?>" alt="gambar" class="avatar mb-1" style="width: 100%;">
                                    <?php } else { ?>
                                        <img src="<?php echo base_URL('assets/images/profile/') . $user['gambar']; ?>" alt="gambar" class="avatar mb-1" style="width: 100%;">
                                    <?php } ?>
                                    <span class="btn btn-outline-success" aria-disabled="true"><i data-feather='edit'></i></span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->
<?php $this->load->view('templates/footer'); ?>