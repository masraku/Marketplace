<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Categories extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ModelProduct');
        $this->load->library('session'); // Pastikan library session sudah diload
    }


public function index()
    {
        $data['product'] = $this->ModelProduct->get_all_products(); 
        $this->load->view('template/header');
        $this->load->view('pages/categories', $data);
        $this->load->view('template/footer');
    }
}