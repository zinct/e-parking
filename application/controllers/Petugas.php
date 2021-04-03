<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_loggin();
		$this->load->model('UserData_model');
		$this->load->model('Petugas_model');
		$this->data['user_data'] = $this->UserData_model->get_data();
	}

	// List all your items
	public function index()
	{
		$this->data['title'] = 'Info Parkiran Masuk';
		$this->data['data_masuk'] = $this->Petugas_model->get_all_masuk();

		$this->load->view('Templates/header', $this->data);
		$this->load->view('Templates/sidebar');
		$this->load->view('Templates/topbar');
		$this->load->view('Petugas/index');
		$this->load->view('Templates/copyright');
		$this->load->view('Templates/footer');
	}

	public function input()
	{
		$this->data['title'] = 'Input Parkir';
		$this->data['data_jenis'] = $this->db->get('tb_kendaraan')->result_array();

		$this->load->view('Templates/header', $this->data);
		$this->load->view('Templates/sidebar');
		$this->load->view('Templates/topbar');
		$this->load->view('Petugas/input');
		$this->load->view('Templates/copyright');
		$this->load->view('Templates/js/input_parkir');
		$this->load->view('Templates/footer');

		$this->Petugas_model->input_data();

	}

	public function print()
	{


	    $this->load->library('pdf');

	    $customPaper = array(0,0,160,155);
		$this->pdf->set_paper($customPaper);

		$id = $this->uri->segment(3);

		$data['masuk'] = $this->db->query("SELECT tb_masuk.*, tb_kendaraan.* FROM tb_masuk JOIN tb_kendaraan ON tb_masuk.kendaraan_id = tb_kendaraan.kendaraan_id")->row_array();

	    $this->pdf->filename = "laporan-petanikode.pdf";
	    $this->pdf->load_view('pdf/struk.php', $data);
			
	}

}

/* End of file Petugas.php */
/* Location: ./application/controllers/Petugas.php */