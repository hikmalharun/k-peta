<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
        <section>
            <div class="content-body">
                <?php echo $this->session->flashdata('profile'); ?>
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">EDIT PROFILE</h4>
                        <div class="btn-group">
                            <?php if ($user['role_id'] == 1) { ?>
                                <form action="<?php echo base_url('admin/pegawai/simpan'); ?>" method="POST">
                                    <button type="submit" class="btn btn-outline-success">
                                        <i data-feather='save'></i> Simpan
                                    </button>
                                <?php } else { ?>
                                    <form action="<?php echo base_url('pegawai/simpan'); ?>" method="POST">
                                        <button type="submit" class="btn btn-outline-success">
                                            <i data-feather='save'></i> Simpan
                                        </button>
                                    <?php } ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid mt-2">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label for="nama">Nama Lengkap <span class="text-danger">*</span></label>
                                    <input type="text" id="nama" name="name" class="form-control mb-1" placeholder="Nama Lengkap" value="<?php echo $user['name']; ?>" required>
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" id="email" class="form-control mb-1" placeholder="Email" value="<?php echo $user['email']; ?>" required readonly disabled>
                                    <label for="password">Password <span class="text-danger">*</span></label>
                                    <table style="width: 100%;">
                                        <tr>
                                            <td style="width: 100%;">
                                                <input type="password" id="password" class="form-control mb-1" placeholder="Password" value="<?php echo $user['password']; ?>" required readonly disabled>
                                            </td>
                                            <td>
                                                <span class="btn btn-outline-success mb-1" data-bs-toggle="modal" data-bs-target="#edit_password"><i data-feather='edit'></i></span>
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
                                    <input type="text" id="alamat" name="alamat" class="form-control mb-1" placeholder="Alamat" value="<?php echo $user['alamat']; ?>" required>
                                </div>
                                <div class="col-lg-2 text-center mt-2">
                                    <?php if ($user['gambar'] == 'default.jpg') { ?>
                                        <img src="<?php echo base_URL('assets/images/') . $user['gambar']; ?>" alt="gambar" class="avatar mb-1" style="width: 100%;">
                                    <?php } else { ?>
                                        <img src="<?php echo base_URL('assets/images/profile/') . $user['gambar']; ?>" alt="gambar" class="avatar mb-1" style="width: 100%;">
                                    <?php } ?>
                                    <span class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#edit_gambar"><i data-feather='edit'></i></span>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- END: Content-->
<?php $this->load->view('templates/footer'); ?>

<!-- Modal Start-->
<div class="modal fade text-start" id="edit_password" tabindex="-1" aria-labelledby="myModalLabel4" data-bs-backdrop="false" aria-hidden="true" style="background: rgba(0,0,0,0.5);">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel4">Edit Password</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php if ($user['role_id'] == 1) { ?><form method="post" action="<?php echo base_url('admin/pegawai/edit_password'); ?>" class="" enctype="multipart/form-data">
                    <?php } else { ?>
                        <form method="post" action="<?php echo base_url('pegawai/edit_password'); ?>" class="" enctype="multipart/form-data">
                        <?php } ?>
                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                        <div class="form-group">
                            <label for="old_password">Password Lama</label>
                            <input type="text" class="form-control mb-1" id="old_password" name="old_password" placeholder="Password Lama" required>
                            <label for="password1">Password Baru</label>
                            <input type="text" class="form-control mb-1" id="password1" name="password1" placeholder="Password Baru" required>
                            <label for="password2">Password Verifikasi</label>
                            <input type="text" class="form-control mb-1" id="password2" name="password2" placeholder="Password Verifikasi" required>
                        </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->

<!-- Modal Start-->
<div class="modal fade text-start" id="edit_gambar" tabindex="-1" aria-labelledby="myModalLabel4" data-bs-backdrop="false" aria-hidden="true" style="background: rgba(0,0,0,0.5);">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel4">Edit Foto</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php if ($user['role_id'] == 1) { ?>
                    <form method="post" action="<?php echo base_url('admin/pegawai/edit_gambar'); ?>" class="" enctype="multipart/form-data">
                    <?php } else { ?>
                        <form method="post" action="<?php echo base_url('pegawai/edit_gambar'); ?>" class="" enctype="multipart/form-data">
                        <?php } ?>
                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                        <div class="form-group text-center">
                            <?php if ($user['gambar'] == 'default.jpg') { ?>
                                <img src="<?php echo base_URL('assets/images/') . $user['gambar']; ?>" alt="gambar" class="avatar mb-1" style="width: 100%;">
                            <?php } else { ?>
                                <img src="<?php echo base_URL('assets/images/profile/') . $user['gambar']; ?>" alt="gambar" class="avatar mb-1" style="width: 100%;">
                            <?php } ?>
                            <input type="file" class="form-control" id="gambar" name="gambar" required>
                            <small class="text-danger">Catatan : Format gambar merupakan jpg/jpeg dengan ukuran maksimal 500 kb dan bujur sangkar (persegi)</small>
                        </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->