<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function create_petugas()
	{
		if (isset($_POST['tombol-tambah'])) {
			
			$nama_petugas = $this->input->post('nama_user', TRUE);
			$username = $this->input->post('username', TRUE);
			$password = $this->input->post('password', TRUE);

			$data = [
				'nama_user' => $nama_petugas,
				'username' => $username,
				'password' => password_hash($password, PASSWORD_DEFAULT),
				'role_id' => 2
			];

			$this->db->insert('tb_user', $data);

			// Message
			$this->session->set_flashdata('success', 'Data Petugas Berhasil Di Tambahkan');
			redirect(BASE_URL('Admin/user'),'refresh');

		}
	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */