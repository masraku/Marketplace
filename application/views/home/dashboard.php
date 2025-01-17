<!-- Main Content for Dashboard -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard.css'); ?>">

<div class="container mt-5">
    <h3 class="mb-4">Grafik Penjualan Bulanan</h3>

    <!-- Grafik Penjualan -->
    <div class="card mb-4">
        <div class="card-body">
            <canvas id="salesChart"></canvas> <!-- Tempat untuk grafik -->
        </div>
    </div>

    <!-- Tombol Export Data ke Excel -->
    <div class="card">
        <div class="card-body">
            <a href="<?php echo base_url('dashboard/export_sales_to_excel'); ?>" class="btn btn-success">Export to Excel</a>
        </div>
    </div>
</div>

<!-- Chart.js Library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var ctx = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx, {
        type: 'line', // Tipe grafik bisa diganti sesuai kebutuhan (line, bar, etc)
        data: {
            labels: <?php echo json_encode($months); ?>, // Nama bulan atau waktu lainnya
            datasets: [{
                label: 'Penjualan',
                data: <?php echo json_encode(array_column($sales_data, 'total_sales')); ?>, // Data penjualan yang diambil dari database
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>