<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Main extends CI_Controller
{
	// function __construct()
	// {
	// 	parent::__construct();
	// 	if ($this->session->userdata('id')==null) {
	// 		redirect('welcome/login');
	// 	}
	// }
	public function dashboard()
	{
		$data['title'] = "Halaman Dashboad - PKK";
		$data['menu'] = "Halaman Dashboad";
		$data['rt'] = $this->M_back->getrt();
		$this->load->view('include/head',$data);
		$this->load->view('back/dashboard',$data);
		$this->load->view('include/foot');
	}
	public function user()
	{
		$data['title'] = "Halaman Pengguna - PKK";
		$data['menu'] = "Halaman Pengguna";
		$data['user'] = $this->M_back->getUser();
		$this->load->view('include/head',$data);
		$this->load->view('back/user/user',$data);
		$this->load->view('include/footluar');
	}
	public function caridata()
	{
		$data['title'] = "Halaman Cari Data - PKK";
		$data['menu'] = "Halaman Cari Data";
		$data['data'] = $this->M_back->getData();
		$this->load->view('include/head',$data);
		$this->load->view('back/caridata',$data);
		$this->load->view('include/footluar');
	}	
	public function addUser()
	{
		$data['title'] = "Halaman Tambah Pengguna - PKK";
		$data['menu'] = "Halaman Tambah Pengguna";
		$this->load->view('include/head');
		$this->load->view('back/user/add_user');
		$this->load->view('include/footluar');
	}
	public function edituser()
	{
		$data['title'] = "Halaman Edit Pengguna - PKK";
		$data['menu'] = "Halaman Edit Pengguna";
		$id = $this->uri->segment(3);
	   	$data['edituser'] = $this->M_back->getEditUser($id);
		$this->load->view('include/head',$data);
		$this->load->view('back/user/edit_user',$data);
		$this->load->view('include/footluar');
	}
	public function actAddUser()
	{
	   	$this->M_back->actionAddUser();
   	}
   	public function actEditUser()
	{   	
	   	$val = $this->M_back->setEditUser();
	   	if ($val =="") {
			$this->session->set_flashdata('sukses', 'Data berhasil di ubah');
		}else{
			$this->session->set_flashdata('gagal', 'Data gagal di ubah');
		}
   		redirect(site_url('main/user'));
	}
	public function deleteUser()
	{
	   	$id = $this->uri->segment(3);
	   	$this->M_back->delete_user($id);
	}
	public function chartline()
	{
	   	$data['line'] = $this->M_back->getchart();
	   	$this->load->view('back/chartline',$data);
	   	
   	}
   	public function chartcolum()
	{
	   	$data['colom'] = $this->M_back->getchart();
	   	$this->load->view('back/chartcolom',$data);
	   	
   	}
   	public function chartpyramid()
	{
	   	$this->load->view('back/chartpryramid');
	   	
   	}
   	public function chartradar()
	{
	   	$this->load->view('back/chartradar');
	   	
   	}
	public function logout()
	{
		$sess = $this->session->sess_destroy();
		redirect('welcome/login');
	}
}