<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rental extends CI_Controller {
   public function tambah_rental($id) 
   {
      $data['detail'] = $this->Rental_model->ambil_id_mobil($id);

		$data['logo'] = 'MB Rent Car';
		$data['title'] = 'Tambah Rental';
		$this->load->view('templates_customer/header', $data);
		$this->load->view('customer/tambah_rental', $data);
		$this->load->view('templates_customer/footer');
		
   }

   public function tambah_rental_aksi()
   {
      // $id_customer 		= $this->session->userdata('id_customer');
      $nama 				= $this->session->userdata('nama');
      $id_mobil 			= $this->input->post('id_mobil');
      $tanggal_rental 	= $this->input->post('tanggal_rental');
      $tanggal_kembali 	= $this->input->post('tanggal_kembali');
      $harga 				= $this->input->post('harga');
      $denda 				= $this->input->post('denda');

		$data = array(
			'nama' 						=> $nama,
			// 'id_customer' 				=> $id_customer,
			'id_mobil' 					=> $id_mobil,
			'tanggal_rental' 			=> $tanggal_rental,
			'tanggal_kembali'			=> $tanggal_kembali,
			'harga' 						=> $harga,
			'denda' 						=> $denda,
			'tanggal_pengembalian' 	=> '-',
			'status_rental' 			=>'Belum selesai',
			'status_pengembalian' 	=> 'Belum kembali',
		);

		$this->Rental_model->insert_data($data, 'transaksi');

		$status = array(
			'status' => '0'
		);

		$data = array(
			'status' => '1'
		);

		$id = array(
			'id_mobil' => $id_mobil
		);

		$this->Rental_model->update_data('mobil',$status,$id,$data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Transaksi Berhasil, silahkan cekout
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		   </div>');
		
			redirect('dashboard/data_mobil');
   }
}
