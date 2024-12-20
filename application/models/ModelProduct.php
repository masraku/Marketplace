<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelProduct extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function insert_product($data)
    {
        return $this->db->insert('product', $data);
    }
    public function get_all_products() {
        $query = $this->db->get('product');
        return $query->result(); 
    }
    public function get_product_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('product');
        return $query->row(); 
    }
    public function get_products_by_vendor($vendor){
        $this->db->where('vendor', $vendor);
        $query = $this->db->get('product');
        return $query->result();
    
    }
    public function get_id($id) {
        return $this->db->get_where('product', ['id' => $id])->row();
    }
    public function search_product($keyword) {
        $this->db->like('nama', $keyword); // Cari di kolom nama produk
        $this->db->or_like('vendor', $keyword); // Cari di deskripsi
        $query = $this->db->get('product'); // Ambil semua kolom dari tabel products
        return $query->result(); // Ubah menjadi array
    }

    
    
}