<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{

		$data['title'] = 'Dashboard';
		$this->load->view('templates_owner/header', $data);
		$this->load->view('templates_owner/sidebar');
		$this->load->view('templates_owner/topbar');
		$this->load->view('owner/dashboard', $data);
		$this->load->view('templates_owner/footer');
	}
}
