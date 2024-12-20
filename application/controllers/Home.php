<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('ModelProduct'); // Pastikan library session sudah diload
    }

    public function index()
    {
        $data['username'] = $this->session->userdata('username');
        $data['product'] = $this->ModelProduct->get_all_products(); 
        $data['product_jkt48'] = $this->ModelProduct->get_products_by_vendor('JKT48');
        $data['product_lumina'] = $this->ModelProduct->get_products_by_vendor('Lumina');
        $data['product_akb48'] = $this->ModelProduct->get_products_by_vendor('AKB48');
        $this->load->view('template/header');
        $this->load->view('home/home', $data);
        $this->load->view('template/footer');
    }

    public function mypage()
    {
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/header');
        $this->load->view('home/mypage');
        $this->load->view('template/footer');
    }

    



}