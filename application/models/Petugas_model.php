<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_model extends CI_Model {

	public function get_all_masuk()
	{
		$this->db->select('tb_masuk.*');
		$this->db->select('tb_kendaraan.*');
		$this->db->from('tb_masuk');
		$this->db->join('tb_kendaraan', 'tb_masuk.kendaraan_id = tb_kendaraan.kendaraan_id');

		return $this->db->get()->result_array();
	}

	function get_kode()
	{
        $result = $this->db->query("SELECT id FROM tb_masuk ORDER BY 1 DESC");

        if ($result->num_rows() > 0) {
        	$kode = $result->row_array(); 
        	$kode = ($kode['id'] + 1);
        } else {
        	$kode = 1;
        }
        
        return $kode;
    }


	public function input_data()
	{
		if (isset($_POST['tombol-input'])) {

			$plat_daerah = $this->input->post('plat-daerah');
			$plat_kode =  $this->input->post('plat-kode');
			$plat_alpha =  $this->input->post('plat-alpha');

			$plat = strtoupper( $plat_daerah . ' ' . $plat_kode . ' ' . $plat_alpha );
			$kendaraan_id = $this->input->post('jenis_kendaraan');
			$nama_kendaraan = $this->input->post('nama_kendaraan');
			$nama_petugas = $this->input->post('nama_petugas');
			$tarif = $this->input->post('tarif');
			$kode_parkir = 'BN00' . $this->get_kode();

			$data = [
				'nama_petugas' => htmlspecialchars($nama_petugas),
				'kode_parkir' => htmlspecialchars($kode_parkir),
				'kendaraan_id' => htmlspecialchars($kendaraan_id),
				'nama_kendaraan' => htmlspecialchars($nama_kendaraan),
				'plat' => htmlspecialchars($plat),
				'waktu_masuk' => date('H:i:s'),
				'tarif' => htmlspecialchars($tarif),

			];

			$this->db->insert('tb_masuk', $data);

			// Message
			$this->session->set_flashdata('success', 'Data Berhasil Di Tambahkan');
			redirect(BASE_URL('Petugas/index'),'refresh');


		}		
	}

	
}

/* End of file Petugas_model.php */
/* Location: ./application/models/Petugas_model.php */