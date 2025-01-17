<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in') || $this->session->userdata('role') !== 'superadmin') {
            redirect('login');
        }
        $this->load->model('ModelPage');
    }

    public function index() {
        $data['title'] = 'Users Management';
        $data['users'] = $this->ModelPage->get_all_users();
        $data['content'] = 'pages/user'; // View yang akan dimuat di layout
        $this->load->view('template/layout', $data);
    }

    public function update_role($id) {
        // Ambil data pengguna berdasarkan ID
        $user = $this->Users_model->get_user_by_id($id);
    
        // Cegah perubahan role superadmin
        if ($user->role === 'superadmin') {
            $this->session->set_flashdata('error', 'You cannot edit the role of a superadmin!');
            redirect('users');
            return;
        }
    
        // Ambil role dari input dan update
        $role = $this->input->post('role');
        $this->Users_model->update_user_role($id, $role);
        $this->session->set_flashdata('success', 'User role updated successfully!');
        redirect('users');
    }
    
    public function delete($id) {
        $this->ModelPage->delete_user($id);
        $this->session->set_flashdata('success', 'User deleted successfully!');
        redirect('users');
    }

}


	