<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load model Provinsi_model
        $this->load->model('Provinsi_model');
    }

    public function index()
    {
        // Ambil semua data dari model
        $data['luaswilayah'] = $this->Provinsi_model->get_all_data();

        // Tampilkan data pada view
        $this->load->view('welcome_message', $data);
    }
}
