<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$var['nim'] = '123110016';
		$var['nama'] = 'Galih Bayu';
		$this->load->view('welcome_message', $var);
	}
	public function kampus()
	{
		$this->load->view('unimuda');
	}
	public function prodi()
	{
		$this->load->view('pti');
	}
}
