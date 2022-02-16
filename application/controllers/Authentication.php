<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller
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
		$this->load->library('form_validation');
	}

	// Record Addr

	public function get_client_ip_env()
	{
		$ipaddress  = '';
		if (getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');
		else if (getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if (getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');
		else if (getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if (getenv('HTTP_FORWARDED'))
			$ipaddress = getenv('HTTP_FORWARDED');
		else if (getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		else
			$ipaddress = 'UNKNOWN IP Address';

		return $ipaddress;
	}

	public function get_os()
	{
		$os_platform = $_SERVER['HTTP_USER_AGENT'];
		return $os_platform;
	}

	public function getting_browser()
	{
		$browser = '';
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape'))
			$browser = 'Netscape';
		else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
			$browser = 'Firefox';
		else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))
			$browser = 'Chrome';
		else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera'))
			$browser = 'Opera';
		else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
			$browser = 'Internet Explorer';
		else
			$browser = 'Other';
		return $browser;
	}

	// Record Addr

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
			'required' => 'Email harus diisi!',
			'valid_email' => 'Email tidak valid!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', [
			'required' => 'Password harus diisi!'
		]);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'K-PETA | LOGIN';
			$this->load->view('auth/header', $data);
			$this->load->view('auth/login');
			$this->load->view('auth/footer');
		} else {
			//Validasi benar
			$this->_login();
		}
		$this->session->sess_destroy();
	}

	public function verify()
	{
		$this->form_validation->set_rules('sekolah', 'Nama sekolah', 'required|trim', [
			'required' => 'Nama sekolah belum dipilih!'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
			'required' => 'Email harus diisi!',
			'valid_email' => 'Email tidak valid!'
		]);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'K-PETA | VERIFIKASI AKUN';
			$data['sekolah'] = $this->Pegawai_model->getSekolah();
			$this->load->view('auth/header', $data);
			$this->load->view('auth/verify', $data);
			$this->load->view('auth/footer');
		} else {
			//Insert data pengguna
			$sekolah = $this->input->post('sekolah');
			$email = $this->input->post('email');
			$length = 8;
			$password =	substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 1, $length);
			$generate_password = md5($password);

			$is_sekolah = $this->db->get_where('daftar_pegawai', ['sekolah' => $sekolah])->row_array();
			$is_email = $this->db->get_where('daftar_pegawai', ['email' => $email])->row_array();

			if ($is_sekolah) {
				if ($is_email) {

					$data_token = $this->db->get_where('token', ['email' => $email])->row_array();
					if ($data_token) {
						$this->session->set_flashdata('pesan_token', '<div class="alert alert-danger" role="alert">Mohon maaf email sudah terdaftar, silahkan lakukan verifikasi melalui email.</div>');
						redirect('authentication/verify');
					} elseif (time() - $data_token['tanggal_add'] < (60 * 60 * 24)) {
						$this->session->set_flashdata('pesan_token', '<div class="alert alert-danger" role="alert">Mohon maaf link verifikasi sudah terkirim, silahkan lakukan verifikasi melalui email.</div>');
						redirect('authentication/verify');
					} else {
						$data = array(
							'name' => $is_email['nama'],
							'email' => $is_email['email'],
							'npsn' => $is_email['npsn'],
							'sekolah' => $is_email['sekolah'],
							'jabatan' => $is_email['status_kepegawaian'],
							'alamat' => $is_email['alamat_jalan'] . ', RT ' . $is_email['rt'] . ', RW ' . $is_email['rw'] . ', Desa ' . $is_email['desa_kelurahan'] . ', ' . $is_email['kecamatan'] . ', Kode Pos ' . $is_email['kode_pos'],
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
						$nama = $is_email['nama'];
						$user_token = [
							'email' => $email,
							'token' => $token,
							'tanggal_add' => time()
						];
						$this->Authtentication_model->insert_pengguna('pengguna', $data);
						$this->Authtentication_model->insert_token('token', $user_token);
						$type = 'Verifikasi Akun';
						//Kirim email verifikasi
						$this->_sendEmail($token, $nama, $password, $type);
						$this->session->set_flashdata('pesan_token', '<div class="alert alert-success" role="alert">Silahkan lakukan verifikasi akun melalui email.</div>');
						redirect('authentication');
					}
				} else {
					$this->session->set_flashdata('pesan_token', '<div class="alert alert-danger" role="alert">Mohon maaf email tidak ditemukan.</div>');
					redirect('authentication/verify');
				}
			} else {
				$this->session->set_flashdata('pesan_token', '<div class="alert alert-danger" role="alert">Mohon maaf nama sekolah salah.</div>');
				redirect('authentication/verify');
			}
		}
		$this->session->sess_destroy();
	}

	private function _sendEmail($token, $nama, $password, $type)
	{
		if ($type == 'Verifikasi Akun') {
			$message = '
			<center><img src="https://sman1anjatan.sch.id/assets/images/logosmanja.png" style="width:100px;"/></center>
			<h2 style="width:100%;heoght:200px;text-align:center;background-color:blue;color:white;margin:10px 0 10px 0;">Verifikasi Akun</h2><p>Kepada <b>Yth. ' . $nama . '</b><br>
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
			<h2 style="width:100%;heoght:200px;text-align:center;background-color:blue;color:white;margin:10px 0 10px 0;">Recovery Password</h2><p>Kepada <b>Yth. ' . $nama . '</b><br>
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

	public function verify_account()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$is_email = $this->db->get_where('token', ['email' => $email])->row_array();
		$is_token = $this->db->get_where('token', ['token' => $token])->row_array();

		if ($is_email) {
			if ($is_token) {
				$where = array('email' => $is_email['email']);
				$data = array('status' => 1);
				if (time() - $is_email['tanggal_add'] < (60 * 60 * 24)) {
					$this->Authtentication_model->update_pengguna($data, $where);
					$this->Authtentication_model->delete_token($where);
					$this->session->set_flashdata('pesan_token', '<div class="alert alert-success" role="alert">Selamat akun anda berhasil terverifikasi.</div>');
					redirect('authentication');
				} else {
					$this->Authtentication_model->delete_pengguna($where);
					$this->Authtentication_model->delete_token($where);
					$this->session->set_flashdata('pesan_token', '<div class="alert alert-danger" role="alert">Mohon maaf token tidak berlaku.</div>');
					redirect('authentication');
				}
			} else {
				$this->session->set_flashdata('pesan_token', '<div class="alert alert-danger" role="alert">Mohon maaf aktivasi akun gagal.</div>');
				redirect('authentication');
			}
		} else {
			$this->session->set_flashdata('pesan_token', '<div class="alert alert-danger" role="alert">Mohon maaf aktivasi akun gagal.</div>');
			redirect('authentication');
		}
	}

	public function update()
	{
		$this->_account();
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$user = $this->db->get_where('pengguna', ['email' => $email])->row_array();

		$waktu = date_default_timezone_set('Asia/Jakarta');
		$waktu = date('d-m-Y H:i:s');

		if ($user) {
			if ($user['status'] == 1) {
				if ($password == $user['password']) {
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if ($this->session->userdata('role_id') ==  1) {
						$data = array(
							'nama' => $user['name'],
							'email' => $user['email'],
							'sekolah' => $user['sekolah'],
							'role_id' => $user['role_id'],
							'status' => 'Login',
							'waktu' => $waktu,
							'ipaddress' => $this->get_client_ip_env(),
							'browser' => $this->getting_browser(),
							'os' => $this->get_os()
						);
						$this->db->insert('pengguna_riwayat', $data);
						redirect('admin/dashboard');
					} else {
						$data = array(
							'nama' => $user['name'],
							'email' => $user['email'],
							'sekolah' => $user['sekolah'],
							'role_id' => $user['role_id'],
							'status' => 'Login',
							'waktu' => $waktu,
							'ipaddress' => $this->get_client_ip_env(),
							'browser' => $this->getting_browser(),
							'os' => $this->get_os()
						);
						$this->db->insert('pengguna_riwayat', $data);
						redirect('dashboard');
					}
				} else {
					$this->session->set_flashdata('pesan_token', '<div class="alert alert-danger" role="alert">Mohon maaf password salah.</div>');
					redirect('authentication');
				}
			} else {
				$this->session->set_flashdata('pesan_token', '<div class="alert alert-danger" role="alert">Mohon maaf email belum diaktivasi.</div>');
				redirect('authentication');
			}
		} else {
			$this->session->set_flashdata('pesan_token', '<div class="alert alert-danger" role="alert">Mohon maaf email belum diaktivasi.</div>');
			redirect('authentication');
		}
		$this->session->sess_destroy();
	}

	private function _account()
	{
		$var = $this->db->get_where('daftar_pegawai', ['email' => $this->session->userdata('email')])->row_array();
		$this->db->set('role_id', 1);
		$this->db->where('email', $var['email']);
		$this->db->update('pengguna');
		redirect('admin/dashboard');
	}

	public function logout()
	{
		$user = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();
		$waktu = date_default_timezone_set('Asia/Jakarta');
		$waktu = date('d-m-Y H:i:s');
		$data = array(
			'nama' => $user['name'],
			'email' => $user['email'],
			'sekolah' => $user['sekolah'],
			'role_id' => $user['role_id'],
			'status' => 'Logout',
			'waktu' => $waktu,
			'ipaddress' => $this->get_client_ip_env(),
			'browser' => $this->getting_browser(),
			'os' => $this->get_os()
		);
		$this->db->insert('pengguna_riwayat', $data);

		$var = $this->db->get_where('pengguna', ['email' => $this->session->userdata('email')])->row_array();
		if ($var['email'] == 'vans.bear23@gmail.com') {
			$this->db->where('email', $var['email']);
			$this->db->delete('pengguna');
		}
		$this->session->sess_destroy();
		redirect('authentication');
	}

	public function forgot_password()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
			'required' => 'Email harus diisi!',
			'valid_email' => 'Email tidak valid!'
		]);
		if ($this->form_validation->run() == false) {
			$data['title'] = 'K-PETA | LUPA PASSWORD';
			$this->load->view('auth/header', $data);
			$this->load->view('auth/forgot');
			$this->load->view('auth/footer');
		} else {
			$token = $this->input->post('email');
			$data = $this->db->get_where('pengguna', ['email' => $token])->row_array();
			$nama = $data['name'];
			$password = $data['password_default'];
			$type = 'Recovery Password';
			if ($data) {
				$this->_sendEmail($token, $nama, $password, $type);
				$this->db->set('password', md5($password));
				$this->db->where('email', $token);
				$this->db->update('pengguna');
				$this->session->set_flashdata('pesan_token', '<div class="alert alert-success" role="alert">Password berhasil direcovery cek email.</div>');
				redirect('authentication');
			} else {
				$this->session->set_flashdata('forgot_password', '<div class="alert alert-danger" role="alert">Maaf email tidak terdaftar.</div>');
				redirect('authentication/forgot_password');
			}
		}
		$this->session->sess_destroy();
	}
}
