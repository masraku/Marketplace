<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('ModelPage'); // Load model
    }

	public function index()
	{
		$this->load->view('template/header');
        $this->load->view('register/signup');
        $this->load->view('template/footer');
	}

    public function insert_user()
    {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $telephone = $this->input->post('telephone');
        $alamat = $this->input->post('alamat');
        $kabupaten = $this->input->post('kabupaten');
        $provinsi = $this->input->post('provinsi');
        $password = $this->input->post('password');
        $pos = $this->input->post('pos');
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Data untuk disimpan ke database
        $data = array(
            'username' => $username,
            'email'    => $email,
            'telephone'=> $telephone,
            'alamat'   => $alamat,
            'kabupaten'=> $kabupaten,
            'provinsi' => $provinsi,
            'pos'      => $pos,
            'password' => $hashed_password
        );
        if ($this->ModelPage->insert_user($data)) {
            redirect('login'); // Redirect ke halaman sukses
        } else {
            $this->load->view('register/signup', ['error' => 'Registrasi gagal.']);
        }
    }
}
