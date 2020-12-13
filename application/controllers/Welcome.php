<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
function __construct(){
	parent::__construct();
}

	public function index()
	{
		$this->load->view('login');
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$sebagai = $this->input->post('sebagai');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		if($sebagai=="admin") {
			$data = $this->M_perpus->edit_data($where,'admin');
			$d = $this->M_perpus->edit_data($where,'admin')->row();
			$cek = $data->num_rows();

			if ($cek > 0) {
				$session = array('id' => $d->id_admin,'nama' => $d->nama_admin,'status' =>'login');
				$this->session->set_userdata($session);
				redirect(base_url().'admin');
			}else{
				$this->session->set_flashdata('alert','Login Gagal! Username atau Password Salah');
				redirect(base_url().'welcome?pesan=belumlogin');
			}
		}else if($sebagai=="anggota"){
			$data = $this->M_perpus->edit_data($where,'anggota');
			$d = $this->M_perpus->edit_data($where,'anggota')->row();
			$cek = $data->num_rows();

			if ($cek > 0) {
				$session = array('id' => $d->id_anggota,'nama' => $d->nama_anggota,'status' =>'anggota_login');
				$this->session->set_userdata($session);
				redirect(base_url().'member');
			}else{
				$this->session->set_flashdata('alert','Login Gagal! Username atau Password Salah');
				redirect(base_url().'welcome?pesan=belumlogin');
			}
		}else{
			$this->session->set_flashdata('alert','Anda Belum mengisi username atau password');
			$this->load->view('login');
		}
	}
}