<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->library('session');
            $this->load->model('ModelProduct');
            $this->load->helper('url');// Load model
            // Pastikan model product sudah diload
        }
    
        public function view($id) {
            $data['product'] = $this->ModelProduct->get_id($id);
            $this->load->view('template/header');
            $this->load->view('pages/product', $data);
            $this->load->view('template/footer');
            
        }
    
}
