<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpanel extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->library('form_validation');
	}


	public function index(){

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == false) {
			$this->load->view('admin/login');
		}  else {
			$this->login();
		}
	}

	public function dashboard(){
		if(empty($this->session->userdata('userName'))){
			redirect('adminpanel');
		}
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/menu');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/layout/footer');
	}

	public function login(){

		$this->load->model('Madmin');
		$u= $this->input->post('username');
		$p= md5($this->input->post('password'));
		
		$cek = $this->Madmin->cek_login($u, $p)->num_rows();

		if($cek==1){ 
			
			$data_session = array(
				'userName' => $u,
				'status' => 'login'
			);
			$this->session->set_userdata($data_session);
			redirect('adminpanel/dashboard');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please check your Username or password!</div>');
			redirect('adminpanel');
		}
	}

	public function logout(){

		$this->session->unset_userdata('username');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
		redirect('adminpanel');
	}

}
