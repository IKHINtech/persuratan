<?php
defined('BASEPATH') OR die('No direct script access allowed!');

class Surat_model extends CI_Model
{
    public function get_all()
    {
        $result = $this->db->get('surat');
        return $result->result();
    }

    public function find($id)
    {
        $this->db->where('id', $id);
        $result = $this->db->get('surat');
        return $result->row();
    }

    public function insert_data($data)
    {
		$this->db->set('id', 'UUID()', FALSE);
        $result = $this->db->insert('surat', $data);
      
        return $result;
    }

    public function update_data($id, $data)
    {
        $this->db->where('id', $id);
        $result = $this->db->update('surat', $data);
        if ($result) {
            $data = $this->find($id);
            return $data;
        } 
        return $result;
    }

    public function delete_data($id)
    {
        $this->db->where('id', $id);
        $result = $this->db->delete('surat');
        return $result;
    }
}


/* End of File: d:\Ampps\www\project\absen-pegawai\application\models\Divisi_model.php */
