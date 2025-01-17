<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session'); // Untuk menyimpan data di session
        $this->load->model('ModelProduct'); // Pastikan model produk sudah ada
        $this->load->model('ModelOrder'); // Pastikan model produk sudah ada

    }

    public function index(){
        $data['username'] = $this->session->userdata('username');
        $data['cart'] = $this->session->userdata('cart') ?? []; // Ambil data keranjang dari session
        $this->load->view('template/header');
        $this->load->view('pages/checkout', $data);
        $this->load->view('template/footer');
    }
    
        public function process_checkout() {
            $user_id = $this->session->userdata('user_id');
            $cart = $this->session->userdata('cart') ?? [];
    
            if (empty($cart)) {
                $this->session->set_flashdata('error', 'Your cart is empty.');
                redirect('checkout');
            }
    
            // Panggil model untuk simpan order dan dapatkan Transaction ID
            $transaction_id = $this->ModelOrder->create_order($user_id, $cart);
    
            // Simpan Transaction ID ke dalam session untuk ditampilkan di halaman sukses
            $this->session->set_userdata('transaction_id', $transaction_id);
    
            // Hapus cart setelah checkout selesai
            $this->session->unset_userdata('cart');
    
            // Redirect ke halaman sukses
            redirect('checkout/success');
        }
    
        public function success() {
            $data['username'] = $this->session->userdata('username');
            $data['transaction_id'] = $this->session->userdata('transaction_id');
            $data['cart'] = $this->session->userdata('cart') ?? []; 
            $this->load->view('template/header');
            $this->load->view('pages/success', $data);
            $this->load->view('template/footer');
        }

        public function orders() {
            // Ambil data orders dari model
            $data['orders'] = $this->ModelOrder->get_all_orders();
            $data['title'] = 'Orders Tracking';
            $data['content'] = 'pages/orders'; // View yang akan dimuat di layout
                $this->load->view('template/layout', $data);
            }

        public function view_order($order_id) {
                // Ambil detail order berdasarkan order_id
                $this->load->model('ModelOrder');
                $order = $this->ModelOrder->get_order_by_id($order_id);
                
                // Ambil item-item dari order
                $order_items = $this->ModelOrder->get_order_items($order_id);
            
                // Pastikan order ditemukan
                if ($order) {
                    $data['order'] = $order;
                    $data['order_items'] = $order_items;
                    $data['content'] = 'pages/view-order';
                    $this->load->view('template/layout', $data);
                } else {
                    // Jika order tidak ditemukan
                    show_404();
                }
            }
            
            
        
    }
 