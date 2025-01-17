<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ModelOrder'); // Memuat model
    }

    // Menampilkan dashboard dengan grafik penjualan
    public function index() {
        $sales_data = $this->ModelOrder->get_sales_data(); // Ambil data penjualan bulanan
        $months = $this->get_months(); // Ambil bulan untuk label grafik

        $data['sales_data'] = $sales_data;
        $data['months'] = $months;
        $data['content'] = 'home/dashboard'; // View untuk menampilkan grafik dan dashboard
        $this->load->view('template/layout', $data);
    }

    // Mengambil bulan untuk label grafik
    private function get_months() {
        return ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    }

    // Ekspor data penjualan ke file Excel
    public function export_sales_to_excel() {
        $sales_data = $this->ModelOrder->get_all_sales_data(); // Ambil data penjualan dari model

        // Load PhpSpreadsheet library
        $this->load->library('phpspreadsheet');
        
        // Membuat spreadsheet baru
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Menambahkan header kolom
        $sheet->setCellValue('A1', 'Transaction ID');
        $sheet->setCellValue('B1', 'Username');
        $sheet->setCellValue('C1', 'Total Amount');
        $sheet->setCellValue('D1', 'Status');
        $sheet->setCellValue('E1', 'Order Date');

        // Menambahkan data penjualan ke dalam sheet
        $row = 2; // Mulai dari baris kedua
        foreach ($sales_data as $sale) {
            $sheet->setCellValue('A' . $row, $sale['transaction_id']);
            $sheet->setCellValue('B' . $row, $sale['username']);
            $sheet->setCellValue('C' . $row, $sale['total_amount']);
            $sheet->setCellValue('D' . $row, $sale['status']);
            $sheet->setCellValue('E' . $row, $sale['created_at']);
            $row++;
        }

        // Menyimpan file Excel
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $filename = 'sales_data_' . date('Y_m_d') . '.xlsx';

        // Output ke browser
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        
        $writer->save('php://output');
    }

}