<?php

class Model_mhs extends CI_Model {

	var $table = 'tb_mhs';
	var $id = 'id_mhs';

	function getAll() { //ambil semua data
		$this->db->from($this->table); //4 data

		$result = $this->db->get(); //tampung data di variabel

		return $result->result_array(); //kembalikan data k controller, array banyak
	}
	function getId($id = null) { //ambil berdasarkan id
		$this->db->from($this->table);
		$this->db->where($this->id, $id); //cek variabel $id

		$result = $this->db->get();

		return $result->row_array(); //array 1 baris saja
	}
}