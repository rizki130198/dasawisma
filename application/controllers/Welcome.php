<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function login()
	{
		$data['title'] = "Halaman Login - PKK";
		$this->load->view('include/head',$data);
		$this->load->view('front/login');
		$this->load->view('include/footluar');
	}
	public function proses_log()
	{
		try {		
			$this->M_front->proses_log();
		} catch (Exception $e) {
			throw new Exception("Error Processing Request", 1);
		}
	}
	public function error()
	{
		$this->load->view('include/head');
		$this->load->view('404');
		$this->load->view('include/footluar');
	}
}
