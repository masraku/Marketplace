<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session'); // Untuk menyimpan data di session
        $this->load->model('ModelProduct'); // Pastikan model produk sudah ada
    }

    public function index(){
        $data['username'] = $this->session->userdata('username');
        $data['cart'] = $this->session->userdata('cart') ?? []; // Ambil data keranjang dari session
        $this->load->view('template/header');
        $this->load->view('pages/checkout', $data);
        $this->load->view('template/footer');
    }

    public function succes(){
        $data['username'] = $this->session->userdata('username');
        $data['cart'] = $this->session->userdata('cart') ?? []; 
        $this->load->view('template/header');
        $this->load->view('pages/succes', $data);
        $this->load->view('template/footer');
    }

}