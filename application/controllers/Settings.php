<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in') || $this->session->userdata('role') !== 'superadmin') {
            redirect('login');
        }
        $this->load->library('form_validation');
        $this->load->model('ModelPage');
    }

    public function index() {
        $data['title'] = 'Settings';
        $data['user'] = $this->ModelPage->get_user($this->session->userdata('user_id'));
        $data['content'] = 'pages/settings'; // View yang akan dimuat di layout
        $this->load->view('template/layout', $data);
    }

    public function update() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
            ];
            $this->ModelPage->update_user($this->session->userdata('user_id'), $data);
            $this->session->set_flashdata('success', 'Profil berhasil diperbarui.');
            redirect('settings');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}


	