<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ModelPage'); // Pastikan ModelPage memiliki metode check_user
        $this->load->library('session');
    }

    public function index() {
        // Tampilkan halaman login
        $this->load->view('template/header');
        $this->load->view('register/login');
        $this->load->view('template/footer');
    }

    public function masuk() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Periksa login
        $user = $this->ModelPage->check_user($username, $password);
        //print_r($user);die;
        if ($user) {
            // Simpan data user di session
            $this->session->set_userdata([
                'user_id' => $user->id,
                'username' => $user->username,
                'email' => $user->email,
                'telephone' => $user->telephone,
                'alamat' => $user->alamat,
                'kabupaten' => $user->kabupaten,
                'provinsi' => $user->provinsi,
                'pos' => $user->pos,
                'role' => $user->role,
                'logged_in' => true
            ]);

            // Redirect berdasarkan role
            if ($user->role === 'superadmin') {
                redirect('superadmin/index');
            } else {
                redirect('home');
            }
        } else {
            $this->session->set_flashdata('message', 'Username/Email atau Password salah.');
            redirect('login');
        }
    }

    public function keluar() {
        $this->session->unset_userdata([
            'user_id', 'username', 'email', 'telephone',
            'alamat', 'kabupaten', 'provinsi', 'pos', 'role', 'logged_in'
        ]);
        $this->session->sess_destroy();
        redirect('home');
    }
}
