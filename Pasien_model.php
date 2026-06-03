<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {

    public function get_all($keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama_pasien', $keyword);
            $this->db->or_like('nik', $keyword);
            $this->db->or_like('status', $keyword);
        }

        return $this->db->order_by('id', 'DESC')->get('pasien')->result();
    }

    public function insert($data)
    {
        return $this->db->insert('pasien', $data);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('pasien', ['id' => $id])->row();
    }

    public function update($id, $data)
    {
        return $this->db->where('id', $id)->update('pasien', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('pasien', ['id' => $id]);
    }
}