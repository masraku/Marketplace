<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends CI_Controller {

public function __construct() {
    parent::__construct();
    $this->load->model('ModelPage');
    $this->load->library('session');

    // Pastikan hanya superadmin yang dapat mengakses
    if ($this->session->userdata('role') !== 'superadmin') {
        redirect('login');
    }
}

public function index() {
    $data['users'] = $this->ModelPage->get_all_users();
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/layout', $data);
    $this->load->view('template/footer');
}

public function change_role() {
    $user_id = $this->input->post('user_id');
    $role = $this->input->post('role');

    if (in_array($role, ['admin', 'user'])) {
        $this->ModelPage->update_role($user_id, $role);
        $this->session->set_flashdata('success', 'Role berhasil diubah.');
    } else {
        $this->session->set_flashdata('error', 'Role tidak valid.');
    }

    redirect('superadmin');
}
}
