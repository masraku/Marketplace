<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyPage extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session'); // Pastikan library session sudah diload
    }
    public function index()
    {
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/header');
        $this->load->view('home/mypage', $data);
        $this->load->view('template/footer');
    }

}