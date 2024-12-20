<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session'); // Untuk menyimpan data di session
        $this->load->model('ModelProduct'); // Pastikan model produk sudah ada
    }

    // Menampilkan halaman keranjang
    public function index() {
        $data['cart'] = $this->session->userdata('cart') ?? []; // Ambil data keranjang dari session
        $this->load->view('template/header');
        $this->load->view('pages/cart', $data); // Buat view untuk menampilkan keranjang
        $this->load->view('template/footer');
    }

    // Menambahkan produk ke keranjang
    public function add($id) {
        // Ambil data produk berdasarkan ID
        $product = $this->ModelProduct->get_product_by_id($id);

        if ($product) {
            $cart = $this->session->userdata('cart') ?? [];
            // Periksa apakah produk sudah ada di keranjang
            if (isset($cart[$id])) {
                $cart[$id]['quantity']++; // Jika ada, tambahkan jumlahnya
            } else {
                $cart[$id] = [
                    'id'       => $product->id,
                    'nama'     => $product->nama,
                    'harga'    => $product->harga,
                    'quantity' => 1,
                    'image'    => $product->image,
                ];
                echo $this->session->flashdata('succes', 'berhasil ditambahkan');
            }
            $this->session->set_userdata('cart', $cart);
            redirect('home');
        } 
        else {
            echo $this->session->flashdata('error', 'gagal ditambahkan');
            show_404(); // Jika produk tidak ditemukan
        }
    }

    // Menghapus produk dari keranjang
    public function remove($id) {
        // Ambil keranjang dari session
        $cart = $this->session->userdata('cart') ?? [];

        // Hapus produk dari keranjang jika ada
        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        // Simpan kembali keranjang ke session
        $this->session->set_userdata('cart', $cart);

        // Redirect kembali ke halaman keranjang
        redirect('cart');
    }

    // Membersihkan seluruh isi keranjang
    public function clear() {
        // Hapus keranjang dari session
        $this->session->unset_userdata('cart');

        // Redirect kembali ke halaman keranjang
        redirect('cart');
    }
    

    
}
