<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_front extends CI_Model
{
	public function proses_log()
	{
		$log = $this->db->get_where('tbl_user',
			array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password'))
				));
		if ($log->num_rows() > 0) {
			$r = $log->row();
			$sessi = array(
				'id' => $r->iduser, 
				'username' => $r->username, 
			);
			$this->session->set_userdata($sessi);
			redirect('main/dashboard');
		}else{
			$this->session->set_flashdata('gagal', 'Tidak dapat login, harap periksa kembali username dan password anda');
			redirect('welcome/login');
		}
	}
}	