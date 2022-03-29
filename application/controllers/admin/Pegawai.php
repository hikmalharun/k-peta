<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Style\Protection;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;
use PhpOffice\PhpSpreadsheet\Worksheet\ColumnDimension;
use PhpOffice\PhpSpreadsheet\Worksheet;

class Pegawai extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('pesan_token', '<div class="alert alert-danger" role="alert">Maaf silahkan login terlebih dahulu</div>');
            redirect('authentication');
        }
    }

    public function data_pegawai()
    {
        $data['title'] = "DATA PEGAWAI";
        $data['sekolah'] = $this->Pegawai_model->getSekolah();
        $data['data_pegawai'] = $this->Pegawai_model->getPegawai();
        $data['user'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $data['pegawai'] = $this->db->get_where('daftar_pegawai', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/data_pegawai', $data);
    }

    public function import_pegawai()
    {
        $upload_file = $_FILES['upload_file']['name'];
        $extension = pathinfo($upload_file, PATHINFO_EXTENSION);
        if ($extension == 'csv') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else if ($extension == 'xls') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }

        $spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);

        $sheetPegawai = $spreadsheet->getActiveSheet()->toArray();

        $id = $this->input->post('id');
        foreach ($this->Pegawai_model->getWhereSekolah($id) as $skl) {
            $sheetcount = count($sheetPegawai);
            if ($sheetcount > 1) {
                $data = array();
                for ($i = 5; $i < $sheetcount; $i++) {
                    $sekolah = $skl->nama;
                    $npsn = $skl->npsn;
                    $nama = $sheetPegawai[$i][1];
                    $nuptk = $sheetPegawai[$i][2];
                    $jk = $sheetPegawai[$i][3];
                    $tempat_lahir = $sheetPegawai[$i][4];
                    $tanggal_lahir = $sheetPegawai[$i][5];
                    $nip = $sheetPegawai[$i][6];
                    if ($sheetPegawai[$i][20] == 'Kepala Sekolah') {
                        $status_kepegawaian = $sheetPegawai[$i][7] . '_Kepala_Sekolah';
                    } else {
                        $status_kepegawaian = $sheetPegawai[$i][7];
                    }
                    $jenis_ptk = $sheetPegawai[$i][8];
                    $agama = $sheetPegawai[$i][9];
                    $alamat_jalan = $sheetPegawai[$i][10];
                    $rt = $sheetPegawai[$i][11];
                    $rw = $sheetPegawai[$i][12];
                    $nama_dusun = $sheetPegawai[$i][13];
                    $desa_kelurahan = $sheetPegawai[$i][14];
                    $kecamatan = $sheetPegawai[$i][15];
                    $kode_pos = $sheetPegawai[$i][16];
                    $telepon = $sheetPegawai[$i][17];
                    $hp = $sheetPegawai[$i][18];
                    $email = $sheetPegawai[$i][19];
                    $tugas_tambahan = $sheetPegawai[$i][20];
                    $sk_cpns = $sheetPegawai[$i][21];
                    $tanggal_cpns = $sheetPegawai[$i][22];
                    $sk_pengangkatan = $sheetPegawai[$i][23];
                    $tmt_pengangkatan = $sheetPegawai[$i][24];
                    $lembaga_pengangkatan = $sheetPegawai[$i][25];
                    $pangkat_golongan = $sheetPegawai[$i][26];
                    $sumber_gaji = $sheetPegawai[$i][27];
                    $nama_ibu_kandung = $sheetPegawai[$i][28];
                    $status_perkawinan = $sheetPegawai[$i][29];
                    $nama_suami_istri = $sheetPegawai[$i][30];
                    $nip_suami_istri = $sheetPegawai[$i][31];
                    $pekerjaan_suami_istri = $sheetPegawai[$i][32];
                    $tmt_pns = $sheetPegawai[$i][33];
                    $sudah_lisensi_kepala_sekolah = $sheetPegawai[$i][34];
                    $pernah_diklat_kepengawasan = $sheetPegawai[$i][35];
                    $keahlian_braille = $sheetPegawai[$i][36];
                    $keahlian_bahasa_isyarat = $sheetPegawai[$i][37];
                    $npwp = $sheetPegawai[$i][38];
                    $nama_wajib_pajak = $sheetPegawai[$i][39];
                    $kewarganegaraan = $sheetPegawai[$i][40];
                    $bank = $sheetPegawai[$i][41];
                    $nomor_rekening_bank = $sheetPegawai[$i][42];
                    $rekening_atas_nama = $sheetPegawai[$i][43];
                    $nik = $sheetPegawai[$i][44];
                    $no_kk = $sheetPegawai[$i][45];
                    $karpeg = $sheetPegawai[$i][46];
                    $karis_karsu = $sheetPegawai[$i][47];
                    $lintang = $sheetPegawai[$i][48];
                    $bujur = $sheetPegawai[$i][49];
                    $nuks = $sheetPegawai[$i][50];

                    date_default_timezone_set("Asia/Jakarta");

                    $data[] = array(
                        'sekolah' => $sekolah,
                        'npsn' => $npsn,
                        'nama' => $nama,
                        'nuptk' => $nuptk,
                        'jk' => $jk,
                        'tempat_lahir' => $tempat_lahir,
                        'tanggal_lahir' => $tanggal_lahir,
                        'nip' => $nip,
                        'status_kepegawaian' => $status_kepegawaian,
                        'jenis_ptk' => $jenis_ptk,
                        'agama' => $agama,
                        'alamat_jalan' => $alamat_jalan,
                        'rt' => $rt,
                        'rw' => $rw,
                        'nama_dusun' => $nama_dusun,
                        'desa_kelurahan' => $desa_kelurahan,
                        'kecamatan' => $kecamatan,
                        'kode_pos' => $kode_pos,
                        'telepon' => $telepon,
                        'hp' => $hp,
                        'email' => $email,
                        'tugas_tambahan' => $tugas_tambahan,
                        'sk_cpns' => $sk_cpns,
                        'tanggal_cpns' => $tanggal_cpns,
                        'sk_pengangkatan' => $sk_pengangkatan,
                        'tmt_pengangkatan' => $tmt_pengangkatan,
                        'lembaga_pengangkatan' => $lembaga_pengangkatan,
                        'pangkat_golongan' => $pangkat_golongan,
                        'sumber_gaji' => $sumber_gaji,
                        'nama_ibu_kandung' => $nama_ibu_kandung,
                        'status_perkawinan' => $status_perkawinan,
                        'nama_suami_istri' => $nama_suami_istri,
                        'nip_suami_istri' => $nip_suami_istri,
                        'pekerjaan_suami_istri' => $pekerjaan_suami_istri,
                        'tmt_pns' => $tmt_pns,
                        'sudah_lisensi_kepala_sekolah' => $sudah_lisensi_kepala_sekolah,
                        'pernah_diklat_kepengawasan' => $pernah_diklat_kepengawasan,
                        'keahlian_braille' => $keahlian_braille,
                        'keahlian_bahasa_isyarat' => $keahlian_bahasa_isyarat,
                        'npwp' => $npwp,
                        'nama_wajib_pajak' => $nama_wajib_pajak,
                        'kewarganegaraan' => $kewarganegaraan,
                        'bank' => $bank,
                        'nomor_rekening_bank' => $nomor_rekening_bank,
                        'rekening_atas_nama' => $rekening_atas_nama,
                        'nik' => $nik,
                        'no_kk' => $no_kk,
                        'karpeg' => $karpeg,
                        'karis_karsu' => $karis_karsu,
                        'lintang' => $lintang,
                        'bujur' => $bujur,
                        'nuks' => $nuks
                    );
                }

                $this->Pegawai_model->insert_pegawai($data);
                $this->session->set_flashdata('sukses', '
                <div class="alert alert-success alert-dismissible fade show" role="alert">Upload data pegawai sukses.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                ');
                redirect('admin/pegawai/data_pegawai');
            }
        }
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->Pegawai_model->hapus_user($where);
        redirect('admin/pegawai/data_pegawai');
    }

    public function delete_pns()
    {
        $this->Pegawai_model->delete_pns();
        redirect('admin/pegawai/data_pegawai');
    }

    public function delete_pppk()
    {
        $this->Pegawai_model->delete_pppk();
        redirect('admin/pegawai/data_pegawai');
    }

    public function profile()
    {
        $data['title'] = "PROFILE";
        $data['user'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('profile', $data);
    }

    public function edit_profile()
    {
        $data['title'] = "EDIT PROFILE";
        $data['user'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('edit_profile', $data);
    }

    public function edit_password()
    {
        $id = $this->input->post('id');
        $old = md5($this->input->post('old_password'));
        $new1 = $this->input->post('password1');
        $new2 = $this->input->post('password2');

        $data_user = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_user['password'] == $old) {
            if ($new1 == $new2) {
                $where = array(
                    'id' => $id
                );
                $data = array(
                    'password' => md5($new1)
                );
                $this->Pegawai_model->edit_password($data, $where);
                $this->session->set_flashdata('profile', '<div class="alert alert-success fade show" role="alert">Password berhasil disimpan.</div>');
                redirect('admin/pegawai/edit_profile');
            } else {
                $this->session->set_flashdata('profile', '<div class="alert alert-danger fade show" role="alert">Password yang anda masukan tidak cocok.</div>');
                redirect('admin/pegawai/edit_profile');
            }
        } else {
            $this->session->set_flashdata('profile', '<div class="alert alert-danger fade show" role="alert">Password lama yang anda masukan salah.</div>');
            redirect('admin/pegawai/edit_profile');
        }
    }

    public function edit_gambar()
    {
        $data['user'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();

        $id = $this->input->post('id');
        $gambar = $_FILES['gambar']['name'];

        if ($gambar) {
            $config['upload_path']          = './assets/images/profile';
            $config['allowed_types']        = 'jpg|jpeg';
            $config['max_size']             = 500;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $old_gambar = $data['user']['gambar'];
                if ($old_gambar != 'default.jpg'); {
                    unlink(FCPATH . 'assets/images/profile/' . $old_gambar);
                }
                $new_gambar = $this->upload->data('file_name');
                $this->db->set('gambar', $new_gambar);
            } else {
                $this->session->set_flashdata('profile', '<div class="alert alert-danger fade show" role="alert">Gambar gagal diupload.</div>');
                redirect('admin/pegawai/edit_profile');
            }
        }

        $this->db->where('id', $id);
        $this->db->update('pengguna');

        $this->session->set_flashdata('profile', '<div class="alert alert-success fade show" role="alert">Gambar berhasil diubah.</div>');
        redirect('admin/pegawai/edit_profile');
    }

    public function simpan()
    {
        $nama = $this->input->post('name');
        $alamat = $this->input->post('alamat');

        $data['user'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $id = $data['user']['id'];
        $old_nama = $data['user']['name'];
        $old_alamat = $data['user']['alamat'];
        if ($nama != $old_nama) {
            $this->db->set('name', $nama);
        } elseif ($alamat != $old_alamat) {
            $this->db->set('name', $alamat);
        } else {
            $this->session->set_flashdata('profile', '<div class="alert alert-success fade show" role="alert">Tidak ada data yang diubah.</div>');
            redirect('admin/pegawai/profile');
        }

        $this->db->where('id', $id);
        $this->db->update('pengguna');

        $this->session->set_flashdata('profile', '<div class="alert alert-success fade show" role="alert">Data profile berhasil diubah.</div>');
        redirect('admin/pegawai/profile');
    }

    public function add_user()
    {
        $name = $this->input->post('name');
        $sekolah = $this->input->post('sekolah');
        $email = $this->input->post('email');
        $length = 8;
        $password = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 1, $length);
        $generate_password = md5($password);
        $is_sekolah = $this->db->get_where('daftar_pegawai', ['sekolah' => $sekolah])->row_array();

        $data = array(
            'name' => $name,
            'email' => $email,
            'npsn' => $is_sekolah['npsn'],
            'sekolah' => $is_sekolah['sekolah'],
            'jabatan' => '-',
            'alamat' => '-',
            'gambar' => 'default.jpg',
            'password' => $generate_password,
            'password_default' => $password,
            'role_id' => 2,
            'status' => 0,
            'tanggal_add' => time(),
        );
        //Generate token
        $leght_token = 77;
        $token = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 1, $leght_token);
        $user_token = [
            'email' => $email,
            'token' => $token,
            'tanggal_add' => time()
        ];
        $this->Authtentication_model->insert_pengguna('pengguna', $data);
        $this->Authtentication_model->insert_token('token', $user_token);
        $type = 'Verifikasi Akun';
        //Kirim email verifikasi
        $this->_sendEmail($token, $name, $password, $type);
        $this->session->set_flashdata('pesan_token', '<div class="alert alert-success" role="alert">Silahkan lakukan verifikasi akun melalui email.</div>');
        redirect('admin/pegawai/data_pengguna');
    }

    private function _sendEmail($token, $name, $password, $type)
    {
        if ($type == 'Verifikasi Akun') {
            $message = '
			<center><img src="https://sman1anjatan.sch.id/assets/images/logosmanja.png" style="width:100px;"/></center>
			<h2 style="width:100%;heoght:200px;text-align:center;background-color:blue;color:white;margin:10px 0 10px 0;">Verifikasi Akun</h2><p>Kepada <b>Yth. ' . $name . '</b><br>
			Berikut kami kirim link verifikasi akun anda, caranya klik tombol berikut <br>
			<a href="' . base_url() . 'authentication/verify_account?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">
			<button style="background-color:green; color: white;width: 100%; height: 50px; border: 0px solid #fff; border-radius: 5px; cursor: pointer;">VERIFIKASI</button>
			</a><br>
			atau dengan cara klik link berikut : <br>
			<a href="' . base_url() . 'authentication/verify_account?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">' . base_url() . 'authentication/verify_account?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '</a><br><br>
			<table><tr><td>Username</td><td>:</td><td>' . $this->input->post('email') . '</td></tr><tr><td>Password</td><td>:</td><td>' . $password . '</td></tr></table><br><br>
			Waktu verifikasi akun hanya tersedia 24 jam setelah menerima link diatas.</p>
			';
        } else {
            $message = '
			<center><img src="https://sman1anjatan.sch.id/assets/images/logosmanja.png" style="width:100px;"/></center>
			<h2 style="width:100%;heoght:200px;text-align:center;background-color:blue;color:white;margin:10px 0 10px 0;">Recovery Password</h2><p>Kepada <b>Yth. ' . $name . '</b><br>
			Berikut kami kirim email dan password anda :
			<table><tr><td>Username</td><td>:</td><td>' . $token . '</td></tr><tr><td>Password</td><td>:</td><td>' . $password . '</td></tr></table><br><br></p>
			';
        }
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'kpeta.activation@gmail.com',
            'smtp_pass' => 'admin123*',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('info@sman1anjatan.sch.id', 'ADMIN K-PETA SMAN 1 ANJATAN');
        $this->email->to($this->input->post('email'));
        $this->email->subject($type);
        $this->email->message($message);
        $this->email->send();
    }

    public function data_pengguna()
    {
        $data['title'] = "DATA PEGAWAI";
        $data['sekolah'] = $this->Pegawai_model->getSekolah();
        $data['data_pegawai'] = $this->Pegawai_model->getPegawai();
        $data['data_pengguna'] = $this->Pegawai_model->getPengguna();
        $data['user'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $data['pegawai'] = $this->db->get_where('daftar_pegawai', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/data_pengguna', $data);
    }

    function absen()
    {
        // ================================
        $data['countAbsen'] = $this->db->get_where('absen', ['email' => $this->session->userdata('email'), 'tanggal_absen' => date('Y-m-d')])->num_rows();
        // $data['cekmasuk'] = $this->db->get_where('absen', ['email' => $this->session->userdata('email'), 'tanggal_absen' => date('Y-m-d'), 'status_absen' => 'Masuk'])->row_array();
        // $data['cekpulang'] = $this->db->get_where('absen', ['email' => $this->session->userdata('email'), 'tanggal_absen' => date('Y-m-d'), 'status_absen' => 'Pulang'])->row_array();
        $data['skema'] = $this->db->get_where('skema', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "ABSEN";
        // ================================
        $nows = date_default_timezone_set('Asia/Jakarta');
        $nows = date('H:i:s');
        $jam = strtotime($nows);
        $jam_masuk = strtotime($data['skema']['masuk']);
        $jam_pulang = strtotime($data['skema']['pulang']);
        $batas_awal_masuk = $jam_masuk - 7200;
        $batas_akhir_masuk = $jam_masuk + 7200;
        $batas_akhir_pulang = $jam_pulang + 7200;
        // ================================
        if ($jam > $batas_awal_masuk && $jam < $batas_akhir_masuk) {
            if ($data['countAbsen'] == 1) {
                if ($data['user']['role_id'] == 1) {
                    redirect('admin/dashboard');
                } else {
                    redirect('dashboard');
                }
            } else {
                $this->load->view('absen', $data);
            }
        } elseif ($jam > $jam_pulang && $jam < $batas_akhir_pulang) {
            if ($data['countAbsen'] == 2) {
                if ($data['user']['role_id'] == 1) {
                    redirect('admin/dashboard');
                } else {
                    redirect('dashboard');
                }
            } else {
                $this->load->view('absen', $data);
            }
        } else {
            $this->load->view('absen', $data);
        }
        // ================================
    }

    function upload_image()
    {
        if (isset($_FILES["user_image"])) {
            $extension = explode('.', $_FILES['user_image']['name']);
            $new_name = rand() . '.' . $extension[1];
            $destination = './upload/' . $new_name;
            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
            return $new_name;
        }
    }

    public function submit_absen()
    {
        $id_pengguna =  $this->session->userdata('id_pengguna');
        $cekAbsen = $this->db->get_where('absen', ['id_pengguna' => $id_pengguna, 'tanggal_absen' => date('Y-m-d')])->row_array();
        if ($cekAbsen) {
            $status_absen = 'Pulang';
        } else {
            $status_absen = 'Masuk';
        }
        $this->load->library('geonames');
        $longitude = $this->input->post('longitude');
        $latitude = $this->input->post('latitude');
        $data  = ['lat' => $latitude, 'long' => $longitude];
        $geolocation = isset(json_decode($this->geonames->getPlaceName($data))->geonames[0]) ? json_decode($this->geonames->getPlaceName($data))->geonames[0] : null;
        $address = '';
        if ($geolocation) {
            $address = $geolocation->name . ', ' . $geolocation->adminName1 . ', ' . $geolocation->countryName;
        }

        date_default_timezone_set('Asia/Jakarta');

        $image = $this->input->post('image');
        $image = str_replace('data:image/jpeg;base64,', '', $image);
        $image = base64_decode($image);
        $filename = 'image_' . time() . '.png';
        file_put_contents(FCPATH . '/uploads/' . $filename, $image);

        $row_user = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();

        $data = array(
            'nama' => $row_user['name'],
            'email' =>  $row_user['email'],
            'sekolah' => $row_user['sekolah'],
            'id_pengguna' =>  $row_user['id'],
            'status_absen' => $status_absen,
            'jam_absen' => date('H:i:s'),
            'tanggal_absen' => date('Y-m-d'),
            'koordinat' => $latitude . ',' . $longitude,
            'gambar' => $filename,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'address' => $address
        );

        $res = $this->db->insert('absen', $data);
        $this->session->set_flashdata('absen', '<div class="alert alert-success fade show" role="alert">Absen Tersimpan.</div>');
        echo json_encode($res);
    }
}
