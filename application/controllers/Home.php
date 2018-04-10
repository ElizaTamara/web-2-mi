<?php 
defined('BASEPATH') OR exit ('No directed script access allowed');

class Home extends CI_Controller {

	public function index ()
	{
		$data['judul']= 'barang';
		$data['isi']= 'contoh isi data';
		$data['page']= 'v_home';
		$this->load->view('v_homepage', $data);
	}
}