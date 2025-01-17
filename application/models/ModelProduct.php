<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelProduct extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function insert_product($data)
    {
        $data['slug'] = create_slug($data['name']); // Buat slug dari nama produk
        $this->db->insert('product', $data);
        return $this->db->insert_id();
    }
    public function update_product($id, $data) {
        $data['slug'] = create_slug($data['name']); // Perbarui slug saat nama diubah
        $this->db->where('id', $id);
        return $this->db->update('product', $data);
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
    public function delete_product($id) {
        return $this->db->delete('product', ['id' => $id]);
    }

    public function get_product_by_slug($slug) {
        $query = $this->db->get_where('product', ['slug' => $slug]);
        return $query->row(); // Ambil satu baris sebagai objek
    }

    public function search_product($keyword) {
        $this->db->like('nama', $keyword); // Cari di kolom nama produk
        $this->db->or_like('vendor', $keyword); // Cari di deskripsi
        $query = $this->db->get('product'); // Ambil semua kolom dari tabel products
        return $query->result(); // Ubah menjadi array
    }

    
    
}