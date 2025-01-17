<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->library('session');
            $this->load->model('ModelProduct');
            $this->load->helper('url');// Load model
            // Pastikan model product sudah diload
        }
    
        public function view($slug){
            $product = $this->ModelProduct->get_product_by_slug($slug);
            if (!$product) {
                show_404();
            }
            else{
            $data['product'] = $product;
            $this->load->view('template/header');
            $this->load->view('pages/product', $data);
            $this->load->view('template/footer');
            }
        }

        
        public function index(){
            if ($this->session->userdata('role') !== 'superadmin') {
                // Jika tidak, alihkan ke halaman lain (misalnya dashboard)
                redirect('dashboard'); // Atau bisa ganti dengan route lain sesuai keperluan
            }
            $data['title'] = 'Product Management';
            $data['product'] = $this->ModelProduct->get_all_products();
            $data['content'] = 'pages/product_admin'; // View yang akan dimuat di layout
            $this->load->view('template/layout', $data);

        }

        public function delete($id) {
            if ($this->ModelProduct->delete_product($id)) {
                $this->session->set_flashdata('success', 'Product deleted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to delete product.');
            }
            redirect('product');
        }

        public function edit($id) {
            $data['title'] = 'Users Management';
            $data['product'] = $this->ModelProduct->get_product_by_id($id);
            $data['content'] = 'pages/editproduct'; // View yang akan dimuat di layout
            $this->load->view('template/layout', $data);
        }

        public function update($id) {
            $data = [
                'nama' => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
                'jenis' => $this->input->post('jenis'),
            ];
        
            if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = './assets/images/upload/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $this->load->library('upload', $config);
        
                if ($this->upload->do_upload('image')) {
                    $data['image'] = $this->upload->data('file_name');
                }
            }
        
            if ($this->ModelProduct->update_product($id, $data)) {
                $this->session->set_flashdata('success', 'Product updated successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to update product.');
            }
        
            redirect('product');
        }
        
        

    
}
