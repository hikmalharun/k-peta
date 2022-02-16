<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi_model extends CI_Model
{
    private $sekolah = 'sekolah';
    private $daftar_pegawai = 'daftar_pegawai';
    private $pengguna = 'pengguna';
    private $lokasi = 'lokasi';

    public function getLokasi()
    {
        $this->db->from($this->lokasi);
        $this->db->order_by("id", "asc");
        $query = $this->db->get();
        return $query->result();
    }
}
