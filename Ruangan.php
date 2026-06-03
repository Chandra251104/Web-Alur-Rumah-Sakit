<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ruangan_model');
    }
    public function index()
    {
        $keyword = $this->input->get('keyword');
        $data['ruangan'] = $this->Ruangan_model->get_all($keyword);
        $this->load->view('ruangan/index', $data);
    }

    public function tambah()
    {
        $this->load->view('ruangan/tambah');
    }

    public function simpan()
    {
        $data = [
            'nama_ruangan' => $this->input->post('nama_ruangan'),
            'lantai' => $this->input->post('lantai'),
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->Ruangan_model->insert($data);
        redirect('ruangan');
        
    }

        public function hapus($id)
    {
        $this->Ruangan_model->delete($id);
        redirect('ruangan');
    }

        public function edit($id)
    {
        $data['ruangan'] = $this->Ruangan_model->get_by_id($id);
        $this->load->view('ruangan/edit', $data);
    }

        public function update()
    {
         $id =$this->input->post('id');  
         $data = [
            'nama_ruangan' => $this->input->post('nama_ruangan'),
            'lantai' => $this->input->post('lantai'),
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->Ruangan_model->update($id, $data);
        redirect('ruangan');
    }
    
}