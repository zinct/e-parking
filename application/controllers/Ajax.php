<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function index()
	{
		
		$jenis_id = $_POST['jenis_id'];

		$result = $this->db->get_where('tb_kendaraan', ['kendaraan_id' => $jenis_id])->row_array();

		echo json_encode($result);
	}

}

/* End of file Ajax.php */
/* Location: ./application/controllers/Ajax.php */