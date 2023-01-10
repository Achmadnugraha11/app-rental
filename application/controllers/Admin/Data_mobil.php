<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_mobil extends CI_Controller {

	public function index()
	{
      $data['mobil'] = $this->Rental_model->get_data('mobil')->result();
      $data['type'] = $this->Rental_model->get_data('type')->result();

		$data['title'] = 'Data Mobil';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
      $this->load->view('templates_admin/topbar');
		$this->load->view('admin/data_mobil', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_mobil()
	{
		$data['type'] = $this->Rental_model->get_data('type')->result();
		$data['title'] = 'Tambah Mobil';

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
      $this->load->view('templates_admin/topbar');
		$this->load->view('admin/form_tambah_mobil', $data);
		$this->load->view('templates_admin/footer');	
	
	}
	 
	public function tambah_mobil_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambah_mobil();
		} else {
			$kode_type 		= $this->input->post('kode_type');
			$merek 			= $this->input->post('merek');
			$no_plat 		= $this->input->post('no_plat');
			$warna 			= $this->input->post('warna');
			$status 			= $this->input->post('status');
			$harga 			= $this->input->post('harga');
			$denda 			= $this->input->post('denda');
			$supir 			= $this->input->post('supir');
			$tahun 			= $this->input->post('tahun');
			$gambar 			= $_FILES['gambar']['name'];
			if($gambar =''){}else{
				$config ['upload_path'] 	= './assets/upload';
				$config ['allowed_types']	= 'jpg|jpeg|png|tiff';	

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('gambar')) {
					echo "gambar mobil gagal diupload";
				}else {
					$gambar = $this->upload->data('file_name');
				}
			}

			$data = array(
				'kode_type' 	=> $kode_type,
				'merek' 			=> $merek,
				'no_plat' 		=> $no_plat,
				'tahun' 			=> $tahun,
				'warna' 			=> $warna,
				'status' 		=> $status,
				'harga' 			=> $harga,
				'denda' 			=> $denda,
				'supir' 			=> $supir,
				'gambar' 		=> $gambar
			);

			$this->Rental_model->insert_data($data, 'mobil');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data Berhasil Ditambahkan
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		 </div>');
			redirect('admin/data_mobil');
		}
	}

	public function update_mobil($id){
		$where = array('id_mobil' => $id);
		$data['mobil'] = $this->db->query("SELECT * FROM mobil mb, type tp WHERE mb.kode_type
			= tp.kode_type AND mb.id_mobil = '$id'") ->result();
		$data['type'] = $this->Rental_model->get_data('type')->result();
		$data['title']= "Update Mobil";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
      $this->load->view('templates_admin/topbar');
		$this->load->view('admin/form_update_mobil', $data);
		$this->load->view('templates_admin/footer');	
	}

	public function update_mobil_aksi(){
		$this->_rules();

		if($this->form_validation->run() == FALSE)
		{
			$this->update_mobil;
		}else {
			$id				= $this->input->post('id_mobil');
			$kode_type		= $this->input->post('kode_type');
			$merek 			= $this->input->post('merek');
			$no_plat 		= $this->input->post('no_plat');
			$warna 			= $this->input->post('warna');
			$status 			= $this->input->post('status');
			$harga 			= $this->input->post('harga');
			$denda 			= $this->input->post('denda');
			$supir 			= $this->input->post('supir');
			$tahun 			= $this->input->post('tahun');
			$gambar 			= $_FILES['gambar']['name'];
			if($gambar){
				$config ['upload_path'] 	= './assets/upload';
				$config ['allowed_types']	= 'jpg|jpeg|png|tiff';	

				$this->load->library('upload', $config);

				if($this->upload->do_upload('gambar')) {
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar', $gambar);
				}else {
					echo $this->upload->display_errors();
				}
			}

			$data = array(
				'kode_type' 	=> $kode_type,
				'merek' 			=> $merek,
				'no_plat' 		=> $no_plat,
				'tahun' 			=> $tahun,
				'warna' 			=> $warna,
				'status' 		=> $status,
				'harga' 			=> $harga,
				'denda' 			=> $denda,
				'supir' 			=> $supir
			);

			$where = array(
				'id_mobil' => $id,
			);

			$this->Rental_model->update_data('mobil', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data Berhasil DiUpdate
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		 </div>');
			redirect('admin/data_mobil');
		}
	
	}

	public function _rules() {
		$this->form_validation->set_rules('kode_type', 'Kode Type', 'required');
		$this->form_validation->set_rules('merek', 'Merek', 'required');
		$this->form_validation->set_rules('no_plat', 'No Plat', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
		$this->form_validation->set_rules('warna', 'Warna', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');
		$this->form_validation->set_rules('denda', 'denda', 'required');
		$this->form_validation->set_rules('supir', 'supir', 'required');
	}

	public function detail_mobil($id)
	{
		$data['detail'] = $this->Rental_model->ambil_id_mobil($id);
		$data['title']= "Detail Mobil";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
      $this->load->view('templates_admin/topbar');
		$this->load->view('admin/detail_mobil', $data);
		$this->load->view('templates_admin/footer');
	}

	public function delete_mobil($id){
		$where = array('id_mobil' => $id);
		$this->Rental_model->delete_data($where, 'mobil');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Berhasil Di Hapus
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		 </div>');
			redirect('admin/data_mobil');	
	}

}
