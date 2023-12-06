<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepassword extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index(){
        if(empty($this->session->userdata('userName'))){
			redirect('adminpanel');
		}
		$userName = $this->session->userdata('userName');
		$data['admin'] = $this->db->get_where('tbl_admin', ['userName' => $userName])->row_array();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/menu');
		$this->load->view('admin/changepassword/tampil', $data);
		$this->load->view('admin/layout/footer');

    }

	public function processedit(){
		if(empty($this->session->userdata('userName'))){
			redirect('adminpanel');
		}
		$id = $this->input->post('id');		
		$newPass = md5($this->input->post('newPassword1'));	
		$dataUpdate = array('password'=>$newPass);
		$this->Madmin->update('tbl_admin', $dataUpdate, 'idAdmin', $id);
		redirect('adminpanel');
	}

}