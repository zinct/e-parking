<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}

	public function index()
	{
		is_loggin_auth();

		$this->data['title'] = 'Login';

		$this->form_validation->set_rules('username', 'username', 'trim|required|alpha_dash');
		$this->form_validation->set_rules('password', 'password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('Templates/header', $this->data);
			$this->load->view('Auth/index');
			$this->load->view('Templates/js/sweetalert/message');
			$this->load->view('Templates/footer');

		} else {

			$this->Auth_model->login();

		}
	}

	public function logout()
	{
		session_destroy();

		// Message
		$this->session->set_flashdata('success', 'Anda Telah Logout');
		redirect(BASE_URL('Auth/index'),'refresh');
	}

	public function forbidden()
	{
		$this->data['title'] = '403 Forbidden';

		$this->load->view('Templates/header', $this->data);
		$this->load->view('Auth/forbidden');
		$this->load->view('Templates/footer');

	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */