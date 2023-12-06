<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index(){
		if(empty($this->session->userdata('userName'))){
			redirect('adminpanel');
		}
		$data['kategori']=$this->Madmin->get_all_data('tbl_produk')->result();
	
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/menu');
		$this->load->view('admin/kategori/tampil', $data);
		$this->load->view('admin/layout/footer');
	}

	public function add(){
		if(empty($this->session->userdata('userName'))){
			redirect('adminpanel');
		}else{

		$this->form_validation->set_rules('namaKat=', 'Category', 'trim|required');
		$data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
			if ($this->form_validation->run() == false) {
			$this->load->view('admin/layout/header');
			$this->load->view('admin/layout/menu');
			$this->load->view('admin/kategori/formAdd', $data);
			$this->load->view('admin/layout/footer');
			}else{
				$this->save();
			}
		}
	}

	public function add_Produk(){
		if(empty($this->session->userdata('userName'))){
			redirect('adminpanel');
		}else{
		$idProduk = $this->input->post('idProduk');
        $idKategori = $this->input->post('idKat');
        $namaProduk = $this->input->post('namaProduk');
        $hargaProduk = $this->input->post('hargaProduk');
        $jumlahProduk = $this->input->post('jumlahProduk');
        $beratProduk = $this->input->post('beratProduk');
		$deskripsi = $this->input->post('deskripsi');
		$config['upload_path'] = './assets/foto_produk/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$this->load->library('upload', $config);
		if($this->upload->do_upload('gambar')){
			$data_file = $this->upload->data();
			$data_insert=array('idKat' => $idKategori,
                                'namaProduk' => $namaProduk,
								
                                'harga' => $hargaProduk,
                                'stok' => $jumlahProduk,
								'berat' => $beratProduk,
                                'foto' =>  $data_file['file_name'],
								'deskripsiProduk' => $deskripsi);
			$this->Madmin->insert('tbl_produk', $data_insert);
			redirect('kategori/add');
		} else {
			redirect('adminpanel');
		}
	}
	}

	public function save(){
		if(empty($this->session->userdata('userName'))){
			redirect('adminpanel');
		}
		$namaKat = $this->input->post('namaKat');
		$cek = $this->Madmin->cek_kategori($namaKat)->row_array();
		if ($cek['namaKat'] == $namaKat) {
			echo "<script>alert('Category has already exist!');</script>";
			$this->index();
		} else{
			$dataInput=array('namaKat'=>$namaKat);
			$this->Madmin->insert('tbl_kategori', $dataInput);
			redirect('kategori');
		}
	}

	public function get_by_id($id){
		if(empty($this->session->userdata('userName')))
		{
			redirect('adminpanel');
		}
		$dataWhere = array('idProduk'=>$id);
		$data['produk'] = $this->Madmin->get_by_id('tbl_produk', $dataWhere)->row_object();
		$idKat=$data['produk']->idKat;
		$dataWhereKat = array('idKat'=>$idKat);
		$data['kategori'] = $this->Madmin->get_by_id('tbl_kategori', $dataWhereKat)->row_object();

		// print_r($data);
		// die();
		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/menu');
		$this->load->view('admin/kategori/formEdit', $data);
		$this->load->view('admin/layout/footer');	
	}
	
	public function validasi_edit()
	{
		$this->form_validation->set_rules('namaKat', 'Category', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/layout/header');
			$this->load->view('admin/layout/menu');
			$this->load->view('admin/kategori/formAdd');
			$this->load->view('admin/layout/footer');
		} else {
			$this->edit();
		}
	}

	public function edit(){
		if(empty($this->session->userdata('userName'))){
			redirect('adminpanel');
		}
		$id = $this->input->post('id');	
		$namaKategori = $this->input->post('namaKat');
		$cek = $this->Madmin->cek_kategori($namaKategori)->row_array();
		if ($cek['namaKat'] == $namaKategori) {
			echo "<script>alert('Category has already exist!');</script>";
			$this->index();
		}else{	
			$dataUpdate = array('namaKat'=>$namaKategori);
			$this->Madmin->update('tbl_kategori', $dataUpdate, 'idkat', $id);
			redirect('kategori');
		}
	}

	 public function edit_produk(){
		if(empty($this->session->userdata('userName'))){
			redirect('adminpanel');
		}
		$id = $this->input->post('idProduk');	
		$idKategori = $this->input->post('kategori');
        $namaProduk = $this->input->post('namaProduk');
        $hargaProduk = $this->input->post('hargaProduk');
        $jumlahProduk = $this->input->post('jumlahProduk');
        $beratProduk = $this->input->post('beratProduk');
		$deskripsi = $this->input->post('deskripsi');
		$config['upload_path'] = './assets/foto_produk/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$this->load->library('upload', $config);
		if($this->upload->do_upload('gambar')){
			$data_file = $this->upload->data();
			$dataUpdate=array('idKat' => $idKategori,
                                'namaProduk' => $namaProduk,
                                'idToko' => $idToko,
                                'harga' => $hargaProduk,
                                'stok' => $jumlahProduk,
                                'berat' => $beratProduk,
                                'foto' =>  $data_file['file_name'],
                                'deskripsiProduk' => $deskripsi);
			$this->Madmin->update('tbl_produk', $dataUpdate, 'idProduk', $id);
			redirect('kategori/add');
		} else {
			redirect('adminpanel');
		}
		
	}

	public function delete($id){
		if(empty($this->session->userdata('userName'))){
			redirect('adminpanel');
		}
		$dataWhere = array('idProduk'=>$id);
		$data['produk'] = $this->Madmin->get_by_id('tbl_produk', $dataWhere)->row_object();
		$gambar=$data['produk']->foto;
		unlink("assets/foto_produk/".$gambar);
		$this->Madmin->delete('tbl_produk', 'idProduk', $id);
		redirect('kategori');
	}

	
}
