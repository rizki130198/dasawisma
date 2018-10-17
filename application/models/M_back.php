<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_back extends CI_Model
{
	function getUser()
	{
		$query = $this->db->get('tbl_user');
		return $query->result();
	}
	function delete_user($id)
	{
		$query = $this->db->delete('tbl_user',array(
			'id'=>$id
		));
		if ($query== TRUE) {
			$this->session->set_flashdata('sukses', 'Success Delete User');
			redirect('main/user');
		}else{
			$this->session->set_flashdata('gagal', 'Failed Delete User');
		}
	}
	public function actionAddUser()
	{
		$email = $this->db->get_where('tbl_user', array('email' => $this->input->post('email',TRUE)))->row();
		$username = $this->db->get_where('tbl_user', array('username' => $this->input->post('username',TRUE)))->row();
		if (count($email) > 0 ) {
			$this->session->set_flashdata('gagal', 'Email yang anda masukan sudah terdaftar di website kami.');
		}else{
			if (count($username) > 0) {
				$this->session->set_flashdata('gagal', 'Username yang anda masukan sudah terdaftar di website kami.');
			}else{
				$q = $this->db->insert('tbl_user', array(
					'email' => $this->input->post('email'),
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password')),
					'ulang_password' => $this->input->post('password'),
					'status' => $this->input->post('status')
				));
				if ($q == TRUE) {
					$this->session->set_flashdata('sukses', 'Berhasil tambah user');
				}else{
					$this->session->set_flashdata('gagal', 'Gagal tambah user');
				}
			}
		}
		redirect('main/user');
	}
	function getEditUser($id)
	{
		$query = $this->db->get_where('tbl_user',array('id'=>$id))->result();
		return $query;
	}
	function setEditUser()
	{
		$this->db->update('tbl_user', array(
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'ulang_password' => $this->input->post('password'),
			'status' => $this->input->post('status')
		),array('id' => $this->uri->segment(3)));
	}
}	