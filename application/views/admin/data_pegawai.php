<?php $this->load->view('templates/header') ?>
<?php $this->load->view('templates/sidebar') ?>
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
        <?php echo $this->session->flashdata('pesan_token'); ?>
        <section>
            <div class="content-body">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">DATA PEGAWAI</h4>
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-success dropdown-toggle waves-effect" data-bs-toggle="dropdown" aria-expanded="false">
                                Option
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#import_pegawai"><i data-feather='upload'></i> Import</a>
                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#add_user"><i data-feather='user'></i> Tambah Pengguna</a>
                                <a class=" dropdown-item" href="<?php echo base_url('admin/pegawai/delete_pns') ?>"><i data-feather='trash'></i> Delete PNS</a>
                                <a class="dropdown-item" href="<?php echo base_url('admin/pegawai/delete_pppk') ?>"><i data-feather='trash'></i> Delete PPPK</a>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Start-->
                    <div class="modal fade text-start" id="import_pegawai" tabindex="-1" aria-labelledby="myModalLabel4" data-bs-backdrop="false" aria-hidden="true" style="background: rgba(0,0,0,0.5);">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel4">Import Pegawai</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="<?php echo base_url('admin/pegawai/import_pegawai'); ?>" class="" enctype="multipart/form-data">
                                        <select class="form-control mb-2" name="id" required>
                                            <option value="">Pilih Sekolah</option>
                                            <?php foreach ($sekolah as $s) : ?>
                                                <option value="<?php echo $s->id; ?>"><?php echo $s->nama; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <input type="file" name="upload_file" placeholder="Enter Name" id="file" required>
                                        <input type="submit" name="submit" class="btn btn-primary">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <span class="badge badge-light-danger">File yang diupload adalah data excel yang diunduh dari dapodik sekolah</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal End -->
                    <!-- Modal Start-->
                    <div class="modal fade text-start" id="add_user" tabindex="-1" aria-labelledby="myModalLabel4" data-bs-backdrop="false" aria-hidden="true" style="background: rgba(0,0,0,0.5);">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel4">Tambah Pengguna</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="<?php echo base_url('admin/pegawai/add_user'); ?>" class="" enctype="multipart/form-data">
                                        <label for="name">Nama Lengkap</label>
                                        <input id="name" name="name" type="text" class="form-control mb-1" placeholder="Nama Lengkap" required>
                                        <label for="email">Email</label>
                                        <input id="email" name="email" type="text" class="form-control mb-1" placeholder="Email" required>
                                        <label for="sekolah">Sekolah</label>
                                        <select name="sekolah" class="form-control mb-1" required>
                                            <option value="">Pilih Sekolah</option>
                                            <?php foreach ($sekolah as $skl) : ?>
                                                <option value="<?php echo $skl->nama; ?>"><?php echo $skl->nama; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <button type="submit" class="btn btn-success float-end">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal End -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-hover display nowrap mb-0" id="table">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Status Kepegawaian</th>
                                                <th>NUPTK</th>
                                                <th>Sekolah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data_pegawai as $pg) : ?>
                                                <tr>
                                                    <td><?php echo $pg->nama; ?></td>
                                                    <td>
                                                        <?php echo $pg->status_kepegawaian; ?>
                                                        <?php if ($pg->status_kepegawaian == 'PNS' || $pg->status_kepegawaian == 'PPPK') { ?>
                                                            <a href="<?php echo base_url() . 'admin/pegawai/delete/' . $pg->id; ?>"><span class="text-danger"><i data-feather='trash'></i></span></a>
                                                        <?php } ?>
                                                    </td>
                                                    <td><?php echo $pg->nuptk; ?></td>
                                                    <td><?php echo $pg->sekolah; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- END: Content-->
<?php $this->load->view('templates/footer') ?>