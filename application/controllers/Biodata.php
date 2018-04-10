<?php 
defined('BASEPATH') OR exit ('No directed script access allowed');

class Biodata extends CI_Controller {

	public function index ()
	{
		echo "hal rom";
	}

	public function alamat ($alamat= '', $lahir='')
	{
		echo "alamat saya di " .$alamat." lahir di " .$lahir;
	}


	public function saya()
	{
		$data['nama'] = 'eliza tamara';
		$data['alamat'] = 'jembatan kembar';
		$data['prodi'] = 'D3MI';
		$data['Matakuliah'] = 'web II';
		$this->load->view('v_biodata', $data);
	}
}

	

 ?>