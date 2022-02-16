<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authtentication_model extends CI_Model
{
    private $sekolah = 'sekolah';
    private $daftar_pegawai = 'daftar_pegawai';
    private $pengguna = 'pengguna';
    private $token = 'token';

    public function getTokenEmail($email)
    {
        $this->db->from($this->token);
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insert_pengguna($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function insert_token($table, $user_token)
    {
        $this->db->insert($table, $user_token);
    }

    public function update_pengguna($data, $where)
    {
        $this->db->update($this->pengguna, $data, $where);
    }

    public function delete_pengguna($where)
    {
        $this->db->where($where);
        $this->db->delete($this->pengguna);
    }

    public function delete_token($where)
    {
        $this->db->where($where);
        $this->db->delete($this->token);
    }

    public function add_riwayat($table, $data)
    {
        $this->db->insert($table, $data);
    }
}
