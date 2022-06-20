<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function index()
	{
		$this->load->view('dosen/v_index');
	}
	public function tambah()
	{
		$this->load->view('dosen/v_tambah');
	}
	public function ubah()
	{
		$this->load->view('dosen/v_ubah');
	}
	public function hapus()
	{
		$this->load->view('dosen/v_hapus');
	}
}
