<?php
class Model_Admin extends CI_Model
{
	function tampil($table)
	{
		return $this->db->get($table);
	}

	function hapus($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function hapus_all($table)
	{
		$this->db->delete($table);
	}
}