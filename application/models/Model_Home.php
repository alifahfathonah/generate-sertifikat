<?php
class Model_Home extends CI_Model
{
	public function cariOrang()
	{
		$nim = $this->input->GET('cek', TRUE);
		$data = $this->db->query("SELECT * from peserta where nim=$nim");
		return $data->row();
	}
	
}
