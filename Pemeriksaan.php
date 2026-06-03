<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemeriksaan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model');
    }

    public function index()
    {
        $data['pasien'] = $this->Pasien_model->get_all();
        $this->load->view('pemeriksaan/index', $data);
    }

    public function edit($id)
    {
        $data['edit'] = $this->Pasien_model->get_by_id($id);
        $data['pasien'] = $this->Pasien_model->get_all();
        $this->load->view('pemeriksaan/index', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');

        $data = [
            'dokter' => $this->input->post('dokter'),
            'diagnosa' => $this->input->post('diagnosa'),
            'resep' => $this->input->post('resep'),
            'status' => 'Resep'
        ];

        $this->Pasien_model->update($id, $data);
        redirect('pemeriksaan');
    }
}