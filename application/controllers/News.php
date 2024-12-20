<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ModelPage'); // Pastikan ModelPage memiliki metode check_user
    }

    public function index() {
        // Tampilkan halaman login
        $this->load->view('template/header');
        $this->load->view('home/news');
        $this->load->view('template/footer');
    }
}