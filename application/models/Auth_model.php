<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function login()
	{
		$username = htmlspecialchars($this->input->post('username', true));
		$password = htmlspecialchars($this->input->post('password', true));

		$result = $this->db->get_where('tb_user', ['username' => $username])->num_rows();

		if ($result > 0) {
			
			$data['user'] = $this->db->get_where('tb_user', ['username' => $username])->row_array();
			$pass = $data['user']['password'];
			$role = $data['user']['role_id'];

			if (password_verify($password, $pass)) {				

				$data = array(
					'username' => $username,
					'role_id' => $role
				);

				// Message
				$this->session->set_flashdata('success', 'Kamu Berhasil Login');

				$this->session->set_userdata($data);

				// Check Level User
				if ($role == 1) {
					redirect(BASE_URL('Admin/index'),'refresh');
				} else if ($role == 2) {
					redirect(BASE_URL('petugas/index'),'refresh');
				}			

			} else {

				// Message
				$this->session->set_flashdata('danger', 'Password Salah');
				redirect(BASE_URL('Auth/index'),'refresh');

			}

		} else {

			// Message
			$this->session->set_flashdata('danger', 'Username Tidak Terdaftar');
			redirect(BASE_URL('Auth/index'),'refresh');

		}
	}

}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */