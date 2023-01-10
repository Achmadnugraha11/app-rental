<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tujuan extends CI_Controller {

	public function index()
	{
      $data['tujuan'] = $this->Rental_model->get_data('tujuan')->result();
      // $data['type'] = $this->Rental_model->get_data('type')->result();

		$data['title'] = 'Data Mobil';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
      $this->load->view('templates_admin/topbar');
		$this->load->view('admin/tujuan', $data);
		$this->load->view('templates_admin/footer');
	}
}