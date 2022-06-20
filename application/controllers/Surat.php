<?php
defined('BASEPATH') OR die('No direct script access allowed!');

class Surat extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        redirect_if_level_not('Manager');
        $this->load->model('Surat_model', 'surat');
    }

    public function index()
    {
        $data['surat'] = $this->surat->get_all();
        return $this->template->load('template', 'surat/index', $data);
    }
	public function create()
    {
        $this->load->model('Surat_model', 'divisi');
        $data['surat'] = $this->surat->get_all();
        return $this->template->load('template', 'surat/create', $data);
    }
	public function generate_qr()
	{	
		$id_user = $this->uri->segment(3);
		$surat = $this->surat->find($id_user);

		$this->load->library('ciqrcode');

		$config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/qr_code/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)

        $this->ciqrcode->initialize($config);
 
        $image_name=$surat->id.'.png'; //buat name dari qr code sesuai dengan nim
		
		$url = 'https://digisign.pelitabangsa.ac.id/surat/showdatasurat/'. strval($surat->id);
		var_dump($url);
        $params['data'] = $url  ; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params);

		$data['qrcode'] = $image_name;
		
		$result = $this->surat->update_data($id_user, $data);
        if ($result) {
            $response = [
                'status' => 'success',
                'message' => 'Data Surat berhasil diubah!'
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Data Surat gagal diubah!'
            ];
        }
        
        $this->session->set_flashdata('response', $response);
        redirect('surat');

	}

    public function store()
    {
        $post = $this->input->post();
        $data = [
            'no_surat' => $post['no_surat'],
            'tanggal_surat' => $post['tanggal_surat'],
            'penandatangan_surat' => $post['penandatangan_surat'],
            'jabatan_penandatangan' => $post['jabatan_penandatangan'],
            'perihal_surat' => $post['perihal_surat'],
            'unit_kerja' => $post['unit_kerja'],
        ];
		

        $result = $this->surat->insert_data($data);
		
        if ($result) {
            $response = [
                'status' => 'success',
                'message' => 'Data Surat telah ditambahkan!'
            ];
            $redirect = 'surat/';
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Data Surat gagal ditambahkan'
            ];
            $redirect = 'surat/create';
        }
        
        $this->session->set_flashdata('response', $response);
        redirect($redirect);
    }

    public function edit()
    {
        $id_user = $this->uri->segment(3);
        $data['surat'] = $this->surat->find($id_user);
        return $this->template->load('template', 'surat/edit', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = [
            'no_surat' => $post['no_surat'],
            'tanggal_surat' => $post['tanggal_surat'],
            'penandatangan_surat' => $post['penandatangan_surat'],
            'jabatan_penandatangan' => $post['jabatan_penandatangan'],
            'perihal_surat' => $post['perihal_surat'],
            'unit_kerja' => $post['unit_kerja'],
        ];


        $result = $this->surat->update_data($post['id'], $data);
        if ($result) {
            $response = [
                'status' => 'success',
                'message' => 'Data Surat berhasil diubah!'
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Data Surat gagal diubah!'
            ];
        }
        
        $this->session->set_flashdata('response', $response);
        redirect('surat');
    }

    public function destroy()
    {
        $id_user = $this->uri->segment(3);
        $result = $this->surat->delete_data($id_user);
        if ($result) {
            $response = [
                'status' => 'success',
                'message' => 'Data surat berhasil dihapus!'
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Data surat gagal dihapus!'
            ];
        }
        
        header('Content-Type: application/json');
        echo $response;
    }
}



/* End of File: d:\Ampps\www\project\absen-pegawai\application\controllers\Karyawan.php */
