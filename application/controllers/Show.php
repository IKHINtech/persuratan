<?php
defined('BASEPATH') OR die('No direct script access allowed!');

class Show extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Surat_model', 'surat');
    }

	public function showdatasurat()
    {
        $id_user = $this->uri->segment(3);
        $data['surat'] = $this->surat->find($id_user);
        return $this->load->view('surat/detail', $data);
    }

}

// http://localhost/persuratan/show/showdatasurat/453e9767-f079-11ec-93c9-00155d27


/* End of File: d:\Ampps\www\project\absen-pegawai\application\controllers\Karyawan.php */
