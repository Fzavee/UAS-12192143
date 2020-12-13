<?php
defined('BASEPATH') or exit ('NO Direct Script Access Allowed');

class Member extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		if($this->session->userdata('status') != "anggota_login"){
			$alert=$this->session->set_flashdata('alert', 'Anda belum Login');
			redirect(base_url().'welcome?pesan=belumlogin');
		}
	}

	function index(){
		$data['anggota'] = $this->M_perpus->get_data('anggota')->result();
		$data['buku'] = $this->M_perpus->get_data('buku')->result();
		$data['header'] = 'Katalog Buku';
		$this->load->view('daftarbuku', $data);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'welcome?pesan=logout');
	}
}