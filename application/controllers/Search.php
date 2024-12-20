<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->library('session');
			$this->load->model('ModelProduct'); 
			$this->load->helper('url');// Load model
		}
		public function index() {
			$keyword = $this->input->get('query'); // Ambil data dari input pencarian
			$results = $this->ModelProduct->search_product($keyword); // Panggil model 
		
			$data['product'] = $results; // Kirim hasil pencarian ke view
            $this->load->view('template/header');
			$this->load->view('pages/search', $data);
            $this->load->view('template/footer'); // Tampilkan halaman beranda
		}
		
}
	