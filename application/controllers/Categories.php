<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Categories extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session'); // Pastikan library session sudah diload
    }


public function index()
    {
        $this->load->view('template/header');
        $this->load->view('pages/categories');
        $this->load->view('template/footer');
    }
}