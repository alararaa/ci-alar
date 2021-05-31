<?php 

class Keanggotaan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->library('form_validation');
	}

	function index(){
		$data['judul'] ='Halaman Keanggotaan';
		$this->load->view('templates/header',$data);
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('keanggotaan/index',$data);
		$this->load->view('templates/footer');
	}

   function tambah(){
		$data['judul'] ='Form Tambah Data Anggota';

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('pekerjaan','Pekerjaan','required');

		if($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('keanggotaan/input');
			$this->load->view('templates/footer');
		}else{
			$nama = $this->input->post('nama', true);
			$alamat = $this->input->post('alamat', true);
			$pekerjaan = $this->input->post('pekerjaan',true);

			$data = array(
				'nama' => $nama,
				'alamat' => $alamat,
				'pekerjaan' => $pekerjaan
				);
			$this->m_data->input_data($data,'user');
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('keanggotaan');
		}
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		$this->session->set_flashdata('flash', 'dihapus');
		redirect('keanggotaan');
	}

	function edit($id){
		$data['judul'] ='Halaman Edit Data';
		$this->load->view('templates/header',$data);
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('keanggotaan/edit',$data);
		$this->load->view('templates/footer');
	}

	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');
	
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->m_data->update_data($where,$data,'user');
		$this->session->set_flashdata('flash', 'diedit');
		redirect('keanggotaan');
	}
}