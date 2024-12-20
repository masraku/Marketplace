<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ModelPage');
		$this->load->library('session'); // Pastikan ModelPage memiliki metode check_user
    }

public function index() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('current_password', 'Kata Sandi Saat Ini', 'required');
        $this->form_validation->set_rules('new_password', 'Kata Sandi Baru', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Konfirmasi Kata Sandi Baru', 'required|matches[new_password]');

        if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header');
            $this->load->view('register/change');
			$this->load->view('template/footer');
        } else {
            $user_id = $this->session->userdata('user_id');
            $current_password = $this->input->post('current_password');
            $new_password = password_hash($this->input->post('new_password'), PASSWORD_BCRYPT);

            // Cek kata sandi saat ini
            if ($this->ModelPage->check_password($user_id, $current_password)) {
                // Update kata sandi
                $this->ModelPage->update_password($user_id, $new_password);
                $this->session->set_flashdata('success', 'Kata sandi berhasil diperbarui.');
            } else {
                $this->session->set_flashdata('error', 'Kata sandi saat ini salah.');
            }
            redirect('mypage');
        }
    }
}