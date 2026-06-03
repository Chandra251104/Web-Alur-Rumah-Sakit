<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model');
    }

    public function index()
    {
        $data['pasien'] = $this->Pasien_model->get_all();
        $this->load->view('pembayaran/index', $data);
    }

    public function edit($id)
    {
        $data['edit'] = $this->Pasien_model->get_by_id($id);
        $data['pasien'] = $this->Pasien_model->get_all();
        $this->load->view('pembayaran/index', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');

        $data = [
            'total_bayar' => $this->input->post('total_bayar'),
            'status_pembayaran' => $this->input->post('status_pembayaran'),
            'status' => 'Farmasi'
        ];

        $this->Pasien_model->update($id, $data);
        redirect('pembayaran');
    }
}