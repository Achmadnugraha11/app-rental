<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{

		$data['title'] = 'Dashboard';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates_admin/footer');
	}
}
