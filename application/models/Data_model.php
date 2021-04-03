<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {

	public function get_motor()
	{
		return $this->db->get_where('tb_masuk', ['kendaraan_id' => 1])->result_array();
	}

	public function get_mobil()
	{
		return $this->db->get_where('tb_masuk', ['kendaraan_id' => 2])->result_array();
	}


}

/* End of file Data_model.php */
/* Location: ./application/models/Data_model.php */