<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_loggin();
		$this->load->model('Admin_model');
		$this->data['user_data'] = $this->UserData_model->get_data();
	}

	public function index()
	{
		$this->data['title'] = 'Dashboard';
		$this->data['petugas'] = $this->db->get_where('tb_user', ['role_id' => 2])->result_array();
		$this->data['data_petugas'] = $this->db->get_where('tb_user', ['role_id' => 2])->num_rows();
		$this->data['data_masuk'] = $this->db->get('tb_masuk')->num_rows();
		$this->data['data_motor'] = $this->db->get_where('tb_masuk', ['kendaraan_id' => 1])->num_rows();
		$this->data['data_mobil'] = $this->db->get_where('tb_masuk', ['kendaraan_id' => 2])->num_rows();
		
		$this->load->view('Templates/header', $this->data);
		$this->load->view('Templates/sidebar');
		$this->load->view('Templates/topbar');
		$this->load->view('Admin/index');
		$this->load->view('Templates/js/sweetalert/message');
		$this->load->view('Templates/copyright');
		$this->load->view('Templates/footer');
	}

	public function user()
	{
		$this->data['title'] = 'Kelola Petugas';
		$this->data['data_user'] = $this->db->get_where('tb_user', ['role_id' => 2])->result_array();

		$this->form_validation->set_rules('password', 'password', 'trim|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password', 'confirm password', 'trim|matches[password]');

		if ($this->form_validation->run() == FALSE) {

			$this->session->set_flashdata('danger', form_error('password'));

			$this->load->view('Templates/header', $this->data);
			$this->load->view('Templates/sidebar');
			$this->load->view('Templates/topbar');
			$this->load->view('Admin/user');
			$this->load->view('Templates/js/sweetalert/message');
			$this->load->view('Templates/copyright');
			$this->load->view('Templates/footer');

		} else {

			$this->Admin_model->create_petugas();

		}

	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */