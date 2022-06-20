<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$variabel['nim'] = '123110016';
		$variabel['nama'] = 'Galih Bayu';

		$var['prodi'] = $variabel;

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
