<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
    {
		parent::__construct();
		$this->load->model('M_Welcome');
    }

	public function index()
	{
		$panjang = $this->input->post('panjang');
		$lebar = $this->input->post('lebar');
		$data = array(
			'panjang' => $panjang,
			'lebar' => $lebar,
			'luas' => $this->M_Welcome->luas($panjang,$lebar)
		);
		$this->load->view('welcome_message', $data);
	}
}
