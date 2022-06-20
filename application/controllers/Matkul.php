<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul extends CI_Controller {

	public function index()
	{
		$this->load->view('matkul/v_index');
	}
	public function tambah()
	{
		$this->load->view('matkul/v_tambah');
	}
	public function ubah()
	{
		$this->load->view('matkul/v_ubah');
	}
	public function hapus()
	{
		$this->load->view('matkul/v_hapus');
	}
}
