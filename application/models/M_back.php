<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_back extends CI_Model
{
	function getUser()
	{
		$query = $this->db->get('tbl_user');
		return $query->result();
	}
	function getData()
	{
		$query = $this->db->get('data');
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
	public function getchart(){
		$awal = date('Y-m-d H:i:s',strtotime($this->input->post('awal')));
		$akhir = date('Y-m-d H:i:s',strtotime($this->input->post('akhir')));
		return $query = $this->db->query('SELECT * FROM data WHERE tanggal between "'.$awal.'" AND "'.$akhir.'" Group By rw'); 

	}
	public function getrt()
	{
		$query = $this->db->query('SELECT * FROM data group By rw');
		return $query->result();
	}
	public function getKel()
	{
		$query = $this->db->query('SELECT * FROM data group By kelurahan');
		return $query->result();
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
	public function actionCariData($keyword)
	{
		$this->db->select('*');
		$this->db->from('data');
		if(!empty($keyword)) {
			$keyword1 = str_replace("%20", " ", $keyword);
			$this->db->like('jenis_kelamin', $keyword1);
			$this->db->or_like('rt', $keyword1);
			$this->db->or_like('rw', $keyword1);
			$this->db->or_like('kelurahan', $keyword1);
			$this->db->or_like('kecamatan', $keyword1);
			$this->db->or_like('kota', $keyword1);
			$this->db->or_like('tanggal_lahir', $keyword1);
			$this->db->or_like('status_perkawinan', $keyword1);
			$this->db->or_like('pendapatan', $keyword1);
			$this->db->or_like('kartu_lansia', $keyword1);
			$this->db->or_like('kondisi_bangunan', $keyword1);
			$this->db->or_like('putus_sekolah', $keyword1);
			$this->db->or_like('sumur_air_tanah', $keyword1);
			$this->db->or_like('pdam', $keyword1);
			$this->db->or_like('riwayat_medis', $keyword1);
			$this->db->or_like('kondisi_bangunan', $keyword1);
		}
		$this->db->like('jenis_kelamin', $keyword1);
		return $this->db->get()->result();
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