<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$this->load->model('model_mhs');	

		$var['mhs'] = $this->model_mhs->getAll();
		 
		$this->load->view('mahasiswa/v_index', $var);
	}
	public function tambah()
	{
		$var['title'] = 'TAMBAH MAHASISWA';
		$this->load->view('mahasiswa/v_tambah', $var);
	}
	public function tambah_aksi()
	{
		$input = $this->input->post();
		print_r($input);
		exit();
	}
	public function ubah()
	{
		$var['title'] = 'UBAH MAHASISWA';
		$this->load->view('mahasiswa/v_tambah', $var);
	}
	public function hapus()
	{
		$this->load->view('mahasiswa/v_hapus');
	}
}
