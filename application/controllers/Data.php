<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_loggin();
		$this->load->model('UserData_model');
		$this->load->model('Data_model');
		$this->data['user_data'] = $this->UserData_model->get_data();
	}

	public function index()
	{
		$this->data['title'] = 'Data Motor Masuk';
		$this->data['data_motor'] = $this->Data_model->get_motor();

		$this->load->view('Templates/header', $this->data);
		$this->load->view('Templates/sidebar');
		$this->load->view('Templates/topbar');
		$this->load->view('Data/index');
		$this->load->view('Templates/copyright');
		$this->load->view('Templates/footer');
	}

	public function mobil()
	{
		$this->data['title'] = 'Data Mobil Masuk';
		$this->data['data_mobil'] = $this->Data_model->get_mobil();

		$this->load->view('Templates/header', $this->data);
		$this->load->view('Templates/sidebar');
		$this->load->view('Templates/topbar');
		$this->load->view('Data/mobil');
		$this->load->view('Templates/copyright');
		$this->load->view('Templates/footer');
	}
}

/* End of file Data.php */
/* Location: ./application/controllers/Data.php */