<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model');
    }

    public function index()
    {
        $keyword = $this->input->get('keyword');
        $data['pasien'] = $this->Pasien_model->get_all($keyword);
        $this->load->view('pasien/index', $data);
    }

    public function simpan()
    {
        $data = [
            'nama_pasien' => $this->input->post('nama_pasien'),
            'nik' => $this->input->post('nik'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat' => $this->input->post('alamat'),
            'berat_badan' => $this->input->post('berat_badan'),
            'dokter' => $this->input->post('dokter'),
            'diagnosa' => $this->input->post('diagnosa'),
            'resep' => $this->input->post('resep'),
            'total_bayar' => $this->input->post('total_bayar'),
            'status' => $this->input->post('status')
        ];

        $this->Pasien_model->insert($data);
        redirect('pasien');
    }

    public function edit($id)
    {
        $data['edit'] = $this->Pasien_model->get_by_id($id);
        $data['pasien'] = $this->Pasien_model->get_all();
        $this->load->view('pasien/index', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');

        $data = [
            'nama_pasien' => $this->input->post('nama_pasien'),
            'nik' => $this->input->post('nik'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat' => $this->input->post('alamat'),
            'berat_badan' => $this->input->post('berat_badan'),
            'dokter' => $this->input->post('dokter'),
            'diagnosa' => $this->input->post('diagnosa'),
            'resep' => $this->input->post('resep'),
            'total_bayar' => $this->input->post('total_bayar'),
            'status' => $this->input->post('status')
        ];

        $this->Pasien_model->update($id, $data);
        redirect('pasien');
    }

    public function hapus($id)
    {
        $this->Pasien_model->delete($id);
        redirect('pasien');
    }
}