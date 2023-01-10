<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function index()
	{
      $dari = $this->input->post('dari');
      $sampai = $this->input->post('sampai');
      $this->_rules();

      if($this->form_validation->run() == FALSE) {
         $data['title'] = 'Laporan';
         $this->load->view('templates_admin/header', $data);
         $this->load->view('templates_admin/sidebar');
         $this->load->view('templates_admin/topbar');
         $this->load->view('admin/filter_laporan', $data);
         $this->load->view('templates_admin/footer');
      }else{
         $data['laporan'] = $this->db->query("SELECT * FROM transaksi
            tr, mobil mb, customer cs WHERE tr.id_mobil=
            mb.id_mobil AND tr.nama=cs.nama AND 
            date(tanggal_rental) >= '$dari' AND date(tanggal_rental) >='$sampai'")->result();   
         $data['title'] = 'Laporan';
         $this->load->view('templates_admin/header', $data);
         $this->load->view('templates_admin/sidebar');
         $this->load->view('templates_admin/topbar');
         $this->load->view('admin/tampilkan_laporan', $data);
         $this->load->view('templates_admin/footer');
      }
   }

   public function _rules()
   {
      $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
      $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');
   }
}