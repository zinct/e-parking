<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserData_model extends CI_Model {

	public function get_data()
	{
		$username = $this->session->userdata('username');
		$this->db->select('tb_user.*,tb_role.role_name');
		$this->db->from('tb_user');
		$this->db->join('tb_role', 'tb_user.role_id = tb_role.id');
		$this->db->where('username', $username);
		return $this->db->get()->row_array();
	}

}

/* End of file UserData_model.php */
/* Location: ./application/models/UserData_model.php */