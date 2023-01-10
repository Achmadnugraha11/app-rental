<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['mobil'] = $this->Rental_model->get_data('mobil')->result();

		$data['title'] = 'Dashboard';
		$data['logo'] = 'MB Rent Car';
		$this->load->view('templates_customer/header', $data);
		$this->load->view('customer/dashboard', $data);
		$this->load->view('templates_customer/footer');
	}

	public function data_mobil()
	{
		$data['mobil'] = $this->Rental_model->get_data('mobil')->result();

		$data['logo'] = 'MB Rent Car';
		$data['title'] = 'Data Mobil';
		$this->load->view('templates_customer/header', $data);
		$this->load->view('customer/data_mobil');
		$this->load->view('templates_customer/footer');
	}

	public function detail_mobil($id)
	{
		$data['detail'] = $this->Rental_model->ambil_id_mobil($id);

		$data['logo'] = 'MB Rent Car';
		$data['title'] = 'Detail Mobil';
		$this->load->view('templates_customer/header', $data);
		$this->load->view('customer/detail_mobil', $data);
		$this->load->view('templates_customer/footer');
	}

	public function syarat()
	{

		$data['logo'] = 'MB Rent Car';
		$data['title'] = 'Detail Mobil';
		$this->load->view('templates_customer/header', $data);
		$this->load->view('customer/syarat', $data);
		$this->load->view('templates_customer/footer');
	}

}
