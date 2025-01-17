<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ModelPage'); // Pastikan ModelPage memiliki metode check_user
        $this->load->library('session');
    }

    public function index(){
        $this->load->view('template/header');
        $this->load->view('home/contactus');
        $this->load->view('template/footer');

    }
}