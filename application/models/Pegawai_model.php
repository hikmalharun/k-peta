<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{
    private $sekolah = 'sekolah';
    private $daftar_pegawai = 'daftar_pegawai';
    private $pengguna = 'pengguna';
    private $absen = 'absen';

    public function getSekolah()
    {
        $this->db->from($this->sekolah);
        $this->db->order_by("id", "asc");
        $query = $this->db->get();
        return $query->result();
    }

    public function getPegawai()
    {
        $this->db->from($this->daftar_pegawai);
        $this->db->order_by("id", "asc");
        $query = $this->db->get();
        return $query->result();
    }

    public function getWhereSekolah($id)
    {
        $this->db->from($this->sekolah);
        $this->db->where("id", $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_pegawai($data)
    {
        $this->db->insert_batch($this->daftar_pegawai, $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function hapus_user($where)
    {
        $this->db->where($where);
        $this->db->delete($this->daftar_pegawai);
    }

    public function delete_pns()
    {
        $where = array(
            'status_kepegawaian' => 'PNS'
        );
        $this->db->where($where);
        $this->db->delete($this->daftar_pegawai);
    }

    public function delete_pppk()
    {
        $where = array(
            'status_kepegawaian' => 'PPPK'
        );
        $this->db->where($where);
        $this->db->delete($this->daftar_pegawai);
    }

    public function edit_password($data, $where)
    {
        $this->db->update($this->pengguna, $data, $where);
    }

}
