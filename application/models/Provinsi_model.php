<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        // Memastikan database sudah dimuat
        $this->load->database();
    }

    public function get_all_data()
    {
        // Pastikan koneksi database berhasil
        if ($this->db->conn_id === FALSE) {
            die("Database connection error.");
        }
        
        // Query untuk mengambil semua data dari tabel tb_luaswilayah
        $query = $this->db->get('tb_luaswilayah');  // 'tb_luaswilayah' adalah nama tabel
        return $query->result();  // Mengembalikan hasilnya sebagai array objek
    }
}
