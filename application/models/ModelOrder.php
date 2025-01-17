<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelOrder extends CI_Model {

    public function create_order($user_id, $cart) {
        // Hitung total amount
        $total_amount = 0;
        foreach ($cart as $item) {
            $total_amount += $item['harga'] * $item['quantity'];
        }

        // Hasilkan Transaction ID
        $transaction_id = $this->generate_transaction_id();

        // Masukkan data ke tabel orders, termasuk transaction_id
        $data_order = [
            'user_id' => $user_id,
            'total_amount' => $total_amount,
            'status' => 'pending',
            'transaction_id' => $transaction_id // Simpan Transaction ID ke database
        ];
        
        $this->db->insert('orders', $data_order);
        $order_id = $this->db->insert_id();  // Ambil ID transaksi yang baru dibuat

        // Masukkan data ke tabel order_items
        foreach ($cart as $item) {
            $data_item = [
                'order_id' => $order_id,
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],
                'price' => $item['harga'],
            ];
            $this->db->insert('order_items', $data_item);
        }

        return $transaction_id; // Kembalikan Transaction ID
    }

    private function generate_transaction_id() {
        // Ambil tanggal saat ini dalam format YYYYMMDD
        $date = date('Ymd');
        
        // Buat kode acak
        $rand_code = strtoupper(bin2hex(random_bytes(3)));  // 3 byte menghasilkan 6 karakter acak
        
        // Gabungkan menjadi Transaction ID
        return 'TX-' . $date . '-' . $rand_code;
    }

    public function get_all_orders() {
        // Mengambil semua order beserta data user yang melakukan checkout
        $this->db->select('orders.id, orders.transaction_id, orders.total_amount, orders.status, users.username, orders.created_at');
        $this->db->from('orders');
        $this->db->join('users', 'orders.user_id = users.id');
        $this->db->order_by('orders.created_at', 'DESC'); // Urutkan berdasarkan tanggal terbaru
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_order_by_id($order_id) {
        $this->db->select('orders.*, users.username');
        $this->db->from('orders');
        $this->db->join('users', 'orders.user_id = users.id');
        $this->db->where('orders.id', $order_id);
        $query = $this->db->get();
        return $query->row_array();
    }
    
    public function get_order_items($order_id) {
        $this->db->select('order_items.*, product.nama');
        $this->db->from('order_items');
        $this->db->join('product', 'order_items.product_id = product.id');
        $this->db->where('order_items.order_id', $order_id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_sales_data() {
        $this->db->select('MONTH(created_at) as month, SUM(total_amount) as total_sales');
        $this->db->from('orders'); // Tabel orders harus ada
        $this->db->group_by('MONTH(created_at)');
        $query = $this->db->get();
        return $query->result_array(); // Mengembalikan data bulan dan total penjualan
    }

    // Fungsi untuk mengambil semua data penjualan
    public function get_all_sales_data() {
        $this->db->select('transaction_id, username, total_amount, status, created_at');
        $this->db->from('orders');
        $query = $this->db->get();
        return $query->result_array(); // Mengembalikan data penjualan lengkap
    }
    
}

