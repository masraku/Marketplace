<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddProduct extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->model('ModelProduct');
        if ($this->session->userdata('role') !== 'admin') {
            redirect('login');
        }
    }

    public function index() {
        // Tampilkan halaman login
        
        $this->load->view('template/header');
        $this->load->view('pages/addproduct');
        $this->load->view('template/footer');
    }
    public function save_product() {
        $config['upload_path']   = './assets/images/upload';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size']      = 10240; // Maksimal 5 MB
        $config['file_name']     = time() . '_' . $_FILES['image']['name'];
        $this->upload->initialize($config);

        if(!$this->upload->do_upload('image')){
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('addproduct');
        }
        else{
            $upload_data = $this->upload->data();
            $image_name  = $upload_data['file_name'];
            $data = array(
                'vendor'  => $this->input->post('vendor'),
                'nama'  => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
                'stok' => $this->input->post('stok'),
                'image' => $image_name
            );
    
            if ($this->ModelProduct->insert_product($data)) {
                $this->session->set_flashdata('success', 'Product added successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to add product.');
            }
    
            redirect('addproduct');
    }
}
}