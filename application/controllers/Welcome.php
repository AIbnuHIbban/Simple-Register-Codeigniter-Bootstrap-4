<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$data['title'] = "Halaman Register";

		$this->load->view('welcome_message',$data);
	}

	public function register(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' => sha1($this->input->post('password')),
			'gender' => $this->input->post('gender'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir')
		);

		$input = $this->M_Welcome->register($data);

		if ($data) {
			redirect('berhasil');
		}else{
			$this->session->set_flashdata('pesan','Maaf Anda Gagal melakukan Pendaftaran');
			redirect(base_url());
		}
	}

	public function berhasil(){
		$this->load->view('berhasil');
	}
}
